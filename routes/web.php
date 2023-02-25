<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'home']);

Route::get('/auth', [MainController::class, 'authorization']);
Route::post('/auth/check', [MainController::class, 'authorization_check']);

Route::get('/reg', [MainController::class, 'registration']);
Route::post('/reg/check', [MainController::class, 'registration_check']);

Route::get('/my', [MainController::class, 'myPage']);
