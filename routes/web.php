<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/latestnews', function () {
    return view('latestnews');
});
Route::get('/faq', function () {
    return view('faq');
});
