<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


Route::get('test', function () {
    $job = Job::first();

    TranslateJob::dispatch($job);

    return 'Done';
});

Route::view('/', 'home');

Route::get('/verkeersrecht', function () {
    return view('verkeersrecht');
})->name('verkeersrecht');

Route::get('/familierecht', function () {
    return view('familierecht');
})->name('familierecht');

Route::get('/strafrecht', function () {
    return view('strafrecht');
})->name('strafrecht');
Route::post('/submit_casus', [JobController::class, 'store'])->name('submit_casus');



Route::view('/contact', 'contact');

Route::view('/about', 'about');
;
Route::view('/faq', 'faq');



Route::view('/news', 'news');


Route::get('/news', [NewsController::class, 'index'])->name('news');




Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


