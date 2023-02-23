<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages;

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

Route::get('/', [pages\landingpagecontroller::class, 'index']);

Route::resource('admin', pages\admincontroller::class)->only(['index']);
