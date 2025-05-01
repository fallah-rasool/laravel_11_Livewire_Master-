<?php

use App\Livewire\Counter;
use App\Livewire\Todo\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/counter', Counter::class)->name('page.counter');
Route::get('index',Index::class)->name('page.task');