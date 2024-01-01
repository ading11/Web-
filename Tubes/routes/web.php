<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilePageController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResepController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/makananringan', function () {
    return view('makananringan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfilePageController::class, 'edit'])->name('profilepage');
Route::get('/profile/edit', [ProfilePageController::class, 'edit']);
Route::post('/profile/update', [ProfilePageController::class, 'update'])->name('profilepage.update');

Route::get('/resep/create', [ResepController::class, 'create']);
Route::post('/resep', [ResepController::class, 'store'])->name('resep.store');

Route::get('/resepikanbakar', function () {
    return view('resepikanbakar');
});