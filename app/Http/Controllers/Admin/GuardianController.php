<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class GuardianController extends Controller
{
    public function index()
    {
        $guardian = Guardian::all();

        return view('components.admin.guardian', compact('guardian'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'job' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        Guardian::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'job' => $validated['job'] ?? null,
            'phone' => $validated['phone'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Data guardian berhasil ditambahkan!');
}}