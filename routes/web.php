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
use App\Http\Controllers\EventController;
Route::get('/', [EventController::class, 'index']  );
Route::get('/events/create', [EventController::class, 'create']  ); #criar dado do banco
Route::get('/events/{id}', [EventController::class, 'show']); #show - ver um dado do banco

Route::post('/events',[EventController::class,'store']);

Route::get('contact', function () {
    return view('contact');
});




## Rotas condicionais -- Estudo
/*
Route::get('/products', function () {

    $busca=request('search');


    return view('products',['busca' => $busca]);
});
Route::get('/products/{id?}', function ($id) {
    return view('produto',['id' =>$id]);
});
*/


