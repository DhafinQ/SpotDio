<?php

use App\Http\Controllers\AudioController;
use App\Http\Controllers\PlaylistController;
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
    return redirect()->route('audio.index');
});

Route::resource('audio', AudioController::class);

route::post('/playlist/{audio}',[App\Http\Controllers\PlaylistController::class, 'store'])->name('playlist.store');

route::get('/playlist',[App\Http\Controllers\PlaylistController::class, 'index'])->name('playlist.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
