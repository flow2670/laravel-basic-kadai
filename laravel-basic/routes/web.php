<?php

use Illuminate\Support\Facades\Route;
// ルーティングを設定するコントローラーを宣言する
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ProductController;
<<<<<<< HEAD
use App\Http\Controllers\VendorController;

=======
>>>>>>> c3213fed4b46b6290d4ae089d7c5c4ab997e1e17


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/products', [ProductController::class, 'index']);
<<<<<<< HEAD

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/vendors/{id}', [VendorController::class, 'show']);
=======
>>>>>>> c3213fed4b46b6290d4ae089d7c5c4ab997e1e17
