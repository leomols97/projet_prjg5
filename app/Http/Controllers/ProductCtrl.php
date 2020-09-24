<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductCtrl extends Controller {

    public function createProduct() {
        $product = new \App\Product;
        $product->prod_id = htmlentities($_POST["prod_id"]);
        $product->description = htmlentities($_POST["description"]);
        $product->price = htmlentities($_POST["price"]);
        $product->stock_qt = htmlentities($_POST["stock_qt"]);
        $product->path = htmlentities($_POST["path"]);
        $product->save();
    }

    public function updateProduct() {
        $prodid = htmlentities($_POST["prod_id"]);
        $product = \App\Product::find($prodid);
        $product->description = htmlentities($_POST["description"]);
        $product->price = htmlentities($_POST["price"]);
        $product->stock_qt = htmlentities($_POST["stock_qt"]);
        $product->path = htmlentities($_POST["path"]);
        $product->save();
    }

    public function deleteProduct() {
        $prodid = htmlentities($_POST["prod_id"]);
        $product = \App\Product::find($prodid);
        $product->delete();
    }
}
