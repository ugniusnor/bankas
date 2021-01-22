<?php


use App\Http\Controllers\AccountController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\Accounts;
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

Route::get('/home',function() {
    return view('index');
});
Route::get('/',function() {
    return view('index');
});
//register
Route::get('/register', [RegisterController::class, 'index'] )->name('register');
Route::post('/register', [RegisterController::class, 'store'] );
//login

Route::get('/login', [LoginController::class, 'index'] )->name('login');
Route::post('/login', [LoginController::class, 'store']);

//logout
Route::get('/logout', [LogoutController::class, 'index'] )->name('logout');


//dashboard
Route::get('/dashboard', [DasboardController::class, 'index'] )->name('dashboard');

//clients
Route::get('/clients', [ClientController::class, 'index'] )->name('clients');
Route::get('/clients/{id}', [AccountController::class, 'show'] )->name('accounts.create');

Route::post('/clients', [ClientController::class, 'store'] );

//clients' accounts 
Route::post('/accounts/create', [AccountController::class, 'store'] )->name('open');
Route::delete('/accounts/delete', [AccountController::class, 'destroy'] );
Route::post('/accounts/update/{id}', [AccountController::class, 'update'] );
