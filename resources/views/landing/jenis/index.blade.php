@extends('landing.layouts.app')
@section('content')

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destination - Bali Travel Time</title>
    <link rel="icon" type="image/png" href="img/icon/bavel.png">

    <!-- Meta Description -->
    <meta name="description" content="Bali Travel Time">
    <meta name="keywords" content="Travel, Bali, Tourism">
    <meta name="robots" content="index, nofollow">
    <meta name="web_author" content="Yogi Prasertawan">
    <meta name="language" content="Indonesian">  

    <!-- Import Icon -->
      <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">

    <!-- Import Style -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/swipe.min.css">

  </head>

  <!-- Sidebar -->
  <div class="sidebar">
  <ul class="sidebar-list">
    <li><a href="" class="close"><span class="ion-android-close"></span></a></li>
    <li class="sidebar-list-hover"><a href="index.html">Home</a></li>
      <li class="sidebar-list-hover"><a href="destination.html">Destination</a></li>
      <li class="sidebar-list-hover"><a href="gallery.html">Gallery</a></li>
      <li class="sidebar-list-hover"><a href="index.html#discover">Discover</a></li>
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
      <a href="" class="text-center">Not have account ? Register now </a>
    </div>
  </div>

  <div class="login-overlay"></div>

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
  </section>

  <ul class="breadcrumb">
    <li><a href="index.html">Home</a></li>
    <li>Types</li>
  </ul>

  <section class="section section-single">
    <div class="container-fluid">
      <div class="single-head">
        <div class="col">
          <img src="{{ asset('assets/landing/img/icon/bavel.png') }}">
          <h3>find your types of tours right now !</h3>
          <p>Berikut adalah daftar jenis wisata yang tersedia dengan tempat yang indah dan mewah, silahkan pilih sesuai keinginan</p>
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
                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
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
                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
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
                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
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
                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
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
                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
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
                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
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
                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
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
                <a href="single-destination.html" class="btn btn-orange btn-round">See Details</a>
              </div>
            </div>
          </div>
        </div>

    </div>
  </section>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/swipe.js"></script>
  </body>
  </html>

@endsection