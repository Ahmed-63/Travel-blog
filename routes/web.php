<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\PostController;


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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});


// La route-ressource => Les routes "post.*"
Route::resource('posts', PostController::class);

Route::resource('chirps', ChirpController::class)
->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);