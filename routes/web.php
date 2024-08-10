<?php
use Illuminate\Support\Facades\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/home', function () {
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => job::all()
    ]);
});



Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
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

Route::get('/', function () {
    return view('home');
});
