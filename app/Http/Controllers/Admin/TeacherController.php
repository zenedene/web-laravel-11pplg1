<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher = Teacher::with('subject')->paginate(10);

        return view('components.admin.teacher', [
            'title' => 'Teacher List',
            'teacher' => $teacher
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject_name' => 'required|string|max:255',
            'subject_description' => 'required|string',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
        ]);

        // Buat subject dulu
        $subject = Subject::create([
            'name' => $request->subject_name,
            'description' => $request->subject_description,
        ]);

        // Buat teacher dan isi subject_id dari subject yang baru dibuat
        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'subject_id' => $subject->id,
        ]);

        return redirect()->back()->with('success', 'Data guru dan subject berhasil ditambahkan!');
    }
}