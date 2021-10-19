<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ProjectController
};

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


Route::any('/posts/search', [ProjectController::class, 'search'])->name('projects.search');
Route::put('/projects/{id}', [ProjectController::class, 'update'])->name('projects.update');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');