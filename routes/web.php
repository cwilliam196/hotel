<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OverviewController;
use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\UserManagementController;

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
Route::get('/', [OverviewController::class, 'index']);
//untuk menampilkan halaman awal
Route::get('/services', [OverviewController::class, 'services']);
//untuk menampilkan halaman services
Route::get('/contact', [OverviewController::class, 'contact']);
//untuk menampilkan halaman blog
Route::get('/blog', [OverviewController::class, 'blog']);



Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    //Untuk Menampilakn Halaman Dashboard Saat Login
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });

    //Route untuk Halaman User Management
    Route::prefix('users')->group (function () {
        Route::get('/', [UsersController::class, 'index'])->name('users');
        Route::get('{user}/edit', [UsersController::Class, 'edit'])->name('edit');
        Route::patch('{user}', [UsersController::class, 'update'])->name('update');
        Route::post('{user}', [UsersController::class, 'destroy'])->name('destroy');
    });

    //Route untuk halaman room
    Route::prefix('room')->group (function () {

        Route::get('/', [RoomController::class, 'index'])->name('room');
        Route::get('/add', [RoomController::class, 'create'])->name('add');
        Route::post('/', [RoomController::class, 'store'])->name('update');
        Route::get('{room}/edit', [RoomController::class, 'edit'])->name('edit');
        Route::patch('{room}', [RoomController::class, 'update'])->name('update');
    });


    //Route Untuk Menampilkan Halaman Invoice
    Route::prefix('invoice')->group(function() {

        Route::get('/', [InvoiceController::class, 'index'])->name('invoice');
    });

    //Route untuk menampillkan halaman billing user
    Route::prefix('payment')->group(function() {

        Route::get('/', [PaymentController::class,'index'])->name('payment');
        Route::post('/', [PaymentController::class, 'store'])->name('checkOut');
    });

});


// Route::middleware('auth')->group(function () {

//     Route::prefix('payment')->name('payment.')->group(function () {

//     Route::get('/payment', [DashboardController::class, 'index']);

//     });
    
// });


// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/services', function () {
//     return view('services');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/blog', function () {
//     return view('blog');
// });





// Route::middleware('auth')->group(function () {
    
// });


