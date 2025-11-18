@props(['route', 'confirm' => 'Apakah Anda yakin ingin menghapus data ini?', 'label' => 'Hapus'])

<form action="{{ $route }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button type="submit"
        onclick="return confirm('{{ $confirm }}')"
        class="inline-flex items-center px-3 py-1 text-sm font-medium text-red-600 dark:text-red-400 hover:underline">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12" />
        </svg>
        {{ $label }}
    </button>
</form>
