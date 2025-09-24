<x-layout>
    <<div class="max-w-8xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">NO</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Job</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Number</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($guardian as $index => $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $user['name'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $user['email'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $user['job'] }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{ $user['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <x-slot:judul>{{ $title }}</x-slot:judul>
</x-layout>