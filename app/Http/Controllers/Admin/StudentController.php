<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->paginate(10);
        $classrooms = Classroom::all();
        
        // Konfigurasi kolom untuk table component
        $columns = [
            ['key' => 'index', 'label' => 'NO', 'sortable' => false],
            ['key' => 'name', 'label' => 'Nama', 'sortable' => true],
            ['key' => 'email', 'label' => 'Email', 'sortable' => true],
            ['key' => 'birthdate', 'label' => 'Tanggal Lahir', 'format' => 'date', 'sortable' => true],
            ['key' => 'address', 'label' => 'Alamat', 'sortable' => false],
            [
                'key' => 'classroom', 
                'label' => 'Kelas', 
                'relation' => 'classroom', 
                'relation_key' => 'name',
                'sortable' => false
            ],
        ];
        
        // Konfigurasi fields untuk form component
        $formFields = [
            [
                'name' => 'name',
                'label' => 'Nama Lengkap',
                'type' => 'text',
                'required' => true,
                'placeholder' => 'Masukkan nama lengkap'
            ],
            [
                'name' => 'email',
                'label' => 'Email',
                'type' => 'email', 
                'required' => true,
                'placeholder' => 'nama@email.com'
            ],
            [
                'name' => 'birthdate',
                'label' => 'Tanggal Lahir',
                'type' => 'text',
                'required' => true
            ],
            [
                'name' => 'address',
                'label' => 'Alamat',
                'type' => 'textarea',
                'required' => false,
                'placeholder' => 'Masukkan alamat lengkap',
                'rows' => 3
            ],
            [
                'name' => 'classroom_id',
                'label' => 'Kelas',
                'type' => 'select',
                'required' => true,
                'options' => $classrooms->map(function($classroom) {
                    return [
                        'value' => $classroom->id,
                        'label' => $classroom->name
                    ];
                })->toArray()
            ]
        ];
        
        return view('admin.students.index', compact('students', 'classrooms', 'columns', 'formFields'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate ([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'birthdate' => 'required|date|before:today',
            'address' => 'nullable|string',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        Student::create($validated);

        return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'birthdate' => 'required|date|before:today',
            'address' => 'nullable|string',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        $student->update($validated);

        return redirect()->back()->with('success', 'Data siswa berhasil diperbarui!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->back()->with('success', 'Data siswa berhasil dihapus!');
    }
}