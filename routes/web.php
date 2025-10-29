<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CrudController;

use Illuminate\Support\Facades\Route;

// 사용자 페이지
Route::get('/', function () {
    return view('welcome');
});

// CRUD 페이지
Route::get('/crud', [CrudController::class, 'index'])->name('crud.index');

// admin 
Route::group(['prefix' => 'admin'], function () {
    // admin/dashboard 경로
    Route::get('/', function () {
        // return view('admin.dashboard');
        return 'Admin Dashboard';
    })->name('admin');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
