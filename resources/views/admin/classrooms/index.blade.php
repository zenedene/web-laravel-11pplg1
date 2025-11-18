<x-admin.layout>

    <!-- Header -->
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Data Kelas</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Daftar seluruh kelas beserta siswa yang terdaftar
            </p>
        </div>

        <!-- Button Tambah Kelas -->
        <x-add-button title="Tambah Kelas" modalId="addClassroomModal" />
    </div>

    <!-- Pesan sukses -->
    @if (session('success'))
        <div class="mb-4 p-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
            {{ session('success') }}
        </div>
    @endif

    <!-- Modal Tambah Kelas -->
    <x-form-modal id="addClassroomModal" title="Tambah Kelas"
        action="{{ route('admin.classrooms.store') }}" method="POST">

        <x-form-fields :fields="[
            [
                'name' => 'name',
                'label' => 'Nama Kelas',
                'type' => 'text',
                'required' => true,
                'placeholder' => 'Contoh: XII IPA 1'
            ]
        ]" />

    </x-form-modal>

    <!-- Table -->
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden mt-6">
        <div class="overflow-x-auto">
            <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            NO
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Nama Kelas
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            List Siswa
                        </th>
                    </tr>
                </thead>

                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($classrooms as $classroom)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-150">

                            <!-- Nomor -->
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-300">
                                {{ $loop->iteration }}
                            </td>

                            <!-- Nama kelas -->
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                {{ $classroom->name }}
                            </td>

                            <!-- Daftar siswa -->
                            <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">
                                @if ($classroom->students->count() > 0)
                                    <ul class="list-disc pl-5 space-y-1">
                                        @foreach ($classroom->students as $student)
                                            <li>{{ $student->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span class="text-gray-400">Tidak ada siswa</span>
                                @endif
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center text-sm text-gray-500 dark:text-gray-400">
                                Tidak ada data kelas
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</x-admin.layout>
5