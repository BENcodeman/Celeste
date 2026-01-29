<?php

use App\Livewire\Base;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/base', Base::class)->name('base');