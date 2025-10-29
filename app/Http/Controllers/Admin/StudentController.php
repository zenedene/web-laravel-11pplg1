<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Untuk halaman admin (back-end)
    public function index()
    {
        $students = Student::with('classroom')->paginate(10);
        $classrooms = Classroom::all();
        
        return view('components.admin.student', compact('students', 'classrooms'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'birthdate' => 'required|date|before:today',
            'address' => 'nullable|string',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        Student::create($validated);

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
    }
}