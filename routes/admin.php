<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GradeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Auth::routes();

Route::group(
    [
        'middleware' => ['guest']
    ], function () {
    Route::get('/', function () {
        return view('auth.pages.login');
    });

});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

    /**************************** Admin Routes   ****************************/
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

        Route::get('/', [AdminController::class, 'index'])->name('home');

        /**************************** Grade Routes  ****************************/
        Route::resource('/grade', GradeController::class);

    });
});



