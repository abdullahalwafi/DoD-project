<?php

namespace Database\Seeders;

use App\Models\Wisata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Wisata::create([
            'id' => 1,
            'nama' => 'Taman Mini Indonesia Indah',
            'alamat' => 'Jl. Cipayung Raya, Cipayung, Depok',
            'skor_rating' => 4.5,
            'harga_tiket' => 50000,
            'deskripsi' => 'Taman rekreasi yang memperkenalkan keberagaman budaya Indonesia melalui replika bangunan dan atraksi khas dari berbagai daerah.',
            'jenis_wisata_id' => 1,
            'kecamatan_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 2,
            'nama' => 'Goa Jepang',
            'alamat' => 'Jl. Raya Sawangan No. 17, Pancoran MAS, Depok',
            'skor_rating' => 4.2,
            'harga_tiket' => 10000,
            'deskripsi' => 'Goa bekas peninggalan Tentara Jepang pada masa Perang Dunia II, tempat bersejarah yang menarik untuk dikunjungi.',
            'jenis_wisata_id' => 2,
            'kecamatan_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 3,
            'nama' => 'Taman Wisata Margonda',
            'alamat' => 'Jl. Margonda Raya, Kemiri Muka, Beji, Depok',
            'skor_rating' => 4.0,
            'harga_tiket' => 15000,
            'deskripsi' => 'Taman kota yang dilengkapi dengan berbagai fasilitas rekreasi seperti taman bermain, lapangan basket, dan area kuliner.',
            'jenis_wisata_id' => 3,
            'kecamatan_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 4,
            'nama' => 'Curug Cimahi',
            'alamat' => 'Jl. Cisalak, Pancoran MAS, Depok',
            'skor_rating' => 4.8,
            'harga_tiket' => 5000,
            'deskripsi' => 'Air terjun yang indah dengan suasana alam yang asri, cocok untuk wisatawan yang menyukai petualangan.',
            'jenis_wisata_id' => 4,
            'kecamatan_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 5,
            'nama' => 'Museum Layang-Layang',
            'alamat' => 'Jl. Cilodong Raya No. 40, Cilodong, Depok',
            'skor_rating' => 4.3,
            'harga_tiket' => 20000,
            'deskripsi' => 'Museum yang menampilkan berbagai koleksi layang-layang dari berbagai negara dengan berbagai bentuk dan ukuran.',
            'jenis_wisata_id' => 5,
            'kecamatan_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 6,
            'nama' => 'Taman Kota Kedung Badak',
            'alamat' => 'Jl. Kedung Badak No. 15, Sawangan, Depok',
            'skor_rating' => 4.1,
            'harga_tiket' => 10000,
            'deskripsi' => 'Taman kota yang menyediakan area jogging, tempat bermain anak, dan gazebo untuk bersantai.',
            'jenis_wisata_id' => 3,
            'kecamatan_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 7,
            'nama' => 'Gunung Pancar',
            'alamat' => 'Jl. Raya Bogor-Sentul, Pancawati, Cipayung, Depok',
            'skor_rating' => 4.6,
            'harga_tiket' => 25000,
            'deskripsi' => 'Kawasan wisata alam dengan pemandangan indah, air terjun, dan trekking yang menantang.',
            'jenis_wisata_id' => 4,
            'kecamatan_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 8,
            'nama' => 'Museum Diorama Proklamasi',
            'alamat' => 'Jl. Raya Sawangan No. 1, Pancoran MAS, Depok',
            'skor_rating' => 4.4,
            'harga_tiket' => 15000,
            'deskripsi' => 'Museum yang menampilkan diorama peristiwa penting seputar Proklamasi Kemerdekaan Indonesia.',
            'jenis_wisata_id' => 5,
            'kecamatan_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 9,
            'nama' => 'Taman Rekreasi Wiladatika',
            'alamat' => 'Jl. Dewi Sartika No. 35, Tugu, Cimanggis, Depok',
            'skor_rating' => 4.2,
            'harga_tiket' => 10000,
            'deskripsi' => 'Taman rekreasi dengan fasilitas olahraga, kolam renang, dan area bermain anak.',
            'jenis_wisata_id' => 3,
            'kecamatan_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 10,
            'nama' => 'Danau Cikeas',
            'alamat' => 'Jl. Kandang Rusa, Cikeas, Gunung Putri, Depok',
            'skor_rating' => 4.7,
            'harga_tiket' => 5000,
            'deskripsi' => 'Danau buatan dengan pemandangan indah dan aktivitas perahu dayung yang dapat dinikmati oleh pengunjung.',
            'jenis_wisata_id' => 4,
            'kecamatan_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
