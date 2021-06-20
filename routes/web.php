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
//rotas para serem acessadas
Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth'); // middleware = só vai conseguir acessar o ('auth qnd estiver logado')
Route::get('/events/{id}', [EventController::class, 'show']); ##mostrar com base no id
Route::post('/events', [EventController::class, 'store']);
Route::delete('/events/{id}',[EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}',[EventController::class,'edit'])->middleware('auth');
Route::put('/events/update/{id}',[EventController::class,'update'])->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/dashboard',[EventController::class, 'dashboard'])->middleware('auth');
