<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);


Route::group([
    'middleware' => ['auth'], 
    'prefik' => 'admin',
    'as' => 'admin.'
], function() {
    // guestbook.test/admin -> route('admin.index')
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

    // guestbook.test/admin/dashboard -> route('admin.dashboard')
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    // Routing CRUD: institution
    Route::resource('/institution', App\Http\Controllers\InstitutionController::class);

    Route::resource('/guests', App\Http\Controllers\GuestController::class)->only(['index', 'show', 'destroy']);

    Route::get('/reports', [App\Http\Controllers\ReportController::class, 'index'])->name('reports.index');
});