<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = [
                        ['id' => 1,'name' => 'Ani Wijaya', 'email' => 'ani@example.com', 'address' => 'Bandung', 'kelas' => '10 ANIM 1'],
                        ['id' => 2,'name' => 'Budi Santoso', 'email' => 'budi@example.com', 'address' => 'Jakarta', 'kelas' => '10 ANIM 2'],
                        ['id' => 3,'name' => 'Citra Lestari', 'email' => 'citra@example.com', 'address' => 'Surabaya', 'kelas' => '10 ANIM 1'],
                        ['id' => 4,'name' => 'Dedi Kurniawan', 'email' => 'dedi@example.com', 'address' => 'Medan', 'kelas' => '10 ANIM 3'],
                        ['id' => 5,'name' => 'Eka Prasetya', 'email' => 'eka@example.com', 'address' => 'Yogyakarta', 'kelas' => '10 ANIM 2'],
                    ];
        return view ('student', ['title' => 'Student', 'student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
