<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/24.12.3374_dzacky-arcaya-rahman', function () {
    return view('biodata');
});

