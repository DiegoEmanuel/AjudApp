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

Route::get('/', function () {
    $nome = "Diego";
    $idade=23;
    $sexo="Masculino";
    $arr=[10,20,30,40,50];

    return view('welcome',
    [
        'nome' => $nome,
        'idade2' => $idade,
        'sexo' => $sexo,
        'arr' => $arr,
    ]);

});
Route::get('contact', function () {
    return view('contact');
});
Route::get('products', function () {
    return view('products');
});
