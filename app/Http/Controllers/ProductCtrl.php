<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class ProductCtrl extends Controller {


	private $target_dir = "images/";

    public function createProduct() {
            $categorie = \App\Categorie::findOrCreate(['description' => htmlentities($_POST["categorie"])]);
            $product = new \App\Product;
            $product->prod_id = htmlentities($_POST["prod_id"]);
            $product->description = htmlentities($_POST["description"]);
            $product->price = htmlentities($_POST["price"]);
            $product->stock_qt = htmlentities($_POST["stock_qt"]);
            $product->categorie = $categorie->cat_id;
            $product->path = $this->retrieveImg();
            $product->save();
            return redirect('/administrateur');
    }

    public function updateProduct(Request $request) {
        try {
            $categorie = \App\Categorie::findOrCreate(['description' => htmlentities($_POST["categorie"])]);
            $prodid = htmlentities($_POST["prod_id"]);
            $product = \App\Product::findOrFail($prodid);
            $product->description = htmlentities($_POST["description"]);
            $product->price = htmlentities($_POST["price"]);
            $product->stock_qt = htmlentities($_POST["stock_qt"]);
            $product->categorie = $categorie->cat_id;
            $product->path = $this->retrieveImg();
            $product->save();
            //return redirect('/administrateur');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return view('errorPage',
                [
                    'errorMsg' => 'Produit Inexistant! Veuillez contacter un administrateur!1',
                    'where' => '/administrateur'
                ]);
        }
    }

    private function retrieveImg() {
        if(isset($_POST['submit'])){
            $name       = $_FILES['image']['name'];
            $temp_name  = $_FILES['image']['tmp_name'];
            if(isset($name) and !empty($name)){
                $location = 'uploads/';
                if(move_uploaded_file($temp_name, $location.$name)){
                    return $location.$name;
                }
            } else {
                echo 'You should select a file to upload !!';
            }
        } else {
            throw new Exception('Pas bien');
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
                    'errorMsg' => 'Produit Inexistent! Vueillez contacter un administrateur!',
                    'where' => '/administrateur'
                ]);
        }
    }
}
