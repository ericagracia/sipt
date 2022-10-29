<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KRSController;

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

// Route::get('/cv', function () {
//     return view('cv');
// });

Route::get('/lihatkhs', [KRSController::class, 'index']);

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/data', function () {
    return view('data');
});

Route::get('/admin', function () { 
    return view('admin'); 
});
