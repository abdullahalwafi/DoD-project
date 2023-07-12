@extends('landing.layouts.app')
@section('content')
    <section class="section-header-single">
        <img src="{{ asset('assets/landing/img/bg-destination.jpg') }}">
        <div class="overlay">
            <div class="header-title">
                <h3>Tourism Destinations</h3>
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
    </section>
    </section>

    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Destination</li>
    </ul>

    <section class="section section-single">
        <div class="container-fluid">
            <div class="single-head">
                <div class="col">
                    <img src="{{ url('assets/landing/img/icon/destination.png') }}">
                    <h3>find your destination right now !</h3>
                    <p>Berikut adalah daftar destinasi yang tersedia dengan harga yang bersahabat, silahkan pilih sesuai
                        keinginan</p>
                </div>
                <div class="col-form">
                    <form method="POST">

                    </form>
                </div>
            </div>
            <div class="single-body">
                @foreach ($wisata as $w)
                    <div class="col">
                        <img src="{{ asset('/assets/landing/img/temple.jpg') }}">
                        <div class="overlay">
                            <div class="caption">
                                <div class="caption-text">
                                    <h4>{{ $w->nama }}</h4>
                                    <span class="ion-ios-star checked"></span>
                                    <span class="ion-ios-star checked"></span>
                                    <span class="ion-ios-star checked"></span>
                                    <span class="ion-ios-star checked"></span>
                                    <span class="ion-ios-star"></span> <br>
                                    <span class="ion-bag big"></span> &nbsp;
                                    <b>Rp. {{ number_format($w->harga_tiket) }}</b> <br>
                                    <a href="{{ url('wisata/show', $w->id) }}" class="btn btn-orange btn-round">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
