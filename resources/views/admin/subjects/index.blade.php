<x-admin.layout>
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Data Wali</h1>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">Daftar seluruh wali yang terdaftar</p>
        </div>

    </div>
    <x-table :columns="$columns" :data="$subjects">
        @forelse ($subjects as $subject)
            <x-table.row :item="$subject" :columns="$columns" :index="$loop->iteration" :hasActions="false" />
        @empty
        @endforelse
    </x-table>

</x-admin.layout>
