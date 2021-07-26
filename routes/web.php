<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use App\Models\Requests;

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


//Backend Routes
Route::get('backend/login', function(){
    return view('login');
});

Route::get('backend/dashboard', function(){
    return view('dashboard');
});

//Frontend Routes
Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('user_dash');
});

Route::get('/requests', function () {
    return view('requests');
});
Route::resource('/showRequests', RequestController::class);
//Route::get('/showRequests',[App\Http\Controllers\RequestController::class, 'show']);
Route::post('/saveRequest', [App\Http\Controllers\RequestController::class, 'store'])->name('saveRequest');

Route::get('/signin', function () {
    return view('signin');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


