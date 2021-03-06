<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users\HomeController;
use \App\Http\Controllers\users\ContactsController;
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

Route::get('/',[HomeController::class,'index'])->name('users.home');
Route::post('/contact/submit',[ContactsController::class,'store'])->name('users.contact');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
