<x-admin.layout>
    <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-md">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Contact Management</h1>
            <p class="text-gray-600 dark:text-gray-400">Kelola informasi kontak dan pesan dari pengguna</p>
        </div>

        <!-- Contact Information -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Informasi Kontak</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <p class="mt-1 text-gray-900 dark:text-white">admin@example.com</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Telepon</label>
                        <p class="mt-1 text-gray-900 dark:text-white">+62 812-3456-7890</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat</label>
                        <p class="mt-1 text-gray-900 dark:text-white">Jl. Contoh No. 123, Jakarta</p>
                    </div>
                </div>
                <button class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm">
                    Edit Informasi
                </button>
            </div>

            <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Social Media</h2>
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700 dark:text-gray-300">Facebook</span>
                        <span class="text-blue-600 dark:text-blue-400">@company</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700 dark:text-gray-300">Instagram</span>
                        <span class="text-pink-600 dark:text-pink-400">@company</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700 dark:text-gray-300">Twitter</span>
                        <span class="text-blue-400 dark:text-blue-300">@company</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-700 dark:text-gray-300">LinkedIn</span>
                        <span class="text-blue-700 dark:text-blue-500">@company</span>
                    </div>
                </div>
                <button class="mt-4 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm">
                    Update Social Media
                </button>
            </div>
        </div>

        <!-- Messages Table -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow">
            <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Pesan Masuk</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Pengirim
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Email
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Pesan
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Status
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                John Doe
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                john@example.com
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300">
                                Pertanyaan tentang produk...
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Terbaca
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button
                                    class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">Lihat</button>
                                <button
                                    class="ml-4 text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">
                                Jane Smith
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                jane@example.com
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-300">
                                Permintaan kerjasama...
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Belum dibaca
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <button
                                    class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300">Lihat</button>
                                <button
                                    class="ml-4 text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin.layout>
