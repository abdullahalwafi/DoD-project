<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenisWisata;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JenisWisata::create([
            'id' => 1,
            'nama' => 'Wisata Alam',
        ]);

        JenisWisata::create([
            'id' => 2,
            'nama' => 'Wisata Belanja',
        ]);

        JenisWisata::create([
            'id' => 3,
            'nama' => 'Wisata Budaya dan Sejarah',
        ]);

        JenisWisata::create([
            'id' => 4,
            'nama' => 'Wisata Perburuan dan Safari',
        ]);

        JenisWisata::create([
            'id' => 5,
            'nama' => 'Wisata Kuliner',
        ]);

        JenisWisata::create([
            'id' => 6,
            'nama' => 'Wisata Pendidikan',
        ]);

        JenisWisata::create([
            'id' => 7,
            'nama' => 'Wisata Petualangan',
        ]);

        JenisWisata::create([
            'id' => 8,
            'nama' => 'Wisata Religi',
        ]);        
    }
}
