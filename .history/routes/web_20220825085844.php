<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/', [UserController::class,'index']);

Route::get('/appview/books',[UserController::class,'books']);

Route::get('/appview/authors',[UserController::class,'authors']);

Route::post('/users/authenticate',[UserController::class,'authenticate']);

Route::post('/logout',[UserController::class,'logout']);

Route::post('/addbook',[BookController::class,'store']);

Route::post('/updatebook',[BookController::class,'update']);

Route::post('/deletebook',[BookController::class,'delete']);

Route::post('/addauthor',[BookController::class,'store']);

Route::post('/updatebook',[BookController::class,'update']);

Route::post('/deletebook',[BookController::class,'delete']);
