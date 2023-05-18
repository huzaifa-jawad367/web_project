<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\volunteer;
use App\Http\Controllers\child;
use App\Http\Controllers\report;
use App\Http\Controllers\search;
use App\Http\Controllers\profilef;
use App\Http\Controllers\profilel;
use App\Http\Controllers\home;
use App\Http\Controllers\MyAuthentication;
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

Route::get('/',[home::class,'index'] );

Route::get('/registerv', [volunteer::class,'index'])->middleware('isLoggedIn');
Route::post('/registerv', [volunteer::class,'register'])->middleware('isLoggedIn');


Route::get('/registerc', [child::class,'index'])->middleware('isLoggedIn');
Route::post('/registerc', [child::class,'register'])->middleware('isLoggedIn');

Route::get('/report', [report::class,'index'])->middleware('isLoggedIn');
Route::post('/report', [report::class,'register'])->middleware('isLoggedIn');


Route::get('/search', [search::class,'index']);

Route::get('/profilef', [profilef::class,'index']);

Route::get('/profilel', [profilel::class,'index']);

Route::get('/login', [MyAuthentication::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/registeration', [MyAuthentication::class, 'registeration'])->middleware('alreadyLoggedIn');

Route::post('/register-user', [MyAuthentication::class, 'registerUser'])->name('register-user');

// Route::get('/signup', function() {
//     return view('signup');
// });

Route::get('/submitted', function() {
    return view('submitted');
});

Route::post('/signin-user', [MyAuthentication::class, 'login_user'])->name('signin-user');
Route::get('/dashboard', [MyAuthentication::class, 'dashboard'])->middleware('isLoggedIn');

Route::get('/logout', [MyAuthentication::class, 'logout']);