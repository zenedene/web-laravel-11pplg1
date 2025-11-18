<div id="{{ $modalId }}" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg w-full max-w-lg p-6">
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">{{ $title }}</h2>

        <form id="{{ $formId }}" action="{{ $action }}" method="POST">
            @csrf
            @method('PUT')
            {{ $slot }}

            <div class="mt-6 flex justify-end">
                <button type="button" onclick="closeEditModal('{{ $modalId }}')"
                    class="mr-2 px-4 py-2 bg-gray-300 text-gray-900 rounded-lg hover:bg-gray-400">Batal</button>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openEditModal(button) {
        const modal = document.getElementById('editGuardianModal'); // Use the specific modal ID
        modal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');

        // Get data from the button's data attributes
        const id = button.getAttribute('data-id');
        const name = button.getAttribute('data-name');
        const email = button.getAttribute('data-email'); // New field
        const job = button.getAttribute('data-job'); // New field
        const phone = button.getAttribute('data-phone'); // New field

        // Populate modal fields
        document.getElementById('edit_id').value = id;
        document.getElementById('edit_name').value = name;
        document.getElementById('edit_email').value = email; // Populate new field
        document.getElementById('edit_job').value = job; // Populate new field
        document.getElementById('edit_phone').value = phone; // Populate new field

        // Set the form action dynamically
        const form = document.getElementById('editGuardianForm');
        // NOTE: Assuming $baseRoute is defined in the component, which you passed as 'admin/guardians'
        form.action = `/admin/guardians/${id}`;
    }

    function closeEditModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    }
</script>
