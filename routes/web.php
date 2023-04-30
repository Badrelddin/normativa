<?php

use App\Http\Controllers\adminsController;
use App\Http\Controllers\ipController;
use App\Http\Controllers\preguntasController;
use App\Http\Controllers\usuariosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/admin', [adminsController::class,'show'])->name('g.login');
Route::post('/admin', [adminsController::class,'login'])->name('p.login');

Route::get('/ip', [ipController::class, 'show']);

Route::get('/login', [usuariosController::class, 'index']);

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/faqs', [preguntasController::class,'index'])->name('faqs.index');
Route::get('/faqs/create', function(){
    return view('createFaqs');
} )->name('faqs.create');
Route::post('/faqs/create', [preguntasController::class,'create'])->name('faqs.create.post');
Route::get('/faqs/{id}/delete', [preguntasController::class,'delete'])->name('faqs.delete');
Route::get('/faqs/{id}/edit', [preguntasController::class,'show'])->name('faqs.show');
Route::patch('/faqs/{id}', [preguntasController::class,'update'])->name('faqs.update');
