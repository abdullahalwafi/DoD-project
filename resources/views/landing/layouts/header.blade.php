<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/landing/img/icon/bavel.png') }}">

    <!-- Meta Description -->
    <meta name="description" content="{{ config('app.name', 'Laravel') }}">
    <meta name="keywords" content="Travel, Bali, Tourism">
    <meta name="robots" content="index, nofollow">
    <meta name="web_author" content="Yogi Prasertawan">
    <meta name="language" content="Indonesian">

    <!-- Import Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/css/ionicons.min.css') }}">

    <!-- Import Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/css/main.css') }}">

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-bars">
                <a href="#" class="navbar-title sidebar-toggle" style="padding: 0;"><i
                        class="ion-navicon-round"></i></a>
                <a href="{{ url('/') }}" class="navbar-title">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div class="navbar-item">
                <a href="{{ url('/') }}" class="navbar-title">{{ config('app.name', 'Laravel') }}</a>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/wisata">Wisata</a></li>
                    <li><a href="/jenis_wisata">Jenis</a></li>
                    <li><a href="/kecamatan"> Kecamatan</a></li>
                    <li><a href="/news"> News</a></li>

                    <li>
                        @if (Auth::check())
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <a href="/login">LOGIN</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="sidebar-list">
            <li><a href="" class="close"><span class="ion-android-close"></span></a></li>
            <li class="sidebar-list-hover"><a href="{{ url('/') }}">Home</a></li>
            <li class="sidebar-list-hover"><a href="/wisata">Wisata</a></li>
            <li class="sidebar-list-hover"><a href="/jenis_wisata">JenisWisata</a></li>
            <li class="sidebar-list-hover"><a href="/kecamatan">Kecamatan</a></li>
            <li class="sidebar-list-hover"><a href="/news">News</a></li>
            <li>
                @if (Auth::check())
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                        class="btn btn-orange btn-round">Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a class="btn btn-orange btn-round" href="/login">LOGIN</a>
                @endif
            </li>
        </ul>
    </div>

    <!-- Sidebar Overlay -->
    <section class="sidebar-overlay"></section>
