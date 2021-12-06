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

<<<<<<< HEAD
Route::get('/get-antrian', [TestController::class, 'get']);

=======
>>>>>>> 0158c46c2e5ef4880f9de32994fa96227207897e
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
<<<<<<< HEAD
Route::get('/dashboard/teller/edit/{id_teller}', [AdminController::class, 'edit']);
Route::put('/dashboard/teller/update', [AdminController::class, 'update']);
Route::get('/dashboard/teller/delete/{id_teller}', [AdminController::class, 'delete']);
=======
<<<<<<< HEAD
Route::get('/dashboard/teller/edit/{id_teller}', [AdminController::class, 'edit']);
Route::put('/dashboard/teller/update', [AdminController::class, 'update']);
Route::get('/dashboard/teller/delete/{id}', [AdminController::class, 'delete']);
=======

>>>>>>> 6b6cf095fc8d4efa2d60d135d88d9b42aa4d9437
>>>>>>> 0158c46c2e5ef4880f9de32994fa96227207897e
