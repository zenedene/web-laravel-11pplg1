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
use App\Http\Controllers\Admin\ClassroomController as AdminClassroomController;
use App\Http\Controllers\Admin\SubjectController as AdminSubjectController;
use App\Http\Controllers\Admin\TeacherController as AdminTeacherController;
use App\Http\Controllers\Admin\GuardianController as AdminGuardianController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;


// Public Routes
Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']); // Public student page
Route::get('/guardian', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/teachers', [TeacherController::class, 'index']);

Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('components.admin.dashboard');
    })->name('dashboard');

 Route::resource('students', AdminStudentController::class);
 Route::resource('guardians', AdminGuardianController::class);
 Route::resource('classrooms', AdminClassroomController::class);
 Route::resource('teachers', AdminTeacherController::class);
 Route::resource('subjects', AdminSubjectController::class);
 Route::get('profile', [AdminProfileController::class, 'index']);
 Route::get('contact', [AdminContactController::class, 'index']);
});