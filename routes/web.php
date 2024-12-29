<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('students', 'StudentController');
Route::get('/students', [App\Http\Controllers\StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create'])->name('students.create');
Route::post('/students', [App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}', [App\Http\Controllers\StudentController::class, 'show'])->name('students.show');
Route::get('/students/{student}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [App\Http\Controllers\StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('students.destroy');

//Route::resource('/subjects', 'SubjectController');
Route::get('/subjects', [App\Http\Controllers\SubjectController::class, 'index'])->name('subjects.index');
Route::get('/subjects/create', [App\Http\Controllers\SubjectController::class, 'create'])->name('subjects.create');
Route::post('/subjects', [App\Http\Controllers\SubjectController::class, 'store'])->name('subjects.store');
Route::get('/subjects/{subject}', [App\Http\Controllers\SubjectController::class, 'show'])->name('subjects.show');
Route::get('/subjects/{subject}/edit', [App\Http\Controllers\SubjectController::class, 'edit'])->name('subjects.edit');
Route::put('/subjects/{subject}', [App\Http\Controllers\SubjectController::class, 'update'])->name('subjects.update');
Route::delete('/subjects/{subject}', [App\Http\Controllers\SubjectController::class, 'destroy'])->name('subjects.destroy');

//Route::resource('/halls', 'HallController');
Route::get('/halls', [App\Http\Controllers\HallController::class, 'index'])->name('halls.index');
Route::get('/halls/create', [App\Http\Controllers\HallController::class, 'create'])->name('halls.create');
Route::post('/halls', [App\Http\Controllers\HallController::class, 'store'])->name('halls.store');
Route::get('/halls/{hall}', [App\Http\Controllers\HallController::class, 'show'])->name('halls.show');
Route::get('/halls/{hall}/edit', [App\Http\Controllers\HallController::class, 'edit'])->name('halls.edit');
Route::put('/halls/{hall}', [App\Http\Controllers\HallController::class, 'update'])->name('halls.update');
Route::delete('/halls/{hall}', [App\Http\Controllers\HallController::class, 'destroy'])->name('halls.destroy');


//Route::resource('/timetables', 'StudentTimetableController');
Route::get('/timetables', [App\Http\Controllers\StudentTimetableController::class, 'index'])->name('timetables.index');
Route::get('/timetables/create', [App\Http\Controllers\StudentTimetableController::class, 'create'])->name('timetables.create');
Route::post('/timetables', [App\Http\Controllers\StudentTimetableController::class, 'store'])->name('timetables.store');
Route::get('/timetables/{timetable}', [App\Http\Controllers\StudentTimetableController::class, 'show'])->name('timetables.show');
Route::get('/timetables/{timetable}/edit', [App\Http\Controllers\StudentTimetableController::class, 'edit'])->name('timetables.edit');
Route::put('/timetables/{timetable}', [App\Http\Controllers\StudentTimetableController::class, 'update'])->name('timetables.update');
Route::delete('/timetables/{timetable}', [App\Http\Controllers\StudentTimetableController::class, 'destroy'])->name('timetables.destroy');

//Route::resource('/groups', 'LecturerGroupController');
Route::get('/groups', [App\Http\Controllers\LecturerGroupController::class, 'index'])->name('groups.index');
Route::get('/groups/create', [App\Http\Controllers\LecturerGroupController::class, 'create'])->name('groups.create');
Route::post('/groups', [App\Http\Controllers\LecturerGroupController::class, 'store'])->name('groups.store');
Route::get('/groups/{group}', [App\Http\Controllers\LecturerGroupController::class, 'show'])->name('groups.show');
Route::get('/groups/{group}/edit', [App\Http\Controllers\LecturerGroupController::class, 'edit'])->name('groups.edit');
Route::put('/groups/{group}', [App\Http\Controllers\LecturerGroupController::class, 'update'])->name('groups.update');
Route::delete('/groups/{group}', [App\Http\Controllers\LecturerGroupController::class, 'destroy'])->name('groups.destroy');