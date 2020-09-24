<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductCtrl extends Controller {

    public function createProduct() {
            $product = new \App\Product;
            $product->prod_id = htmlentities($_POST["prod_id"]);
            $product->description = htmlentities($_POST["description"]);
            $product->price = htmlentities($_POST["price"]);
            $product->stock_qt = htmlentities($_POST["stock_qt"]);
            request()->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
            $product->path = $imageName;
            $product->save();
            return redirect('/administrateur');
    }

    public function updateProduct(Request $request) {
        try {
            $prodid = htmlentities($_POST["prod_id"]);
            $product = \App\Product::findOrFail($prodid);
            $product->description = htmlentities($_POST["description"]);
            $product->price = htmlentities($_POST["price"]);
            $product->stock_qt = htmlentities($_POST["stock_qt"]);
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($request->file('image')) {
                echo 'OKKKKKKKKKK';
                $imagePath = $request->file('image');
                $imageName = $imagePath->getClientOriginalName();
                $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
            }
            $product->path = $path . '/' . $imageName;
            $product->save();
            //return redirect('/administrateur');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return view('errorPage',
                [
                    'errorMsg' => 'Produit Inexistent! Vueillez contacter un administrateur1!',
                    'where' => '/administrateur'
                ]);
        }
    }

    public function deleteProduct() {
        try {
            $prodid = htmlentities($_POST["prod_id"]);
            $product = \App\Product::findOrFail($prodid);
            $product->delete();
            return redirect('/administrateur');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return view('errorPage',
                [
                    'errorMsg' => 'Produit Inexistent! Vueillez contacter un administrateur!2',
                    'where' => '/administrateur'
                ]);
        }
    }
}
