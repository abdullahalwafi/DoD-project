@extends('landing.layouts.app')
@section('content')
    <section class="section-header-single">
        <img src="{{ asset('assets/landing/img/bg-news.jpg') }}">
        <div class="overlay">
            <div class="header-title">
                <h3>{{ $news->title }}</h3>
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
    </section>
    </section>

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="/news">News</a></li>
        <li>{{ $news->title }}</li>
    </ul>

    <!-- Sidebar Overlay -->

    <section class="section section-archive">
        <div class="container" style="margin-top: 80px;">
            <div class="row">
                <div class="content">
                    <div class="content-single">
                        <div class="content-single-title">
                            <h3>{{ $news->title }}</h3>
                            <img src="/storage/{{ $news->image }}" class="image">
                        </div>
                        <div class="content-single-body">
                            {{ $news->content }}
                            <div class="label">
                                <a href=""><span class="ion-pricetags"></span> &nbsp; News</a>
                                <a href=""><span class="ion-android-share-alt"></span> &nbsp; Share</a>
                                <a href=""><span class="ion-heart"></span> &nbsp; Like</a>
                            </div>
                        </div>
                        <div class="content-single-footer">
                            <h3 class="text-center">Artikel Terkait</h3>
                            <div class="terkait">
                                @foreach ($terkait as $item)
                                    <div class="col">
                                        <img src="/storage/{{ $item->image }}"> <br><br>
                                        <a href="/news/{{ $item->slug }}">
                                            <h3 class="text-center">
                                                {{ $item->title }}
                                            </h3>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aside">
                    <div class="row">
                        <div class="aside-content">
                            <form method="POST">
                                <div class="content-input">
                                    <input type="text" name="cari" class="form-control" placeholder="Search ...">
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
                                    <li><a>News</a></li>
                                    <li><a>Culture</a></li>
                                    <li><a>Event</a></li>
                                    <li><a>Adventure</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="aside-content">
                            <div class="content-title">
                                <b>REKOMENDASI</b>
                            </div>
                            <div class="content-body">
                                <ul style="padding: 0;list-style: none;">
                                    @foreach ($rekomendasi as $item)
                                        <li><a href="/news/{{ $item->slug }}">
                                                {{ $item->title }}
                                            </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
