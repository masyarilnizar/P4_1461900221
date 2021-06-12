<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersExport;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('home0221', [HomeController::class, 'home']);
Route::get('export0221', [HomeController::class, 'export']);
Route::get('buku0221', [HomeController::class, 'buku']);
Route::get('jenis0221', [HomeController::class, 'jenis']);