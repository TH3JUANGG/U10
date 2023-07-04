<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConexionController;

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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/brochure', function () {
    return view('brochure');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/curricular_vitae', function () {
    return view('curricular_vitae');
});

Route::resource('views',ConexionController::class);