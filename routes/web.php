<?php

use App\Http\Controllers\studentsController as studentsController;
use App\Http\Controllers\courseController as courseController;
use App\Http\Controllers\StudentScreenController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $courses = \App\Models\Course::with('Subject')->get();
    return view('welcome', ['courses' => $courses]);
});

Route::get('/dashboard', function () {
    return view('pages.Home.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::controller(studentsController::class)->middleware('auth')
    ->prefix('students')->group(function () {
        Route::get('/', 'index')->name('students.index');
        Route::get('/create', 'create')->name('students.create');
        Route::get('/edit/{id}', 'edit')->name('students.edit');
        Route::post('/store', 'store')->name('students.store');
        Route::put('/alter-status', 'alterStatus');
    });


Route::controller(courseController::class)->middleware('auth')
    ->prefix('course')->group(function () {
        Route::get('/', 'index')->name('course.index');
        Route::get('/create', 'create')->name('course.create');
        Route::post('/store', 'store')->name('course.store');
        Route::get('/edit/{course}', 'edit')->name('course.edit');
        Route::put('/update', 'update')->name('course.update');
        Route::put('/alter-status', 'alterCourseStatus');
    });

Route::controller(SubjectController::class)->middleware('auth')
    ->prefix('subject')->group(function () {
        Route::get('/{course_id}', 'index')->name('subject.index');
        Route::get('/create/{course_id}', 'create')->name('subject.create');
        Route::post('/store', 'store')->name('subject.store');
    });

Route::controller(StudentScreenController::class)->middleware('auth')
    ->prefix('StudentScreen')->group(function () {
        Route::get('/{studentId}', 'index')->name('studentscreen.index');
    });

require __DIR__ . '/auth.php';


//php artisan cache:clear
//php artisan view:clear
//php artisan route:cache
//php artisan config:cache
//php artisan optimize
