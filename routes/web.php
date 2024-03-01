<?php

use App\Models\Marketing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Marketing_2024Controller;

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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Route::get("/2024/marketing/index", [Marketing_2024Controller::class, 'index'])->name('marketing.index')->middleware('auth');

Route::get("/2024/marketing/index", [Marketing_2024Controller::class, 'index'])->name('marketing.index')->middleware('auth');


