<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class ProductCtrl extends Controller {

    private $target_dir = "images/";

    public function createProduct() {
            $product = new \App\Product;
            $product->prod_id = htmlentities($_POST["prod_id"]);
            $product->description = htmlentities($_POST["description"]);
            $product->price = htmlentities($_POST["price"]);
            $product->stock_qt = htmlentities($_POST["stock_qt"]);
            $product->path = $this->retrieveImg();
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
            $product->path = $this->retrieveImg();
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

    private function retrieveImg() {
        $target_file = $this->target_dir . basename($_FILES["image"]["name"]);
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            throw new Exception("Erreur dans le chargement de l'image");
        }
        if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            throw new Exception("Il a été impossible de faire upload!");
        }
        return $target_file;

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
