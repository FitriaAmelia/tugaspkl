<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Hanya untuk role admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return 'halaman admin';
    });

    Route::get('profile', function () {
        return 'halaman profile admin';
    });
});

//Hanya untuk role pengguna
Route::group(['prefix' => 'pengguna', 'middleware' => ['auth', 'role:pengguna']], function () {
    Route::get('/', function () {
        return 'halaman pengguna';
    });

    Route::get('profile', function () {
        return 'halaman profile pengguna';
    });
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('sewa', function () {
        return view('sewa.index');
    })->middleware(['role:admin|pengguna']);

    Route::get('laporan', function () {
        return view('laporan.index');
    })->middleware(['role:admin']);

    Route::get('stock', function () {
        return view('stock.index');
    })->middleware(['role:admin']);

    Route::get('update', function () {
        return view('update.index');
    })->middleware(['role:admin']);

});
