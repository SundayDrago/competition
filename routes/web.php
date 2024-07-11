<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use Maatwebsite\Excel\Facades\Excel;

use App\Imports\QuestionsImport;

use App\Imports\AnswersImport;

use App\Models\Question;

use App\Models\Answer;



Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/admin', 'AdminController@home')->name('admin.home');

Route::get('/add_schools_view', [AdminController::class, 'addview']);

Route::post('/addschool', [AdminController::class, 'addschools']);

Route::get('/retrieve_participants', [AdminController::class, 'participantview']);

Route::get('/addChallenges', [AdminController::class, 'add_challenges']);

Route::get('/retrieve_representatives', [AdminController::class, 'representative_view']);

Route::post('/import', [AdminController::class, 'import'])->name('admin.import');

Route::get('challenge', [AdminController::class, 'createChallenge'])->name('admin.challenge');




