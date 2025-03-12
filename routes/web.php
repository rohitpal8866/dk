<?php

use App\Http\Controllers\StocksController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('stocks', [StocksController::class , 'index'])->name('stocks.index');

    Route::resource('stocks', StocksController::class);
    
    Route::get('/bulk-stocks', [StocksController::class, 'bluckStocksindex'])->name('bluck.stocks');
    Route::post('/save/bulk-stocks', [StocksController::class, 'bluckStockssave'])->name('bluck.stocks');    
});


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
