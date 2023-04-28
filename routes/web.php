<?php

use App\Http\Controllers\ipController;
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


Route::get('/admin', function () {
    return view('login');
});

Route::get('/ip', [ipController::class, 'show']);

Route::get('/login', [usuariosController::class, 'index']);