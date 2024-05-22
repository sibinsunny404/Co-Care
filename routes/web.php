<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StateController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\VaccinetypeController;

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
    return view('frontend.layouts.index');
});

Route::get('adminlogin', function () {
    return view('admin/layouts/login');
});

Route::get('dashboard', function () {
    return view('admin/layouts/index');
});
Route::get('testform', function () {
    return view('admin/layouts/form');
});

Route::resource('state', StateController::class);
Route::resource('district', DistrictController::class);
Route::resource('vaccinetype', VaccinetypeController::class);