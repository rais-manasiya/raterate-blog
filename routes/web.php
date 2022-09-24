<?php

use App\Http\Controllers\User_Details;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
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
    return view('welcome');
});

Route::get('/users', [User_Details::class, 'fetchAllUsers']);
Route::get('/users/{id?}', [User_Details::class, 'fetchSingleUser']);
Route::get('/posts/{uid?}', [Posts::class, 'fetchAllPosts']);


