<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// API Health Check
Route::get('/ping', function () {
    return response('pong', 200);
});

// 其它 API 直接加在這裡
// Route::get('/devices', ...);