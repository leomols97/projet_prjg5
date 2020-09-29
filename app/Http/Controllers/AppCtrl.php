<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AppCtrl extends Controller
{
    public function displayHomePage()
    {
        return view('homePage');
    }

    public function connexion(Request $request)
    {
        try {
            $user_id = htmlentities($_POST["myuser_id"]);
            $pass_word = htmlentities($_POST["pass_word"]);
            $user = \App\MyUser::findOrFail($user_id);
            if ($user->pass_word != $pass_word)
                return "<script> alert('Mot de Passe Invalide!') </script>";
            else if ($user->is_admin) {
                $request->session()->put('is_admin', '1');
                $request->session()->put('is_connected', '1');
                return redirect('/administrateur');
            } else {
                $request->session()->put('is_connected', '1');
                return redirect('/storePage');
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return view('errorPage',
                [
                    'errorMsg' => 'Utilisateur Inexistent! Vueillez contacter un administrateur!',
                    'where' => '/'
                ]);
        }
    }

    public function storePage() {
        $products = \App\Product::all();
        return view("storePage", ["products" => $products]);
    }

    public function resolveBuy() {
        $user = $_POST["user"];
        $details = json_decode($_POST["products"]);
        $pannier = new \App\Pannier;
        $pannier->date_bought = Carbon::today();
        $pannier->bought = 0;
        $pannier->owner = $user;
        $pannier->save();
        for($i = 0; $i < count($details->qt); $i++) {
            $manytomany = new \App\PanierProduct;
            $manytomany->pan_id = $pannier->id;
            $manytomany->prod_id = $details->prod_id[$i];
            $manytomany->qt = $details->qt[$i];
            $manytomany->save();
            $product = \App\Product::find($details->prod_id[$i]);
            $product->stock_qt -= $details->qt[$i];
            $product->save();
        }
        return redirect("/storePage");
    }

}
