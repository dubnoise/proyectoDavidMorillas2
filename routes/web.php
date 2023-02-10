<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;

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

//INICIO
Route::get('/', function () {
    return view('inicio');
})->name('inicio');


//CABECERA
    // Route::get('miembros', function () {
    //     return view('miembros');
    // })->name('miembros');

    // Route::get('miembro/{id}', function () {
    //     return view('miembro');
    // })->name('miembro');

    // Route::get('eventos', function () {
    //     return view('eventos');
    // })->name('eventos');

// Route::get('contacto', function () {
//     return view('contacto');
// })->name('contacto');

Route::get('dondeestamos', function () {
    return view('dondeestamos');
})->name('dondeestamos');

// Route::get('añadirevento', function () {
//     return view('añadirevento');
// })->name('añadirevento');

// Route::get('registro', function () {
//     return view('registro');
// })->name('registro');

// Route::get('login', function () {
//     return view('login');
// })->name('login');


//FOOTER
Route::get('politicacookies', function() {
    return view('politicacookies');
})->name('politicacookies');

Route::get('configuracioncookies', function() {
    return view('configuracioncookies');
})->name('configuracioncookis');

Route::get('politicaprivacidad', function() {
    return view('politicaprivacidad');
})->name('politicaprivacidad');

Route::get('terminosycondiciones', function() {
    return view('terminosycondiciones');
})->name('terminosycondiciones');

Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');

Route::resource('users', UserController::class);
Route::resource('events', EventController::class);
Route::resource('messages', MessageController::class);

Route::get('registro', [LoginController::class, 'registerForm']);
Route::post('registro', [LoginController::class, 'register'])->name('registro');
Route::get('login', [LoginController::class, 'loginForm']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('cuenta', function(){
    return view('auth.account');
})->name('users.account')
->middleware('auth');

