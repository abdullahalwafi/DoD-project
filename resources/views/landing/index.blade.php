@extends('landing.layouts.app')
@section('content')
    <!-- Section Header -->
    <section class="section-header">
        <div class="section-header-image">
            <img src="{{ asset('assets/landing/img/header2.png') }}" alt="Header">
        </div>
        <div class="container">
            <div class="section-header-inner">
                <div class="section-header-title">
                    <h3 class="title">GREAT <br> ART <br>OF <br>DEPOK</h3>
                    <p>Telusuri Keindahan Depok Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    <a href="" class="btn btn-round btn-orange">See Our Vacation</a>
                </div>
                <div class="section-header-title-xs">
                    <h3 class="title">GREAT ART OF DEPOK</h3>
                    <p>Telusuri Keindahan Depok Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    <a href="" class="btn btn-round btn-orange">See Our Vacation</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About -->

    <section class="section section-about">
        <div class="about-head slides">
            <h3>Discovery of Depok</h3>
            <p><b>DoD</b> merupakan singkatan dari <b>Discovery of Depok</b> merupakan website yang bertujuan
                mengenalkan pesona keindahan Depok mulai dari Wisata dan Budaya .
                Tidak hanya sarana untuk memperkanalkan, <b>DoD</b> juga menyediakan berbagai layanan pemesanan tiket
                mulai tiket Tour dan tempat penginapan di sekitar Depok </p>
        </div>
        <div class="about-body">
            <div class="row slides">
                <div class="col">
                    <img src="{{ asset('assets/landing/img/About/035-trekking.png') }}">
                    <h2>ADVENTURE</h2>
                    <p>Dapatkan pengalaman berpetualang yang belum pernah anda rasakan sebelumnya hanya di Depok</p>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/landing/img/About/028-book.png') }}">
                    <h2>GUIDE</h2>
                    <p>Kami memberikan info - info seputar Depok mulai dari event dan destinasi terbaik</p>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/landing/img/About/024-tent.png') }}">
                    <h2>STAY</h2>
                    <p>Anda tidak perlu kawatir akan menetap dimana karna kami menyediakan tiket Hotel terbaik</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Explore -->

    <section class="section-explore">
        <div class="texture-handler-top"></div>
        <div class="overlay">
            <div class="caption">
                <h1 class="section-title">ENJOY BEUTY & friendliness OF</h1> <br>
            </div>
        </div>
        <div class="texture-handler-bottom"></div>
    </section>

    <!-- Section Discover -->

    <section class="section section-discover" id="discover">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">DISCOVERY DEPOK</h3>
            <p class="section-subtitle">Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di Depok yang
                dapat anda jelajahi</p>
        </div>
        <div class="section-discover-body slides">
            @foreach ($jeniswisata as $item)
                <div class="col">
                    <a href="/jenis_wisata/{{$item->id}}">
                        <img
                            src="{{ asset('assets/landing/img/Discovery/4.jpeg') }}">
                        <div class="caption" alt="Culture">
                            <p>{{ $item->nama }}</p>
                            <div class="line"></div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Gallery Depok -->

    <section class="section section-gallery">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">OUR GALLERY</h3>
            <p class="section-subtitle">Potret indahnya kenampakan Depok yang tidak boleh anda lewatkan</p>
        </div>
        <div class="section-gallery-body">
            <div class="row">
                <div class="col-video">
                    <iframe src="https://www.youtube.com/embed/WNTqtWu3is8" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-image">
                    <div class="row">
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img
                                src="{{ asset('assets/landing/img/Gallery/1.jpg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img
                                src="{{ asset('assets/landing/img/Gallery/2.jpg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img
                                src="{{ asset('assets/landing/img/Gallery/3.jpg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img
                                src="{{ asset('assets/landing/img/Gallery/4.jpeg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tours -->

    <section class="section section-tour">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">5 RECOMENDED TOURS</h3>
            <p class="section-subtitle">Wisata terbaik berdasarkan tingkat ketertarikan wisatawan Depok dan kepopuleran
                wisata tersebut</p>
        </div>
        <div class="section-tour-body">
            <div class="row">
                @foreach ($randomwisata1 as $item)
                    <div class="col-1 slides">
                        <img src="/storage/{{ $item->image }}">
                        <div class="overlay">
                            <div class="caption">
                                <div class="caption-text">
                                    <p>{{ $item->nama }}</p>
                                    <span class="ion-ios-star checked"></span>
                                    <span class="ion-ios-star checked"></span>
                                    <span class="ion-ios-star checked"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span> <br>
                                    <span class="ion-bag big"></span> &nbsp;
                                    <b>Rp. {{ number_format($item->harga_tiket, 0, ',', '.') }}</b>
                                    <a href="/wisata/show/{{ $item->id }}" class="btn btn-orange btn-round right">See
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @foreach ($randomwisata2 as $item)
                    <div class="col-2 slides">
                        <img src="/storage/{{ $item->image }}">
                        <div class="overlay">
                            <div class="caption">
                                <div class="caption-text">
                                    <p>{{ $item->nama }}</p>
                                    <span class="ion-ios-star checked"></span>
                                    <span class="ion-ios-star checked"></span>
                                    <span class="ion-ios-star checked"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span> <br>
                                    <span class="ion-bag big"></span> &nbsp;
                                    <b>Rp. {{ number_format($item->harga_tiket, 0, ',', '.') }}</b>
                                    <a href="/wisata/show/{{ $item->id }}" class="btn btn-orange btn-round right">See
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section Newsletter -->

    <section class="section-testi">
        <div class="overlay">
            <div class="head">
                <h3>Tourist Says</h3>
            </div>
            <div id='mySwipe' class='swipe'>
                <div class="swipe-wrap">
                    @foreach ($tigakomentar as $item)
                        <div class="blockquote">
                            <p class="text">{{ $item->isi }}</p>
                            <div class="blockquote-user">
                                <div class="blockquote-avatar">
                                    <img src="{{ url('assets/admin/assets/compiled/jpg/4.jpg') }}" alt="Bae Hyo-Rin">
                                </div>
                                <div class="blockquote-name">{{ $item->user->name }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="overlay-btn">
                <button class="btn-orange btn-bullet" onclick='mySwipe.prev()'><span
                        class="ion-arrow-left-c"></span></button> &nbsp;
                <button class="btn-orange btn-bullet" onclick='mySwipe.next()'><span
                        class="ion-arrow-right-c"></span></button>
            </div>
        </div>
    </section>

    <!-- Section News -->

    <section class="section section-news">
        <div class="section-news-head">
            <h3 class="section-title">WHAT'S HAPPENING</h3>
            <p class="section-subtitle">Apa saja yang terjadi seputar Pariwisata, Kebudayaan dan Event di Depok</p>
        </div>
        <div class="section-news-body">
            <div class="row slides">
                @foreach ($newsterbaru as $item)
                    <div class="col">
                        <a href="/news/{{ $item->slug }}">
                            <img src="/storage/{{ $item->image }}">
                            <div class="overlay">
                                <a href="/news/{{ $item->slug }}">
                                    <p class="text-top"> {{ $item->title }}</p>
                                </a>
                                <p class="text-bottom">{{ date('d F Y', strtotime($item->created_at)) }}</p>
                            </div>
                        </a>    
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
