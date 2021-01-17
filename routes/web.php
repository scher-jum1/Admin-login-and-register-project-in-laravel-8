<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;

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

Route::get('/', function () {
    return view('login');
});
Route::get('/logout', function () {
	Session::forget('user');
    return redirect('/');
});
Route::post("/", [UserController::class,'login']);
Route::view('forgot','forgot');
Route::view('register','register');
Route::post("/register", [UserController::class,'register']);
Route::post("/forgot", [MailController::class,'sendEmail']);
Route::view('welcome','welcome');