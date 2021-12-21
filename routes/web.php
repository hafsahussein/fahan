<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes([
  'register' => false, 
  'reset' => false,
  'verify' => false,
]);
Route::get('/', [PageController::class, 'index']);
Route::get('/contact', [PageController::class, 'contact']);
Route::post('/dir', [ContactController::class, 'sendMail']);
Route::get('/admin', [PageController::class, 'admin'])->middleware('auth');

Route::resource('/erayada', WordController::class);



