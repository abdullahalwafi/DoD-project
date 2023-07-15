@extends('landing.layouts.app')
@section('content')
    <section class="section-header-single">
        <img src="{{ asset('assets/landing/img/jenis/1.png') }}">
        <div class="overlay">
            <div class="header-title">
                <h3>Types of Tourist Tours</h3>
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
    </section>

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li>Types</li>
    </ul>

    <section class="section section-single">
        <div class="container-fluid">
            <div class="single-head">
                <div class="col">
                    <img src="{{ asset('assets/landing/img/icon/bavel.png') }}">
                    <h3>find your types of tours right now !</h3>
                    <p>Berikut adalah daftar jenis wisata yang tersedia dengan tempat yang indah dan mewah, silahkan pilih
                        sesuai keinginan</p>
                </div>
                {{--  <div class="col-form">
          <form method="POST">
            
          </form>
        </div>  --}}
            </div>

            <div class="single-body">
                <div class="col">
                    <img src="{{ asset('assets/landing/img/jenis/alam.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata Alam</p>
                                <a href="/wisata" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <img src="{{ asset('assets/landing/img/jenis/belanja.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata Belanja</p>
                                <a href="/wisata" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <img src="{{ asset('assets/landing/img/jenis/budaya.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata Budaya dan Sejarah</p>
                                <a href="/wisata" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <img src="{{ asset('assets/landing/img/jenis/safari.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata Perburuan dan Safari</p>
                                <a href="/wisata" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <img src="{{ asset('assets/landing/img/jenis/kuliner.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata Kuliner</p>
                                <a href="/wisata" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <img src="{{ asset('assets/landing/img/jenis/pendidikan.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata Pendidikan</p>
                                <a href="/wisata" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <img src="{{ asset('assets/landing/img/jenis/petualangan.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata Petualangan</p>
                                <a href="/wisata" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <img src="{{ asset('assets/landing/img/jenis/religi.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Wisata Religi</p>
                                <a href="/wisata" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
@endsection
