<?php

use App\Models\Marketing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Graph2024Controller;
use App\Http\Controllers\Dashboard_2024Controller;
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
Route::get("/2024/marketing/create",[Marketing_2024Controller::class, 'create'])->middleware('auth');
Route::post("/2024/marketing",[Marketing_2024Controller::class, 'store'])->middleware('auth');
Route::get("/2024/marketing/index", [Marketing_2024Controller::class, 'index'])->name('marketing.index')->middleware('auth');


//Use Post in javascript and not delete because AJax is  block in our server 
Route::post("/2024/marketing/delete/{id}",[Marketing_2024Controller::class, 'destroy'])->middleware('auth');
Route::get("/2024/marketing/{id}",[Marketing_2024Controller::class, 'show'])->middleware('auth');


//Dashboard
Route::get("/2024/dashboard", [Dashboard_2024Controller::class, 'users'])->middleware('auth');


// Graphs
Route::get("/2024/dashboard/lead_distribution", [Graph2024Controller::class,'lead_distribution'])->middleware('auth');
Route::get("/2024/dashboard/lead_based_headcount", [Graph2024Controller::class,'lead_based_headcount'])->middleware('auth');
Route::get("/2024/dashboard/website_leads_based_headcount", [Graph2024Controller::class,'website_leads_based_headcount'])->middleware('auth');
Route::get("/2024/dashboard/contributing_website", [Graph2024Controller::class,'contributing_website'])->middleware('auth');
Route::get("/2024/dashboard/age", [Graph2024Controller::class,'age'])->middleware('auth');
Route::get("/2024/dashboard/monthly_lead_count", [Graph2024Controller::class,'monthly_lead_count'])->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

