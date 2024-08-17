<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Models\Job;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\LanguageController;






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


Route::get('/contact', [ContactController::class, 'showContactForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contact.submit');

Route::view('/about', 'about');
;
Route::view('/faq', 'faq');

Route::get('/home', function (){
    return view('localization');
});
Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');


App::setLocale('fr');
App::setLocale('eng');



Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr', 'nl'])) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');



Route::group(['prefix' => '{locale}'], function() {
    Route::get('welcome', function ($locale) {
        App::setLocale($locale);
        return view('welcome');
    });
});


// Zorg ervoor dat je deze route toevoegt
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create')->middleware('auth');
Route::post('/news', [NewsController::class, 'store'])->name('news.store')->middleware('auth');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit')->middleware('auth');
Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update')->middleware('auth');






Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});



Route::middleware('auth')->group(function () {
    Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
    Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
});

// Admin routes (optional)
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});

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



Route::get('/jobs/pdf', [JobController::class, 'downloadPDF'])->name('jobs.pdf')->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

Route::get('/jobs/{job}/pdf', [JobController::class, 'downloadPDF'])->name('jobs.pdf');
Route::get('/download-pdf', [PDFController::class, 'downloadPDF'])->name('download.pdf');



