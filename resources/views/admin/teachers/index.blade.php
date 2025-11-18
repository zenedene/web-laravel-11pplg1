<x-admin.layout>
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Data Guru</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Daftar seluruh guru beserta subject</p>
        </div>

        <x-add-button title="Tambah Guru" modalId="addTeacherModal" />
    </div>

    <!-- Tampilkan pesan sukses -->
    @if (session('success'))
        <div class="mb-4 p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
            {{ session('success') }}
        </div>
    @endif

    <x-table :columns="$columns" :data="$teachers" has-actions>
        @foreach ($teachers as $teacher)
            <x-table.row :item="$teacher" :columns="$columns" :index="$loop->iteration" has-actions
                edit-route="admin.teachers.edit" delete-route="admin.teachers.destroy" />
        @endforeach
    </x-table>

    <!-- Add Modal -->
    <x-form-modal id="addTeacherModal" title="Tambah Guru" action="{{ route('admin.teachers.store') }}" method="POST">
        <x-form-fields :fields="$formFields" />
    </x-form-modal>

    <!-- Edit + Delete Modals -->
    @foreach ($teachers as $teacher)
        <x-form-modal id="editModal{{ $teacher->id }}" title="Edit Guru"
            action="{{ route('admin.teachers.update', $teacher) }}" method="PUT">

            <x-form-fields :fields="$formFields" :data="[
                'name' => $teacher->name,
                'email' => $teacher->email,
                'phone' => $teacher->phone,
                'address' => $teacher->address,
                'subject_name' => $teacher->subject->name,
                'subject_description' => $teacher->subject->description,
            ]" />

        </x-form-modal>

        <x-delete-modal id="deleteModal{{ $teacher->id }}"
            action="{{ route('admin.teachers.destroy', $teacher) }}" />
    @endforeach
</x-admin.layout>