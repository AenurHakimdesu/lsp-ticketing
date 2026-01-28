<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasi = [
            'Aula Kampus Utama',
            'Gedung Serbaguna',
            'Lapangan Olahraga',
            'Ruang Seminar Lt. 2',
            'Auditorium',
            'Gedung Kesenian',
            'Balai Desa',
            'Convention Hall',
        ];

        foreach ($lokasi as $nama) {
            Lokasi::create([
                'nama' => $nama,
            ]);
        }
    }
}
