<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;


Route::get('/', Dashboard::class)->name('dashboard');

Route::get('/login', function () {
    return view('layouts.login');
})->name('login')->middleware('guest');

Route::get('/forgot-password', function () {
    return view('layouts.forgot-password');
})->name('forgot-password');
