@props(['columns', 'data', 'hasActions' => false])

<div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    @foreach($columns as $column)
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            {{ $column['label'] }}
                        </th>
                    @endforeach
                    @if($hasActions)
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Aksi
                        </th>
                    @endif
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                {{ $slot }}
            </tbody>
        </table>
    </div>

    @if(method_exists($data, 'links'))
        <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
            {{ $data->links() }}
        </div>
    @endif
</div>