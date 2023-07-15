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
            'nama' => 'Taman Wiladatika',
            'alamat' => 'Jalan Jambore Rt 03 No. 01, Kelurahan Harjamukti, Cimanggis, Depok',
            'skor_rating' => 4.5,
            'harga_tiket' => 10000,
            'deskripsi' => 'Memiliki luas sekitar 15 hektar menjadikan tempat wisata ini sangatlah luas dan cantik. Banyak pengunjung mendatangi tempat ini karena pemandangannya yang indah dan udaranya yang sejuk disertai pohon-pohon rindang.',
            'jenis_wisata_id' => 1,
            'kecamatan_id' => 4,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 2,
            'nama' => 'Situ Cilodong',
            'alamat' => 'Jalan Abdul Ghani, Kalibaru, Cilodong, Depok',
            'skor_rating' => 4.2,
            'harga_tiket' => 0,
            'deskripsi' => 'Situ Cilodong merupakan situ yang cukup terkenal di Depok. Tempat ini bisa menjadi tempat bersantai dengan keluarga sambil menikmati pemandangan sekitar yang memukau.',
            'jenis_wisata_id' => 1,
            'kecamatan_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 3,
            'nama' => 'D Kandang Amazing Farm',
            'alamat' => 'Jalan Penarikan, Pasir Putih, Sawangan, Depok',
            'skor_rating' => 4.0,
            'harga_tiket' => 18000,
            'deskripsi' => 'Menjadi salah satu tempat wisata edukasi, D’Kandang Amazing Farm sangat cocok untuk wisata bersama keluarga. Konsep wisatanya cukup unik. Pengunjung akan diajak berinteraksi langsung dengan hewan-hewan yang ada di sana dan juga berlatih bercocok tanam.',
            'jenis_wisata_id' => 6,
            'kecamatan_id' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 4,
            'nama' => 'Cagar Alam',
            'alamat' => ' Jalan Raya Cagar Alam, Pancoran Mas, Depok',
            'skor_rating' => 4.8,
            'harga_tiket' => 0,
            'deskripsi' => 'Sejak masa penjajahan Belanda, Cagar Alam Depok ini sudah ada. Usianya bahkan lebih tua dari Kebun Raya Bogor. Meski begitu, tempatnya masih terawat dan berfungsi sampai saat ini. Ini menjadi tempat yang cocok untuk mengajak anak-anak mengenal berbagai jenis satwa.',
            'jenis_wisata_id' => 1,
            'kecamatan_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 5,
            'nama' => 'Godong Ijo',
            'alamat' => 'Jalan Cinangka Raya Nomor 60 KM 10, kelurahan Serua, Bojongsari, Depok',
            'skor_rating' => 4.3,
            'harga_tiket' => 30000,
            'deskripsi' => 'Godong Ijo merupakan tempat dimana Anda dapat melakukan banyak aktivitas, seperti outbound, memancing ikan, bermain membatik, permainan tradisional, dan lain-lain.',
            'jenis_wisata_id' => 7,
            'kecamatan_id' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 6,
            'nama' => 'Taman Rekreasi Pasir Putih',
            'alamat' => ' Jalan Rawa Geni Rt 01 Rw 07 No. 01, Pasir Putih, Sawangan, Depok',
            'skor_rating' => 4.1,
            'harga_tiket' => 25000,
            'deskripsi' => 'Terletak di kawasan Pasir Putih, objek wisata ini menghadirkan berbagai wahana air yang bisa dimainkan oleh anak-anak atau bahkan orang dewasa. Tak ketinggalan, tersedia juga kolam renang yang pastinya akan semakin memberi kepuasan bagi para pengunjungnya.',
            'jenis_wisata_id' => 7,
            'kecamatan_id' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 7,
            'nama' => 'Kolam Renang Paragon',
            'alamat' => 'Jalan Haji Dimun, Kelurahan Sukamaju, Cilodong, Depok',
            'skor_rating' => 4.6,
            'harga_tiket' => 30000,
            'deskripsi' => 'Saat musim liburan atau akhir pekan, kolam renang Paragon ramai oleh pengunjung. Dengan mengusung tema indoor membuat kolam renang ini tidak terasa panas. Anak-anak pun bisa bermain dengan puas tanpa takut terkena sinar matahari.',
            'jenis_wisata_id' => 7,
            'kecamatan_id' => 3,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 8,
            'nama' => 'Studio Alam TVRI',
            'alamat' => 'Jalan Studio Alam TVRI, Sukmajaya, Depok',
            'skor_rating' => 4.4,
            'harga_tiket' => 10000,
            'deskripsi' => 'Menghadirkan banyak sejarah, Studio Alam TVRI dulunya adalah tempat pengambilan gambar acara TVRI. Namun, seiring berjalannya waktu, tempat ini kerap menjadi destinasi wisata yang banyak dikunjungi.',
            'jenis_wisata_id' => 1,
            'kecamatan_id' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 9,
            'nama' => 'Masjid Dian Al-Mahri',
            'alamat' => ' Jalan Meruyung, Desa Meruyung, Limo, Depok',
            'skor_rating' => 4.2,
            'harga_tiket' => 15000,
            'deskripsi' => 'Berkat keindahannya ini, Masjid Dian Al-Mahri dinobatkan sebagai satu dari sekian masjid paling megah dan paling cantik di Asia Tenggara.',
            'jenis_wisata_id' => 8,
            'kecamatan_id' => 7,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 10,
            'nama' => 'Kampung 3D Depok',
            'alamat' => 'Jalan Danau Tondano Nomor 178, kelurahan Abadijaya, Sukmajaya, Depok',
            'skor_rating' => 4.7,
            'harga_tiket' => 0,
            'deskripsi' => 'Wisata yang terkenal beberapa tahun lalu ini memiliki banyak gambar mural yang menarik. Setiap jalan kecil yang berada pada kampung ini digambari mural dengan nuansa tiga dimensi, membuat setiap orang tertarik untuk datang melihatnya. Kreativitas dari para pemuda-pemuda karang taruna yang berada pada kelurahan Sukmajaya tersebut membuat kampung ini terlihat lebih indah dan instagramable.',
            'jenis_wisata_id' => 7,
            'kecamatan_id' => 10,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 11,
            'nama' => 'Situ Pengasinan',
            'alamat' => 'Kelurahan Pengasinan, Sawangan, Depok',
            'skor_rating' => 4.7,
            'harga_tiket' => 0,
            'deskripsi' => 'Situ Pengasinan merupakan satu dari sekian tempat wisata Depok yang terkenal. Berlokasi di Pengasinan, tempat wisata ini menawarkan berbagai aktivitas. Mulai dari flying fox, memancing, maupun berkeliling danau dengan perahu bebek.',
            'jenis_wisata_id' => 1,
            'kecamatan_id' => 9,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 12,
            'nama' => 'Saladin Square',
            'alamat' => ' Jalan Margonda Raya 37-79, Pancoran Mas, Depok',
            'skor_rating' => 4.7,
            'harga_tiket' => 5000,
            'deskripsi' => 'Sebuah kompleks bisnis dengan corak Islam ini bisa Anda kunjungi Pancoran Mas, Depok. Meski bukan sebuah objek wisata, namun karena bangunannya bernuansa Arab modern, banyak pengunjung yang datang untuk hunting foto.',
            'jenis_wisata_id' => 8,
            'kecamatan_id' => 8,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Wisata::create([
            'id' => 13,
            'nama' => 'Margo City Depok',
            'alamat' => ' Jl. Margonda No.358, Kemiri Muka, Kecamatan Beji, Kota Depok',
            'skor_rating' => 4.7,
            'harga_tiket' => 0,
            'deskripsi' => 'Kompleks perbelanjaan ramai yang menyediakan beragam toko, makanan & hiburan, termasuk gelanggang seluncur es.',
            'jenis_wisata_id' => 2,
            'kecamatan_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
