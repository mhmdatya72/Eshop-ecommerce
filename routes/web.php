<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
Route::get('/', function () {
    return view('User.home');
})->name('home');

Route::resource('admin', AdminController::class);








});