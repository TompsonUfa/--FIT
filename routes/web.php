<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\BotController;
use App\Http\Controllers\PollitikaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\PostersController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\EmploymentController;
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

Route::get('/', [MainController::class, 'show']);
Route::post('/', [BotController::class, 'post']);

Route::get('/politika-konfidencialnosti', [PollitikaController::class, 'show']);

Route::get('admin', function () {
    return redirect('/admin/courses');
});
Route::get('/admin/courses', [CoursesController::class, 'show'])->name('courses');
Route::post('/admin/courses', [CoursesController::class, 'delete']);

Route::get('/admin/courses/add', [CoursesController::class, 'showAddCourse']);
Route::post('/admin/courses/add', [CoursesController::class, 'addCourse']);

Route::get('/admin/courses/edit/{id}', [CoursesController::class, 'showEditCourse']);
Route::post('/admin/courses/edit/{id}', [CoursesController::class, 'editCourse']);

Route::get('/admin/posters', [PostersController::class, 'show'])->name('posters');
Route::post('/admin/posters', [PostersController::class, 'delete']);

Route::get('/admin/posters/add', [PostersController::class, 'showAddPoster']);
Route::post('/admin/posters/add', [PostersController::class, 'addPoster']);

Route::get('/admin/posters/edit/{id}', [PostersController::class, 'showEditPoster']);
Route::post('/admin/posters/edit/{id}', [PostersController::class, 'editPoster']);

Route::get('/admin/teachers', [TeachersController::class, 'show'])->name('teachers');
Route::post('/admin/teachers', [TeachersController::class, 'delete']);

Route::get('/admin/teachers/add', [TeachersController::class, 'showAddTeacher']);
Route::post('/admin/teachers/add', [TeachersController::class, 'addTeacher']);

Route::get('/admin/teachers/edit/{id}', [TeachersController::class, 'showEditTeacher']);
Route::post('/admin/teachers/edit/{id}', [TeachersController::class, 'editTeacher']);


Route::get('/admin/employment', [EmploymentController::class, 'show']);
Route::post('/admin/employment', [EmploymentController::class, 'delete']);

Route::get('/admin/employment/add', [EmploymentController::class, 'showAddEmployment']);
Route::post('/admin/employment/add', [EmploymentController::class, 'addEmployment']);
