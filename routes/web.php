<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MainController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/user/{id}', function ($id) {
    return 'ID: '.$id;
});
