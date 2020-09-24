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

Route::get('/', 'AppCtrl@displayHomePage');
Route::post('/connect', 'AppCtrl@connexion');
Route::get('/administrateur', 'AdminCtrl@adminMainPage');
Route::post('/administrateur/createUser', 'MyUserCtrl@createUser');
Route::post('/administrateur/createProduct', 'ProductCtrl@createProduct');
