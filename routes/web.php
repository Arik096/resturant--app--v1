<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restrurent\RestrurentController;

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

Route::view('/', 'welcome')->name('LandingPage');


Route::get('/resList', [RestrurentController::class, 'index'])->name('RestrurentList');
Route::get('/addRes', [RestrurentController::class, 'createPage'])->name('AddRestrurentPage');
Route::post('/resList', [RestrurentController::class, 'create'])->name('AddRestrurent');
