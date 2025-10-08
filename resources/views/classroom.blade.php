<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="py-8">
        <h2 class="text-center text-2xl font-bold text-gray-800 mb-6">Classroom</h2>

        <div class="max-w-8xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($classroom as $index => $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                {{ $user['name'] }}
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                <ul class="list-disc pl-5 space-y-1">
                                    @foreach ($user->students as $student)
                                        <li>{{ $student->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
