<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->paginate(10);

        // Columns table Teachers
        $columns = [
            ['key' => 'index', 'label' => 'NO'],
            ['key' => 'name', 'label' => 'Nama Guru'],
            ['key' => 'email', 'label' => 'Email'],
            ['key' => 'phone', 'label' => 'Nomor Telp'],
            ['key' => 'subject', 'label' => 'Mata Pelajaran', 'relation' => 'subject', 'relation_key' => 'name'],
        ];

        // Form fields teacher + subject
        $formFields = [
            [
                'name' => 'name',
                'label' => 'Nama Guru',
                'type' => 'text',
                'required' => true,
            ],
            [
                'name' => 'email',
                'label' => 'Email',
                'type' => 'email',
                'required' => true,
            ],
            [
                'name' => 'phone',
                'label' => 'Nomor Telepon',
                'type' => 'text',
                'required' => true,
            ],
            [
                'name' => 'address',
                'label' => 'Alamat',
                'type' => 'textarea',
                'rows' => 3,
                'required' => false,
            ],

            // SUBJECT FIELDS
            [
                'name' => 'subject_name',
                'label' => 'Nama Subject',
                'type' => 'text',
                'required' => true,
            ],
            [
                'name' => 'subject_description',
                'label' => 'Deskripsi Subject',
                'type' => 'textarea',
                'rows' => 3,
                'required' => false,
            ],
        ];

        return view('admin.teachers.index', compact('teachers', 'columns', 'formFields'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // TEACHER
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string',

            // SUBJECT
            'subject_name' => 'required|string|max:255',
            'subject_description' => 'nullable|string',
        ]);

        // Create subject first
        $subject = Subject::create([
            'name' => $validated['subject_name'],
            'description' => $validated['subject_description'] ?? null,
        ]);

        // Then create teacher connected to subject
        Teacher::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'subject_id' => $subject->id,
        ]);

        return back()->with('success', 'Data guru berhasil ditambahkan!');
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            // Teacher
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string',

            // Subject
            'subject_name' => 'required|string|max:255',
            'subject_description' => 'nullable|string',
        ]);

        // update subject
        $teacher->subject->update([
            'name' => $validated['subject_name'],
            'description' => $validated['subject_description'],
        ]);

        // update teacher
        $teacher->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
        ]);

        return back()->with('success', 'Data guru berhasil diperbarui!');
    }

    public function destroy(Teacher $teacher)
    {
        // Delete subject first (ONE TO ONE)
        $teacher->subject->delete();

        // Delete teacher
        $teacher->delete();

        return back()->with('success', 'Data guru berhasil dihapus!');
    }
}
