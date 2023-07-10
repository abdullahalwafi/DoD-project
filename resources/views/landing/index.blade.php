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
            <div class="col">
                <a href="destination.html">
                    <img src="{{ asset('assets/landing/img/selfie.jpg') }}" alt="Destination">
                    <div class="caption">
                        <p>DESTINATION</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Kunjungi destinasi wisata yang belum pernah anda temui sebelumnya</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="culture.html">
                    <img src="https://img.freepik.com/free-vector/film-design-concept_1284-13882.jpg?w=740&t=st=1688974282~exp=1688974882~hmac=b37b2a9a20c89db78a41d0e95f8ad13c89edd3f8687cd6b24452835e7a430dc2">
                    <div class="caption" alt="Culture">
                        <p>CULTURE</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Selain pemandangan yang indah depok juga memiliki budaya yang mengesankan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="event.html">
                    <img src="https://img.freepik.com/free-vector/film-design-concept_1284-13882.jpg?w=740&t=st=1688974282~exp=1688974882~hmac=b37b2a9a20c89db78a41d0e95f8ad13c89edd3f8687cd6b24452835e7a430dc2">
                    <div class="caption" alt="Event">
                        <p>EVENT</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Ikuti dan ketahui event - event menarik yang berlangsung di Depok</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="stay.html">
                    <img src="https://img.freepik.com/free-vector/film-design-concept_1284-13882.jpg?w=740&t=st=1688974282~exp=1688974882~hmac=b37b2a9a20c89db78a41d0e95f8ad13c89edd3f8687cd6b24452835e7a430dc2">
                    <div class="caption" alt="Stay">
                        <p>WHERE TO STAY</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Temukan tempat penginapan terbaik dengan harga yang relatif murah</p>
                        </div>
                    </div>
                </a>
            </div>
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
                    <iframe src="https://www.youtube.com/embed/WNTqtWu3is8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-image">
                    <div class="row">
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img
                                src="{{ asset('assets/landing/img/Gallery/27573391_1831430933557419_8533318736831053824_n.jpg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img
                                src="{{ asset('assets/landing/img/Gallery/26870845_1740142096076715_486825953067008000_n.jpg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img
                                src="{{ asset('assets/landing/img/Gallery/27880266_1798970387070331_5621832064107020288_n.jpg') }}">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img
                                src="{{ asset('assets/landing/img/Gallery/29415561_163922580940067_2417069708558729216_n.jpg') }}">
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
                <div class="col-1 slides">
                    <img src="{{ asset('assets/landing/img/pantai-kuta.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Kuta Beach</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 15.000</b>
                                <a href="single-destination.html" class="btn btn-orange btn-round right">See
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 slides">
                    <img src="{{ asset('assets/landing/img/temple.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Pure Ulun Danu Bratan</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 15.000</b>
                                <a href="" class="btn btn-orange btn-round right">See
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-2 slides">
                    <img src="{{ asset('assets/landing/img/tanah-lot.jpeg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Tanah Lot</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 15.000 - Rp. 60.000</b> <br>
                                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 slides">
                    <img src="{{ asset('assets/landing/img/depok-bird-park.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Depok Bird Park</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 75.000 - Rp. 150.000</b> <br>
                                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 slides">
                    <img src="{{ asset('assets/landing/img/gunung.jpg') }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>Mount Batur</p>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star checked"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span> <br>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>Rp. 10.000</b> <br>
                                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <div class="blockquote">
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. </p>
                        <div class="blockquote-user">
                            <div class="blockquote-avatar">
                                <img src="{{ asset('assets/landing/img/faces/clem-onojeghuo-2.jpg') }}"
                                    alt="Bae Hyo-Rin">
                            </div>
                            <div class="blockquote-name">John Doe</div>
                        </div>
                    </div>
                    <div class="blockquote">
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. </p>
                        <div class="blockquote-user">
                            <div class="blockquote-avatar">
                                <img src="{{ asset('assets/landing/img/faces/joe-gardner-2.jpg') }}" alt="Bae Hyo-Rin">
                            </div>
                            <div class="blockquote-name">Jane Doe</div>
                        </div>
                    </div>
                    <div class="blockquote">
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. </p>
                        <div class="blockquote-user">
                            <div class="blockquote-avatar">
                                <img src="{{ asset('assets/landing/img/faces/clem-onojeghuo-3.jpg') }}"
                                    alt="Bae Hyo-Rin">
                            </div>
                            <div class="blockquote-name">John Roe</div>
                        </div>
                    </div>
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
                <div class="col">
                    <img src="{{ asset('assets/landing/img/news/039443100_1523457714-IMG-20180411-WA0038.jpg') }}">
                    <div class="overlay">
                        <a href="single-news.html">
                            <p class="text-top"> 10 Ribu Sepeda Tua dari 30 Negara Kumpul di Depok</p>
                        </a>
                        <p class="text-bottom">20 April 2018</p>
                    </div>
                </div>
                <div class="col-2">
                    <img src="{{ asset('assets/landing/img/news/038321800_1523380452-IMG-20180410-WA0031.jpg') }}">
                    <div class="overlay">
                        <a href="single-news.html">
                            <p class="text-top">Keistimewaan Depok di Mata Dubes Mesir</p>
                        </a>
                        <p class="text-bottom">20 April 2018</p>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('assets/landing/img/news/023053600_1523534851-IMG-20180412-WA0034.jpg') }}">
                    <div class="overlay">
                        <a href="single-news.html">
                            <p class="text-top">Aksi Polres Badung Tangkal Hoaks</p>
                        </a>
                        <p class="text-bottom">20 April 2018</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
