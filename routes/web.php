<?php

use App\Http\Controllers\UserSessionController;
use Illuminate\Support\Facades\Route;

use App\Livewire\Attendance;
use App\Livewire\CheckIn;
use App\Livewire\Home;
use App\Livewire\Policy;
use App\Livewire\Register; 
use App\Livewire\Dashboard;



 
Route::get('/', Home::class);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class);
    Route::get('/check-in', CheckIn::class);
    Route::get('/attendance', Attendance::class);
    Route::get('/policy', Policy::class);

    Route::post('/check-in', [CheckIn::class, 'store']);
});

Route::post('/check-in', [CheckIn::class, 'store']);

Route::get('/register', Register::class)->name('register');

// Login routes
Route::get('/login', [UserSessionController::class, 'index'])->name('login');
Route::post('/login', [UserSessionController::class, 'login']);

Route::post('/logout', [UserSessionController::class, 'logout'])->name('logout');

