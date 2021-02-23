<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ContactUsController;
use App\http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Halaman Home
Route::get('/', function () {
    return view('home');
});

/* Praktikum 1 */
// Halaman Product (Route Prefix)
Route::prefix('product')->group(function () {
    Route::get('/', [HomeController::class,'product']);
});

// Halaman News (Route Param)
Route::get('/news/{title}', [HomeController::class,'news']);

// Halaman Program (Route Prefix)
Route::prefix('program')->group(function () {
    Route::get('/', [HomeController::class,'program']);
});

// Halaman About (Route Biasa)
Route::get('/about', function () {
    return view('about-us');
});

// Halaman Resource (Route Resource Only)
Route::resource('/contact-us', ContactUsController::class, 
[
    'only' => ['index', 'create', 'store']
]);

