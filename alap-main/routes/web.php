<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GiftTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/new-gift-type', function(){
    return view('gift_types.create');
});

Route::post('/new-gift-type', [GiftTypeController::class, 'store'])->name('gift_types.create');
Route::get('/gift_types', [GiftTypeController::class, 'index'])->name('gift_types.index');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
