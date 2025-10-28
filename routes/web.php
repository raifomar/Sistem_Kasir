<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

// Halaman utama kasir
Route::get('/', [CashierController::class, 'index'])->name('cashier.index');

// Halaman stok
Route::get('/stok', [StockController::class, 'index'])->name('stock.index');
Route::post('/stok/update/{product}', [StockController::class, 'update'])->name('stock.update');

// Halaman riwayat
Route::get('/riwayat', [TransactionController::class, 'history'])->name('transaction.history');

// Proses pembayaran
Route::post('/bayar', [TransactionController::class, 'store'])->name('transaction.store');

// Endpoint untuk mengelola keranjang (bisa juga pakai Livewire/Inertia)
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');