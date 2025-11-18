@props(['item', 'columns', 'index', 'hasActions' => false, 'editRoute' => null, 'deleteRoute' => null])

<tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors duration-150">
    @foreach ($columns as $colIndex => $column)
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-300">
            @if ($column['key'] === 'index')
                {{ $index }}
            @elseif(isset($column['format']) && $column['format'] === 'date')
                {{ \Carbon\Carbon::parse($item->{$column['key']})->format('d/m/Y') }}
            @elseif(isset($column['relation']))
                {{ $item->{$column['relation']}->{$column['relation_key']} ?? '-' }}
            @else
                {{ $item->{$column['key']} }}
            @endif
        </td>
    @endforeach

    @if ($hasActions)
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
            <div class="relative inline-block text-left">
                <!-- Dropdown Button -->
                <button type="button" id="dropdownButton{{ $item->id }}"
                    data-dropdown-toggle="dropdown{{ $item->id }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Aksi
                    <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown Menu -->
                <div id="dropdown{{ $item->id }}"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                        <!-- Edit Option -->
                        <li>
                            <button type="button"
                                class="w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center"
                                data-modal-target="editModal{{ $item->id }}"
                                data-modal-toggle="editModal{{ $item->id }}">
                                <svg class="w-4 h-4 mr-2 text-blue-600 dark:text-blue-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                <span class="text-blue-600 dark:text-blue-400">Edit</span>
                            </button>
                        </li>
                        <!-- Delete Option -->
                        <li>
                            <button type="button"
                                class="w-full text-left px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white flex items-center"
                                data-modal-target="deleteModal{{ $item->id }}"
                                data-modal-toggle="deleteModal{{ $item->id }}">
                                <svg class="w-4 h-4 mr-2 text-red-600 dark:text-red-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                                <span class="text-red-600 dark:text-red-400">Hapus</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </td>
    @endif
</tr>
