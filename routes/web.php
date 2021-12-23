<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ThemeController;





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
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
});
Route::post("/login",    [SessionController::class,'login']);
Route::get("/logout", [SessionController::class,'logout']);

Route::get('/register', function () {
    return view('register');
});
Route::post("/register", [RegistrationController::class, 'register']);

Route::middleware(['menu'])->group(function () {
    Route::get('/about', function () {
        return view('pages.about');
    });
    Route::get('/faq', function () {
        return view('pages.faq');
    });
    Route::get('/features', function () {
        return view('pages.features');
    });
    Route::get('/pricing', function () {
        return view('pages.pricing');
    });
});

Route::patch('theme',[ThemeController::class,'theme']);

