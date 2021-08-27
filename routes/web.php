<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('role:0')->name('home');
Route::get('/super/home', [App\Http\Controllers\SuperHomeController::class, 'index'])->middleware('role:1')->name('super.home');
Route::get('/admin/home', [App\Http\Controllers\AdminHomeController::class, 'index'])->middleware('role:2')->name('admin.home');

