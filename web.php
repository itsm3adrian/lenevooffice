<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/authenticate', [NewController::class, 'authenticate'])->name('authenticate');

Route::get('/form',[NewController::class,'index']);
Route::POST('/register',[NewController::class,'register']);
Route::get('/view', [NewController::class,'view']);
Route::get('/edit/{id}',[NewController::class,'edit'])->name('register.create');
Route::get('/delete/{id}',[NewController::class,'delete'])->name('register.create');


