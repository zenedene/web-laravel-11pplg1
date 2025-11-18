@props(['route', 'label' => 'Edit'])

<a href="{{ $route }}"
    class="inline-flex items-center px-3 py-1 text-sm font-medium text-blue-600 dark:text-blue-400 hover:underline">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M16.862 4.487a2.118 2.118 0 113 3L7.5 19.5l-4 1 1-4 12.362-12.013z" />
    </svg>
    {{ $label }}
</a>
