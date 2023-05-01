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


Route::get('/admin/new',[adminsController::class,'add'])->name('g.signup');
Route::post('/admin/new', [adminsController::class, 'store'])->name('p.signup');

Route::get('/admin', [adminsController::class,'show'])->name('login');
Route::post('/admin', [adminsController::class,'login'])->name('p.login');



Route::get('/ip', [ipController::class, 'show']);

Route::get('/login', [usuariosController::class, 'index']);

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/faqs', [preguntasController::class,'index'])->name('faqs.index');
Route::get('/faqs/create', function(){
    return view('createFaqs');
} )->name('faqs.create')->middleware('auth');

Route::post('/faqs/create', [preguntasController::class,'create'])->name('faqs.create.post')->middleware('auth');
Route::get('/faqs/{id}/delete', [preguntasController::class,'delete'])->name('faqs.delete')->middleware('auth');
Route::get('/faqs/{id}/edit', [preguntasController::class,'show'])->name('faqs.show')->middleware('auth');
Route::patch('/faqs/{id}', [preguntasController::class,'update'])->name('faqs.update')->middleware('auth');
