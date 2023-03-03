<?php

use App\Http\Controllers\GeneratePdf;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScanController;
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

// Route::get('/scan', function () {
//     return view('scan');
// });
Route::resource('users', GeneratePdf::class);
Route::get('/index',[HomeController::class,'index'])->name('index');
Route::get('/home',[UserController::class,'home'])->name('home');
Route::get('/releve1',[HomeController::class,'releve1'])->name('releve1');
Route::get('/',[HomeController::class,'acceuil'])->name('acceuil');
Route::get('/scandoc',[HomeController::class,'scandoc'])->name('scandoc');
Route::post('/store',[ScanController::class,'store'])->name('store');
Route::get('/scan',[ScanController::class,'scan'])->name('scan');
 