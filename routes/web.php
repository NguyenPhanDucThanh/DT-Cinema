<?php

use App\Http\Controllers\PhongController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/admin'],function() {
    Route::group(['prefix' => '/phong'], function() {
        Route::get('/index', [PhongController::class, 'index']);
        Route::get('/data', [PhongController::class, 'getData']);
        Route::post('/index', [PhongController::class, 'store']);

        Route::get('/change-status/{id}', [PhongController::class, 'changeStatus']);
    });
});