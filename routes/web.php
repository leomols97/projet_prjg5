<?php

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

Route::post('/connect', 'AppCtrl@connexion');
Route::get('/', 'AppCtrl@displayHomePage');
Route::get('/administrateur', 'AdminCtrl@adminMainPage');
Route::post('/administrateur/createStudent', 'AdminCtrl@addStudent');
