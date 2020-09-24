<?php

use App\Http\Controllers\ProductCtrl;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/administrateur', 'AdminCtrl@adminMainPage');
Route::post('/administrateur/createStudent', 'StudentCtrl@addStudent');
Route::post('/administrateur/createProduct', 'ProductCtrl@addProduct');
