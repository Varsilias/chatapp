<?php

use Illuminate\Support\Facades\Route;
use illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChatsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', [ChatsController::class, 'index']);
Route::get('messages', [ChatsController::class,'fetchMessages']);
Route::post('messages', [ChatsController::class, 'sendMessage']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
