<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

}
