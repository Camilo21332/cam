<?php

use App\Http\Controllers\Cursocontroller;
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
    return "hi ";
});
Route::get('/', function () {
    return "vica el  ";
});
Route::get('suma/{num1}', [Cursocontroller::class, 'suma']);
Route::get('sumar/{num1}', [Cursocontroller::class, 'sumar']);
Route::get('par/{num1}', [Cursocontroller::class, 'par']);
Route::get('esPrimo/{num1}', [Cursocontroller::class, 'esPrimo']);


