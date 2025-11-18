<x-admin.layout>
    <div class="p-6">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Profile Settings</h1>
            <p class="text-gray-600 dark:text-gray-400">Kelola informasi profil dan pengaturan akun Anda</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Column - Profile Info -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Personal Information -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Informasi Pribadi</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama
                                Lengkap</label>
                            <input type="text" value="Admin User"
                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email</label>
                            <input type="email" value="admin@example.com"
                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Telepon</label>
                            <input type="tel" value="+62 812-3456-7890"
                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Posisi</label>
                            <input type="text" value="Administrator"
                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                    </div>
                    <button class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm">
                        Simpan Perubahan
                    </button>
                </div>

                <!-- Change Password -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Ubah Password</h2>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password Saat
                                Ini</label>
                            <input type="password"
                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password
                                Baru</label>
                            <input type="password"
                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Konfirmasi
                                Password Baru</label>
                            <input type="password"
                                class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                    </div>
                    <button class="mt-4 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm">
                        Update Password
                    </button>
                </div>
            </div>

            <!-- Right Column - Profile Picture & Stats -->
            <div class="space-y-6">
                <!-- Profile Picture -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Foto Profil</h2>
                    <div class="flex flex-col items-center">
                        <div
                            class="w-32 h-32 bg-gray-200 dark:bg-gray-700 rounded-full mb-4 flex items-center justify-center">
                            <span class="text-2xl font-bold text-gray-500 dark:text-gray-400">AU</span>
                        </div>
                        <div class="flex space-x-2">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm">
                                Upload Foto
                            </button>
                            <button class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm">
                                Hapus
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Account Stats -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Statistik Akun</h2>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Bergabung</span>
                            <span class="text-gray-900 dark:text-white">15 Jan 2024</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Terakhir Login</span>
                            <span class="text-gray-900 dark:text-white">2 jam yang lalu</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Role</span>
                            <span class="text-green-600 dark:text-green-400">Administrator</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 dark:text-gray-400">Status</span>
                            <span class="text-green-600 dark:text-green-400">Aktif</span>
                        </div>
                    </div>
                </div>

                <!-- Danger Zone -->
                <div
                    class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6 border border-red-200 dark:border-red-800">
                    <h2 class="text-lg font-semibold text-red-700 dark:text-red-400 mb-4">Zona Berbahaya</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                        Tindakan ini tidak dapat dibatalkan. Hati-hati saat melakukan aksi berikut.
                    </p>
                    <div class="space-y-2">
                        <button class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm">
                            Nonaktifkan Akun
                        </button>
                        <button class="w-full bg-red-800 hover:bg-red-900 text-white px-4 py-2 rounded-lg text-sm">
                            Hapus Akun Permanent
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
