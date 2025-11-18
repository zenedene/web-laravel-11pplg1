<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::paginate(10);

        // Konfigurasi kolom untuk table component
        $columns = [
            ['key' => 'index', 'label' => 'NO', 'sortable' => false],
            ['key' => 'name', 'label' => 'Nama Wali', 'sortable' => true],
            ['key' => 'phone', 'label' => 'No. HP', 'sortable' => true],
            ['key' => 'email', 'label' => 'Email', 'sortable' => true],
            ['key' => 'job', 'label' => 'Pekerjaan', 'sortable' => false],
        ];

        // Konfigurasi fields untuk form component
        $formFields = [
            [
                'name' => 'name',
                'label' => 'Nama Wali',
                'type' => 'text',
                'required' => true,
                'placeholder' => 'Masukkan nama wali'
            ],
            [
                'name' => 'phone',
                'label' => 'Nomor HP',
                'type' => 'text',
                'required' => true,
                'placeholder' => '081234567890'
            ],
            [
                'name' => 'email',
                'label' => 'Email',
                'type' => 'email',
                'required' => true,
                'placeholder' => 'email@contoh.com'
            ],
            [
                'name' => 'job',
                'label' => 'Pekerjaan',
                'type' => 'text',
                'required' => true,
                'placeholder' => 'Masukkan pekerjaan'
            ],
        ];

        return view('admin.guardians.index', compact('guardians', 'columns', 'formFields'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:guardians,email',
            'job' => 'required|string|max:255',
        ]);

        Guardian::create($validated);

        return redirect()->back()->with('success', 'Data wali berhasil ditambahkan!');
    }

    public function update(Request $request, Guardian $guardian)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:guardians,email,' . $guardian->id,
            'job' => 'required|string|max:255',
        ]);

        $guardian->update($validated);

        return redirect()->back()->with('success', 'Data wali berhasil diperbarui!');
    }

    public function destroy(Guardian $guardian)
    {
        $guardian->delete();

        return redirect()->back()->with('success', 'Data wali berhasil dihapus!');
    }
}
