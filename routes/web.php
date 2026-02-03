<?php

use App\Livewire\Base;
use App\Livewire\Testexample;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/base', Base::class)->name('base');
Route::get('/test', Testexample::class)->name('test');