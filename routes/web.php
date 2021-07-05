<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstallmentController;

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

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
    //changed postlogin from store
	Route::post('/login',[AdminController::class, 'postLogin'])->name('admin.login');
});




Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/installment', [InstallmentController::class, 'show']);
// Route::get('/installment/store', [InstallmentController::class, 'addInstallments'])->name('installment.add');
Route::post('/installment/store', [InstallmentController::class, 'addInstallments'])->name('installment.add');

// Route::get('/installment', function () {
//     return view('installment.create', ['users' => 'sad']);
// });
