<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Not Authenticated

Route::get('login', [AuthController::class, 'callback']);
Route::get('callback', [AuthController::class, 'callback']);
Route::options('callback', [AuthController::class, 'callback']);

// Authenticated

Route::get('login', [AuthController::class, 'callback']);

Route::get('/', function () {
    return view('welcome');
});