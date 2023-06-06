<?php

use App\Http\Controllers\familycontroller;
use App\Http\Controllers\landcontroller;
use App\Http\Controllers\placecontroller;
use App\Http\Controllers\user1controller;
use Illuminate\Support\Facades\Route;

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
Route::resource('/users',user1controller::class);
Route::resource('/families',familycontroller::class);
Route::resource('/places',placecontroller::class);
Route::resource('/lands',landcontroller::class);
// Route::get('/users/login',[user1controller::class,'login'])->name('users.login');
Route::post('/users/login',[user1controller::class,'login'])->name('users.login');
