<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Tampilkan daftar semua mata pelajaran untuk admin.
     */
    public function index()
    {
        $subjects = Subject::with('teachers')->paginate(10);
        $teachers = Teacher::all();

        return view('components.admin.subject', compact('subjects', 'teachers'));
    }

    /**
     * Simpan data mata pelajaran baru.
     */
    public function store(Request $request)
    {
       
    }
}
