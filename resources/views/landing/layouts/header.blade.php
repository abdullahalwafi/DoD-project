<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{asset('assets/landing/img/icon/bavel.png')}}">

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
                    <li><a href="destination.html">Destination</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a data-slide="slides" data-slide-target="#discover">Discover</a></li>
                    <li><a href="news.html"> News</a></li>
                    <li><button class="btn-login" id="openLogin">LOGIN</button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="sidebar-list">
            <li><a href="" class="close"><span class="ion-android-close"></span></a></li>
            <li class="sidebar-list-hover"><a href="{{ url('/') }}">Home</a></li>
            <li class="sidebar-list-hover"><a href="destination.html">Destination</a></li>
            <li class="sidebar-list-hover"><a href="gallery.html">Gallery</a></li>
            <li class="sidebar-list-hover"><a href="{{ url('/') }}#discover">Discover</a></li>
            <li class="sidebar-list-hover"><a href="news.html"> News</a></li>
            <li><a class="btn btn-orange btn-round" href="login.html"> Login</a></li>
        </ul>
    </div>

    <!-- Sidebar Overlay -->
    <section class="sidebar-overlay"></section>

    <!-- Login Form -->

    <div class="login-form">
        <div class="login-top">
            <span class="close">&times;</span>
        </div>
        <div class="login">
            <h3 class="text-center">
                Bavel Log In
            </h3>
            <div class="form-input">
                <label>Email</label> <br>
                <input type="email" name="" class="form-control">
            </div>
            <div class="form-input">
                <label>Password</label> <br>
                <input type="password" name="" class="form-control">
            </div>
            <div class="form-input">
                <button type="submit" class="btn btn-login">Log In</button>
            </div>
            <a href="" class="text-center">Don't have account ? Register now</a>
        </div>
    </div>

    <div class="login-overlay"></div>
