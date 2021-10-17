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

Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');