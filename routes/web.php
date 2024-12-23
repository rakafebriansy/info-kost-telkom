<?php

use App\Livewire\Auth\LoginPage;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/login', LoginPage::class);

Route::group([
    'prefix' => 'overkos',
    'middleware' => ['auth'],
], function() {
    Route::get('/dashboard', App\Livewire\Overkos\Dashboard::class)->name('overkos.dashboard');
});
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth'],
], function() {
    Route::get('/dashboard', App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
});
