<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductCtrl extends Controller {

    public function addProduct() {
        $product = new \App\Product;
        $product->prod_id = htmlentities($_POST["prod_id"]);
        $product->description = htmlentities($_POST["description"]);
        $product->price = htmlentities($_POST["price"]);
        $product->stock_qt = htmlentities($_POST["stock_qt"]);
        $product->path = htmlentities($_POST["path"]);
        $product->save();
    }
}
