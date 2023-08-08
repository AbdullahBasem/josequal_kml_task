<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KmlController;
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

Route::get('/', function () {
    return view('user_kml.index');
});

Route::controller(KmlController::class)->middleware('auth:sanctum')->group(function () {
    Route::get('/', 'index');
    Route::get('kml/create', 'createView')->name('kml.create');
    Route::post('kml/add', 'createSubmit')->name('kml.add');
    Route::get('kml/view/{file}', 'view')->name('kml.view');
    Route::get('kml/delete/{file}', 'delete')->name('kml.delete');


});
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginScreen')->name('login');
    Route::post('/login_action', 'signIn')->name('sign_in');
    Route::get('/logout', 'logout')->name('logout');


});
