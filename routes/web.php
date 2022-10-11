<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use \App\Http\Controllers\AdminController;

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

//
/*Route::prefix('admin')->group(function () {
    Route::get('/register',[RegisterController::class,'index'])->name('admin.register');
    Route::post('/register',[RegisterController::class,'store'])->name('admin.store');
    Route::get('/login',[LoginController::class,'index'])->name('admin.login');
        // Matches The "/admin/users" UR);
});*/

/*Route::get('/', function () {
    return view('welcome');

});*/

Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
//    Route::get('/register', [AdminController::class, 'registerForm']);
//    Route::post('/register',[AdminController::class, 'store'])->name('admin.register');
});

Route::middleware([
    'auth:sanctum,admin',
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.admin-dashboard');
    })->name('dashboard')->middleware('auth:admin');

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
