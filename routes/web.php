<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\PerformanceController;

use App\Http\Controllers\ImportController;

//use App\Http\Controllers\challengeController;

use App\Http\Controllers\AdminController;

use Maatwebsite\Excel\Facades\Excel;

use App\Models\Question;

use App\Models\Answer;

use App\Models\Challenge;



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

Route::get('/add_schools_view', [AdminController::class, 'addview']);//From the sidebar.blade.php

Route::post('/addschool', [AdminController::class, 'addschools']); //From the school.blade.php

Route::get('/retrieve_participants', [AdminController::class, 'participantview']);

Route::get('/retrieve_representatives', [AdminController::class, 'representative_view']);

Route::get('/participant_rejected', [AdminController::class, 'viewrejected']);

Route::get('/view_reports', [AdminController::class, 'viewreport']);

Route::get('/view_attempts', [AdminController::class, 'viewattempt']);

Route::get('/school_performance', [PerformanceController::class, 'showSchoolPerformance']);

Route::get('/participant_performance/{participantId}', [PerformanceController::class, 'showParticipantPerformance']);

//For import the files
Route::get('/upload_files', [ImportController::class, 'showUploadForm']);
Route::get('/import_files', [ImportController::class, 'importFiles']);

//For challenges
// Route::get('challenges_create', [ChallengeController::class, 'create']);
// Route::post('challenges', [ChallengeController::class, 'store']);