<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TestController;
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

Route::get('/', [FrontendController::class,'index']);

Route::get('/get-antrian', [TestController::class, 'get']);

Route::post('/next-antrian', [TestController::class, 'next']);
Route::post('/tambah-antrian', [TestController::class, 'tambah']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard/monitor', [AdminController::class, 'index']);
Route::get('/dashboard', function(){
  return redirect('/dashboard/teller');
});
Route::get('/dashboard/teller', [AdminController::class, 'indexTeller']);
Route::get('/dashboard/teller/create', [AdminController::class, 'create']);
Route::post('/dashboard/teller/create/store', [AdminController::class, 'store']);
Route::get('/dashboard/teller/edit/{id_teller}', [AdminController::class, 'edit']);
Route::put('/dashboard/teller/update', [AdminController::class, 'update']);
Route::get('/dashboard/teller/delete/{id_teller}', [AdminController::class, 'delete']);