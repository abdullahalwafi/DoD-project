<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kecamatan::create([
            'id' => 1,
            'nama' => 'Kecamatan Beji',
        ]);

        Kecamatan::create([
            'id' => 2,
            'nama' => 'Kecamatan Bojongsari',
        ]);

        Kecamatan::create([
            'id' => 3,
            'nama' => 'Kecamatan Cilodong',
        ]);

        Kecamatan::create([
            'id' => 4,
            'nama' => 'Kecamatan Cimanggis',
        ]);

        Kecamatan::create([
            'id' => 5,
            'nama' => 'Kecamatan Cinere',
        ]);

        Kecamatan::create([
            'id' => 6,
            'nama' => 'Kecamatan Cipayung',
        ]);

        Kecamatan::create([
            'id' => 7,
            'nama' => 'Kecamatan Limo',
        ]);

        Kecamatan::create([
            'id' => 8,
            'nama' => 'Kecamatan Pancoran Mas',
        ]);

        Kecamatan::create([
            'id' => 9,
            'nama' => 'Kecamatan Sawangan',
        ]);

        Kecamatan::create([
            'id' => 10,
            'nama' => 'Kecamatan Sukmajaya',
        ]);

        Kecamatan::create([
            'id' => 11,
            'nama' => 'Kecamatan Tapos',
        ]);
    }
}
