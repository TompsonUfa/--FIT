<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\BotController;
use App\Http\Controllers\PollitikaController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [MainController::class, 'show']);
Route::post('/', [BotController::class, 'post']);

Route::get('/politika-konfidencialnosti', [PollitikaController::class, 'show']);

Route::get('admin', function () {
    return redirect('/admin/courses');
});
Route::get('/admin/courses', [AdminController::class, 'showCourses']);
Route::get('/admin/posters', [AdminController::class, 'showPosters']);
Route::get('/admin/teachers', [AdminController::class, 'showTeachers']);
Route::get('/admin/employment', [AdminController::class, 'showEmployment']);
