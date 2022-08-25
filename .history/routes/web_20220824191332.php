<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('appviews.index');
});

Route::post('/users/login',[UserController::class,'login']);

Route::post('/app/books',[UserController::class,'book']);

Route::post('/app/auth',[UserController::class,'book']);