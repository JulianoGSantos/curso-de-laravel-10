<?php

use App\Http\Controllers\SupportController;
use Illuminate\Support\Facades\Route;

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

//curso laravel-10
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports-create');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports-show');
Route::post('/supports/create', [SupportController::class, 'store'])->name('supports-store');
Route::get('/supports', [SupportController::class, 'index'])->name('supports-index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function (){
    return view('exemplo');
});
