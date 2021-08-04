<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\NumberController;
use App\Http\Controllers\Back\TestController;
use App\Http\Controllers\HomeController;

Route::match(['get', 'post'], '/', [HomeController::class, 'index'])->name('index');
Route::get('/search', [HomeController::class, 'sade'])->name('search2');


Route::prefix('admin/')->middleware('isLogin')->group(function () {
    Route::view('login', 'back.login')->name('admin.login');
    Route::post('login', [AuthController::class, 'loginPost'])->name('admin.login.post');
});

Route::prefix('admin/')->middleware('isAdmin')->group(function () {
    Route::get('tests/list', [TestController::class , 'allData'])->name('tests.list');
    Route::resource('tests', TestController::class);
    Route::resource('users', UserController::class);
    Route::resource('numbers', NumberController::class);
    Route::post('numbers/import', [NumberController::class, 'import'])->name('import');
    Route::delete('number/allDeletes', [NumberController::class, 'allDelete'])->name('allDeletes');
    Route::get('number/search', [NumberController::class, 'searchNumber'])->name('search');
    Route::view('/', 'back.home_admin')->name('home_admin');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
