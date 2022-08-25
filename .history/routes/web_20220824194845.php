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
Route::get('/app/books',[UserController::class,'books']);

Route::get('/app/authors',[UserController::class,'authors']);
Route::post('/users/authenticate',[UserController::class,'authenticate']);


