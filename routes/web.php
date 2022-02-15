<?php

use App\Http\Controllers\Course\CourseViewController;
use App\Http\Controllers\HomeController;
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

Route::get("/", [HomeController::class, 'index']);
Route::get("/login", [HomeController::class, 'login']);
Route::get("/register", [HomeController::class, 'register']);
Route::get("/fac", [HomeController::class, 'factory']);

Route::post("/register", [HomeController::class, 'postRegister']);
Route::post("/login", [HomeController::class, 'postLogin']);
Route::get("/inscrever/{id}", [CourseViewController::class, 'subscribe']);

Route::get('/curso/', [CourseViewController::class, 'dashboard'])->name('course.index');
Route::get('/curso/meus-cursos', [CourseViewController::class, 'listCourse'])->name('course.listCourse');
Route::get('/curso/certificados', [CourseViewController::class, 'listCertificate'])->name('course.certificate');
Route::get('/curso/meu-perfil', [CourseViewController::class, 'showProfile'])->name('course.profile');
Route::get('/curso/{slug?}/{slugclass}', [CourseViewController::class, 'showCourseLesson'])->name('course.showCourseLesson');
Route::get('/curso/{slug?}', [CourseViewController::class, 'showCourse'])->name('course.showCourse');


