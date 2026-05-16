<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduktController;

Route::get('/', [ProduktController::class, 'index']);

Route::get('/produkt/{id}', [ProduktController::class, 'show']);

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/panel', [AdminController::class, 'panel'])->name('admin.panel');
});

Route::get('/profil/{id}', function ($id) {
    return "ID użytkownika: " . $id;
});

Route::get('/uzytkownik/{user}', function (User $user) {
    return "Użytkownik: " . $user->name;
});

Route::post('/user/{user}/update', [UserController::class, 'update'])->name('user.update');
