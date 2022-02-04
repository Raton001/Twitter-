<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create',[App\Http\Controllers\TweetController::class, 'create'])->name('newTweet');
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile');
Route::post('/profile/{user}/follow', [App\Http\Controllers\FollowsController::class, 'store'])->name('followMe');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
