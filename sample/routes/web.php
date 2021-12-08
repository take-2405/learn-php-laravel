<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('new-page');
});

// Route::get('/new', function () {
//     return view('new-page');
// });
