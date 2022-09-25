<?php

use App\Http\Controllers\AlunoController as AlunoController;
use App\Http\Controllers\CursoController as CursoController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.Home.dashboard');
})->middleware(['auth'])->name('dashboard');


Route::controller(AlunoController::class)->middleware('auth')
    ->prefix('aluno')->group(function () {
        Route::get('/', 'index')->name('alunos.index');
        Route::get('/create', 'create')->name('alunos.create');
        Route::get('/edit/{id}', 'edit')->name('alunos.edit');
        Route::post('/store', 'store')->name('alunos.store');
        Route::put('/alter-status', 'alterStatus');
    });


Route::get('get-amount-curso/{id}', function ($id) {
    return \App\Models\Curso::where('id', $id)->get();
});


Route::controller(CursoController::class)->middleware('auth')
    ->prefix('curso')->group(function () {
        Route::get('/', 'index')->name('curso.index');
        Route::get('/create', 'create')->name('curso.create');
        Route::post('/store', 'store')->name('curso.store');
        Route::get('/edit/{curso}', 'edit')->name('curso.edit');
        Route::put('/update', 'update')->name('curso.update');
    });


require __DIR__ . '/auth.php';


//php artisan cache:clear
//php artisan view:clear
//php artisan route:cache
//php artisan config:cache
//php artisan optimize
