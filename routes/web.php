<?php

use App\Http\Controllers\AdminController;
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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});





Route::get('/', function () {
    return view('welcome');
});








// ADMIN PANNEL WORK..........


Route::get('/admin', [AdminController::class, 'adminLoginForm'])->name('admin.loginForm');

Route::post('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');


Route::group(['middleware'=>'admin'], function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');




});

