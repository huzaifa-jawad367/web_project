<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\volunteer;
use App\Http\Controllers\child;
use App\Http\Controllers\report;
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
    return view('home');
});

Route::get('/registerv', [volunteer::class,'index']);
Route::post('/registerv', [volunteer::class,'register']);


Route::get('/registerc', [child::class,'index']);
Route::post('/registerc', [child::class,'register']);

Route::get('/report', [report::class,'index']);
Route::post('/report', [report::class,'register']);