<?php

use Illuminate\Support\Facades\Route;

Route::transRoute('search', fn() => view('search'));
Route::transRoute('contact', fn() => view('contact'));
