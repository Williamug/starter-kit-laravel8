<?php

use App\Http\Controllers\Web\Super\AdmissionsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'super', 'auth:sanctum', 'varified'], function () {
    // dashboard
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // admission
    Route::get('/admission', [AdmissionsController::class, 'index'])->name('admission.index');
});
