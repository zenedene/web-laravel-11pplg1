<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guardian>
 */
class GuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobs = [
            'Tukang Kebun', 'Petani', 'Nelayan', 'Pedagang', 'Wiraswasta', 'PNS', 'Karyawan Swasta', 'Guru', 'Dosen', 'Dokter', 'Perawat', 'Polisi', 'Tentara', 'Seniman', 'Pengacara', 'Notaris', 'Arsitek', 'Insinyur', 'Pilot', 'Pramugari', 'Chef', 'Penulis', 'Jurnalis', 'Fotografer', 'Musisi', 'Aktor/Aktris',
        ];
        return [
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'job' => fake()->randomElement($jobs),
        ];
    }
}
