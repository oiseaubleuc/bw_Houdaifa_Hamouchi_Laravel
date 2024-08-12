<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => [
            [
                'id' => 1,
                'title' => 'director',
                'salary' => '$10,000'

            ],
            [
                'id' => 2,
                'title' => 'programmer',
                'salary' => '$20,000'

            ],
            [
                'id' => 3,
                'title' => 'teacher',
                'salary' => '$30,000'

            ],

        ]

    ]);
});



Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'director',
            'salary' => '$10,000'
        ],
        [
            'id' => 2,
            'title' => 'programmer',
            'salary' => '$20,000'
        ],
        [
            'id' => 3,
            'title' => 'teacher',
            'salary' => '$30,000'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] === (int)$id);
    if (!$job) {
        abort(404, 'Job not found');
    }

    return view('job', ['job' => $job]);
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

route::get('/register', [RegisteredUserController::class,'create']);
route::post('/register', [RegisteredUserController::class,'store']);

route::get('/login', [SessionController::class,'create']);
route::post('/login', [SessionController::class,'store']);
route::post('/logout', [SessionController::class,'destroy']);


