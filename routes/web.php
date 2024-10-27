<?php

use App\Http\Controllers\JajalController;
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

Route::pattern('id', '[0-9]+');

Route::get('/', function(){ // callback function
    return 'testing 124';
});

Route::get('/home', function(){ // callback function
    return 'home 124';
});

Route::get('/turu', [JajalController::class, 'turu']);

Route::get('/tangi/samsul', [JajalController::class, 'samsul']);
Route::get('/tangi/{nama}/{detail}', [JajalController::class, 'tangi']);





// Route::get('/coba', [CobaController::class, 'index']);
// Route::get('/about', [CobaController::class, 'about']);
// Route::get('/hello/{nama}', [CobaController::class, 'hello']);