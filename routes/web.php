<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\Admin\AppController;
Route::controller(AppController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('app/create', 'add')->name('app.add');
    Route::post('app/create', 'create')->name('app.create');
    Route::get('app', 'index')->name('app.index');
    Route::get('app/map', 'map')->name('app.map');
});