<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teachers')->get();

        $columns = [
            ['key' => 'index', 'label' => 'NO'],
            ['key' => 'name', 'label' => 'Nama Subject'],
            ['key' => 'description', 'label' => 'Description'],
            ['key' => 'teachers', 'label' => 'Teacher', 'relation' => 'teachers', 'relation_key' => 'name'],

        ];

        return view('admin.subjects.index', compact('subjects', 'columns'));
    }
}
