<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('welcome');*/
Auth::routes();

Route::get('/deneme/{id}', [App\Http\Controllers\RoomController::class, 'deneme'])->name('deneme');
Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('welcome');



Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
   // Route::get('/room-show/{id}', [App\Http\Controllers\DashboardController::class, 'roomShow'])->name('room.show');
    Route::get('/room-show/{id}', [App\Http\Controllers\RoomController::class, 'roomShow'])->name('room.show');
    Route::post('/message-post', [App\Http\Controllers\MessageController::class, 'messagePost'])->name('message.post');
});
