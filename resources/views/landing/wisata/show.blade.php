@extends('landing.layouts.app')
@section('content')
    <section class="section-ticket">
        <div class="header">
            <img src="/storage/{{ $wisata->image }}">
            <div class="overlay">
                <div class="desc">
                    <h3>{{ $wisata->nama }}</h3>
                    <span class="ion-ios-star checked"></span>
                    <span class="ion-ios-star checked"></span>
                    <span class="ion-ios-star checked"></span>
                    <span class="ion-ios-star checked"></span>
                    <span class="ion-ios-star"></span>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="panel">
                <div class="panel-header">
                    <span class="ion-android-clipboard"></span>&nbsp; Detail Destination
                </div>
                <div class="panel-body">
                    <div class="detail">
                        <div class="col-1">
                            <div class="col">
                                <span class="ion-map"></span> {{ $wisata->alamat }}
                            </div>
                            <div class="col">
                                <span class="ion-person-stalker"></span> {{ $wisata->kecamatan->nama }}
                            </div>
                            <div class="col">
                                <span class="ion-model-s"></span> Transport
                            </div>
                            <div class="col">
                                <span class="ion-clipboard"></span>
                                {{ $wisata->jenisWisata->nama }}
                            </div>
                        </div>
                        <div class="col-2">
                            <b>Star From</b>
                            <h2><b style="color: #f25601">Rp. {{ number_format($wisata->harga_tiket) }} </b><small>/
                                    Pax</small></h2> <br>
                            <a href="" data-slide="slides" data-slide-target="#find"
                                class="btn-ticket btn-orange">Find Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Description
                </div>
                <div class="panel-body">
                    <p>{{ $wisata->deskripsi }}</p>
                </div>
            </div>
            <div class="panel">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Komentar
                </div>
                <div style="margin: 5px">
                    @if (Auth::check())
                        <form method="post" action="{{ url('komentar/store') }}">
                            @csrf
                            <div class="form-group ">
                                <label for="tanggal" class="col-form-label">Tanggal</label>
                                <div class="input-group">
                                    <input id="tanggal" name="tanggal" type="text" class="form-control" readonly
                                        value="{{ date('Y-m-d') }}">
                                    <input id="wisata_id" name="wisata_id" type="hidden"value="{{ $wisata->id }}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="user_id" class="col-form-label">User</label>
                                <div class="input-group">
                                    <input id="user_id" name="user_id" type="hidden" class="form-control" readonly
                                        value="{{ Auth::user()->id }}">
                                    <input type="text" class="form-control" readonly value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="rating" class="col-form-label">Rating</label>
                                <div class="input-group">
                                    <input id="rating" name="rating" type="number" class="form-control" required
                                        placeholder="1-5">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label for="isi" class="col-form-label">Isi</label>
                                <div class="input-group">
                                    <input id="isi" name="isi" type="text" class="form-control" required
                                        placeholder="isi komentar">
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="offset-4">
                                    <button name="submit" type="submit" class="btn"
                                        style="background: blue; color: white; border-radius:25px; margin-top:20px">Submit</button>
                                </div>
                            </div>
                        </form>
                    @else
                        <div class="alert alert-danger" role="alert">
                            Silahkan <a href="{{ url('login') }}">Login</a> untuk memberikan komentar
                        </div>
                    @endif
                </div>
            </div>
            <div class="panel">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; List Komentar
                </div>
                <div class="panel-body">
                    @foreach ($komentar as $kom)
                        <fieldset style="width: 100%; border-radius: 10px; margin-bottom: 20px">
                            <legend>{{ $kom->users->name }}</legend>
                            <small>Tanggal : {{ $kom->tanggal }}</small><br>
                            <small>Rating : {{ $kom->rating }}</small><br>
                            {{ $kom->isi }}
                        </fieldset>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
