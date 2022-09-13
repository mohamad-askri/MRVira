<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
Route::prefix('admin')->group(function () {
    Route::get('/register',[RegisterController::class,'index'])->name('admin.register');
    Route::post('/register',[RegisterController::class,'store'])->name('admin.store');
    Route::get('/login',[LoginController::class,'index'])->name('admin.login');
        // Matches The "/admin/users" UR);
});

//Route::get('/', function () {
////    return view('admin.register');
//    echo 22;
//});
