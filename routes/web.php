<?php

use Illuminate\Support\Facades\Route;

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
    return view('Uomo');
})->name("Uomo"); 

Route::get('/', function () {
    return view('Donna');
})->name("Donna");


Route::get('/', function () {
    return view('Bambini');
})->name("Bambini");


Route::get('/', function () {
    return view('Boolean');
})->name("Boolean"); 

