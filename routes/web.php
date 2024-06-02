<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return redirect('/login');
});

// Authentication routes
Auth::routes(['register' => false]);

// User information route
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show'])    ->middleware('auth')
->name('user.show');
