<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\WelcomeController;

// require other route files
// require __DIR__ . '/product/product.php';
// require __DIR__ . '/user/user.php';
// require __DIR__ . '/transaction/transaction.php';
// require __DIR__ . '/forms/forms.php';
// require __DIR__ . '/user/level.php';

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});



// // Route::get('/level', [LevelController::class, 'index']);
// Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
// Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
// Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
// Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
// Route::post('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
// Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');


// Route::get('/user', [UserController::class, 'index']);

// // Route::get('/', function () {
// //     return view('home');
// // });

// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::post('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);



// Route::resource('m_user', POSController::class);