<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontPageController;
use Faker\Guesser\Name;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Route;

#Guest/Tamu
Route::get('/', [FrontPageController::class, 'index'])->name('guest.view');
Route::post('/guest/store', [FrontPageController::class, 'store'])->name('guest.store');

#download files
Route::get('/donwload/{filename}', [FrontPageController::class, 'download'])->name('guest.download');


#login Admin
Route::get('/paneladmin/login', [AdminController::class, 'loginpage'])->name('admin.loginpage');
Route::post('/proseslogin', [AdminController::class, 'login'])->name('admin.proseslogin');
Route::post('/proseslogout', [AdminController::class, 'logout'])->name('admin.proseslogout');
Route::get('/admindashboard', [AdminController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');
Route::get('/admindashboard/export-excel', [AdminController::class, 'exportExcel'])->middleware('auth')->name('admin.exportexcel');




