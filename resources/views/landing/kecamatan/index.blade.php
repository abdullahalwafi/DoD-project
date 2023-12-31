@extends('landing.layouts.app')
@section('content')
    <style type="text/css">
        p {
            text-align: justify;
        }
    </style>
    <div class="login-overlay"></div>

    <section class="section-header-single">
        <img src="{{ asset('assets/landing/img/kecamatan/1.png') }}">
        <div class="overlay">
            <div class="header-title">
                <h3>Subdistrict</h3>
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
    </section>
    </section>

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li>Subdistrict</li>
    </ul>

    <section class="section section-single">
        <div class="container-fluid">
            <div class="single-head">
                <div class="col">
                    <img src="{{ asset('assets/landing/img/kecamatan/3.png') }}">
                    <h3>find your Subdistrict right now !</h3>
                    <p>Berikut adalah daftar Kecamatan yang ada di Kota Depok, silahkan pilih tempat yang ingin anda
                        kunjungi</p>
                </div>
                {{--  <div class="col-form">
          <form method="POST">
            
          </form>
        </div>  --}}
            </div>

            <section class="section section-archive">
                <div class="container">
                    <div class="row">
                        <div class="content">
                            <div class="col">
                                <div class="content-img">
                                    <img src="{{ asset('assets/landing/img/kecamatan/beji.jpg') }}">
                                </div>
                                <div class="content-desc">
                                    <div class="content-desc-title">
                                        <a href="/wisata">
                                            <h3>Kecamatan Beji</h3>
                                        </a>
                                    </div>
                                    <div class="content-desc-text">
                                        <ul class="breadcrumb-post">
                                            <li><i class="ion-person"></i>229.670 Jiwa</li>
                                        </ul>
                                        <p>
                                            Beji adalah salah satu kecamatan di Kota Depok, Jawa Barat. Dalam wilayah ini
                                            terdapat berbagai universitas, diantaranya Universitas Indonesia, Universitas
                                            Gunadarma dan Bina Sarana Informatika. Selain itu, ada juga beberapa stasiun
                                            kereta diantaranya Stasiun Pondok Cina dan Stasiun Universitas Indonesia.
                                            <a href="https://id.wikipedia.org/wiki/Beji,_Depok">Wikipedia</a>
                                        </p>
                                        <a href="/wisata" class="btn btn-md btn-orange" style="margin-top: 10px;">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="content-img">
                                    <img src="{{ asset('assets/landing/img/kecamatan/bojongsari.jpeg') }}">
                                </div>
                                <div class="content-desc">
                                    <div class="content-desc-title">
                                        <a href="/wisata">
                                            <h3>Kecamatan Bojongsari</h3>
                                        </a>
                                    </div>
                                    <div class="content-desc-text">
                                        <ul class="breadcrumb-post">
                                            <li><i class="ion-person"></i>138.070 Jiwa</li>
                                        </ul>
                                        <p>
                                            Bojongsari adalah sebuah kecamatan yang terletak di Kota Depok, Jawa Barat.
                                            <a href="https://id.wikipedia.org/wiki/Bojongsari,_Depok">Wikipedia</a>
                                        </p>
                                        <a href="/wisata" class="btn btn-md btn-orange" style="margin-top: 10px;">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="content-img">
                                    <img src="{{ asset('assets/landing/img/kecamatan/cilodong.jpg') }}">
                                </div>
                                <div class="content-desc">
                                    <div class="content-desc-title">
                                        <a href="/wisata">
                                            <h3>Kecamatan Cilodong</h3>
                                        </a>
                                    </div>
                                    <div class="content-desc-text">
                                        <ul class="breadcrumb-post">
                                            <li><i class="ion-person"></i>173.070 Jiwa</li>
                                        </ul>
                                        <p>
                                            Cilodong adalah sebuah kecamatan di Kota Depok, Jawa Barat. Dulunya kecamatan
                                            ini merupakan pemekaran dari Kecamatan Sukmajaya. Di kecamatan ini terdapat
                                            Terminal Kampung Sawah dan Stasiun Pondok Rajeg.
                                            <a href="https://id.wikipedia.org/wiki/Cilodong,_Depok">Wikipedia</a>
                                        </p>
                                        <a href="/wisata" class="btn btn-md btn-orange" style="margin-top: 10px;">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="content-img">
                                    <img src="{{ asset('assets/landing/img/kecamatan/cimanggis.jpg') }}">
                                </div>
                                <div class="content-desc">
                                    <div class="content-desc-title">
                                        <a href="/wisata">
                                            <h3>Kecamatan Cimanggis</h3>
                                        </a>
                                    </div>
                                    <div class="content-desc-text">
                                        <ul class="breadcrumb-post">
                                            <li><i class="ion-person"></i>334.990 Jiwa</li>
                                        </ul>
                                        <p>
                                            Cimanggis adalah sebuah kecamatan di Kota Depok, Jawa Barat. Kecamatan Cimanggis
                                            berada di wilayah Depok sebelah timur, berada pada ketinggian ± 115 m di atas
                                            permukaan laut dan daerah ini mempunyai curah hujan rata-rata 200,91 mm/tahun.
                                            <a href="https://id.wikipedia.org/wiki/Cimanggis,_Depok">Wikipedia</a>
                                        </p>
                                        <a href="/wisata" class="btn btn-md btn-orange" style="margin-top: 10px;">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="content-img">
                                    <img src="{{ asset('assets/landing/img/kecamatan/cinere.jpeg') }}">
                                </div>
                                <div class="content-desc">
                                    <div class="content-desc-title">
                                        <a href="/wisata">
                                            <h3>Kecamatan Cinere</h3>
                                        </a>
                                    </div>
                                    <div class="content-desc-text">
                                        <ul class="breadcrumb-post">
                                            <li><i class="ion-person"></i>148.770 Jiwa</li>
                                        </ul>
                                        <p>
                                            Cinere, sebelumnya memiliki nama Tjikanyere atau Tjingerek adalah salah satu
                                            kecamatan di Kota Depok, Jawa Barat. Pusat pemerintahannya berada di Kelurahan
                                            Cinere. Sebelum berdiri sebagai kecamatan yang mandiri, wilayah Cinere termasuk
                                            bagian dari Kecamatan Limo.
                                            <a href="https://id.wikipedia.org/wiki/Cinere,_Depok">Wikipedia</a>
                                        </p>
                                        <a href="/wisata" class="btn btn-md btn-orange" style="margin-top: 10px;">Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aside">
                            <div class="row">
                                <div class="aside-content">
                                    <form method="POST">
                                        <div class="content-input">
                                            <input type="text" name="cari" class="form-control"
                                                placeholder="Search ...">
                                        </div>
                                        <div class="content-btn">
                                            <button type="submit" class="btn-search"><i class="ion-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="aside-content">
                                    <div class="content-title">
                                        <b>KATEGORI</b>
                                    </div>
                                    <div class="content-body">
                                        <ul style="padding: 0;list-style: none;">
                                            <li>Tempat Wisata</li>
                                            <li>Jenis Wisata</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="aside-content">
                                    <div class="content-title">
                                        <b>REKOMENDASI WISATA</b>
                                    </div>
                                    <div class="content-body">
                                        <ul style="padding: 0;list-style: none;">
                                            <li>Masjid Kubah Mas</li>
                                            <li>Taman Wiladatika</li>
                                            <li>Alun - Alun Kota Depok</li>
                                            <li>Arung Jeram Ciliwung</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </section>
@endsection
