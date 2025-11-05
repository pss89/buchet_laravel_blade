<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\MainController;

use Illuminate\Support\Facades\Route;

// 사용자 페이지
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [MainController::class, 'index'])->name('index');

// CRUD 페이지
// Route::get('/crud', [CrudController::class, 'index'])->name('crud.index');
// crud를 그룹으로
Route::group(['prefix' => 'crud'], function () {
    Route::get('/', [CrudController::class, 'index'])->name('crud.index');
    
    // 글 작성,수정 페이지 (동시에)
    Route::get('/form/{id?}', [CrudController::class, 'form'])->name('crud.form');
});

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
