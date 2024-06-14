<?php

use App\Http\Controllers\CoordinateController;
use App\Http\Controllers\CoordinateUserController;
use App\Http\Controllers\UserController;
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
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');
    Route::resource('users', UserController::class);
    Route::resource('coordinateUsers', CoordinateUserController::class);
    Route::get('/map', [CoordinateController::class, 'index'])->name('places.index');
    Route::get('/find', [CoordinateController::class, 'find'])->name('find');
    Route::post('/updateCoordinates', [CoordinateController::class, 'updateCoordinates'])->name('updateCoordinates');
    Route::post('/addCoordinate', [CoordinateController::class, 'addCoordinate'])->name('addCoordinate');
    Route::get('/ajax', [CoordinateController::class, 'ajax'])->name('ajax');
});

Route::get('/map', [CoordinateController::class, 'index'])->name('places.index');
Route::get('/find', [CoordinateController::class, 'find'])->name('find');
Route::post('/updateCoordinates', [CoordinateController::class, 'updateCoordinates'])->name('updateCoordinates');
Route::post('/addCoordinate', [CoordinateController::class, 'addCoordinate'])->name('addCoordinate');
Route::get('/ajax', [CoordinateController::class, 'ajax'])->name('ajax');
