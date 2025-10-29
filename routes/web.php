<?php
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/guardian', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/teachers', [TeacherController::class, 'index']);

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('components.admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/students', [AdminStudentController::class, 'index'])->name('admin.students.index');
});
