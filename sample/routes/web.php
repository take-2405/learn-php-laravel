<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeShowController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    return view('new-page');
});

Route::get('/time', [TimeShowController::class,"timeshow"]);
