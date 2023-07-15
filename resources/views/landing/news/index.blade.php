@extends('landing.layouts.app')
@section('content')
    <section class="section-header-single">
        <img src="{{ asset('assets/landing/img/bg-news.jpg') }}">
        <div class="overlay">
            <div class="header-title">
                <h3>What's Happen</h3>
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
    </section>
    </section>

    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li>News</li>
    </ul>

    <section class="section section-archive">
        <div class="container">
            <div class="row">
                <div class="content">
                    @forelse ($news as $item)
                        <div class="col mb-3">
                            <div class="content-img">
                                <img style="border: 3px solid #e9e8e8; border-radius: 5px;"
                                    src="/storage/{{ $item->image }}">
                                <span class="label-img"> News</span>
                            </div>
                            <div class="content-desc">
                                <div class="content-desc-title">
                                    <a href="/news/{{ $item->slug }}">
                                        <h3> {{ $item->title }}</h3>
                                    </a>
                                </div>
                                <div class="content-desc-text">
                                    <ul class="breadcrumb-post">
                                        <li><i class="ion-calendar"></i> <?= date('d F Y', strtotime($item->created_at)) ?>
                                            &nbsp; / &nbsp;</li>
                                        <li><i class="ion-bookmark"></i> <a>News</a> &nbsp; / &nbsp;</li>
                                        <li><i class="ion-person"></i> Admin</li>
                                    </ul>
                                    <p>
                                        <?= substr($item->content, 0, '350') ?>
                                    </p>
                                    <a href="/news/{{ $item->slug }}" class="btn btn-md btn-orange"
                                        style="margin-top: 10px;">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        tidak ada data
                    @endforelse
                    <ul class="pagination">
                        @if ($news->onFirstPage())
                            <li class="disabled"><span class="ion-ios-arrow-back"></span></li>
                        @else
                            <li><a href="{{ $news->previousPageUrl() }}" class="pagination-arrow arrow-left"><span
                                        class="ion-ios-arrow-back"></span></a></li>
                        @endif

                        @for ($i = 1; $i <= $news->lastPage(); $i++)
                            @if ($i == $news->currentPage())
                                <li class="active"><span class="pagin-number">{{ $i }}</span></li>
                            @else
                                <li><a href="{{ $news->url($i) }}" class="pagin-number">{{ $i }}</a></li>
                            @endif
                        @endfor

                        @if ($news->hasMorePages())
                            <li><a href="{{ $news->nextPageUrl() }}" class="pagin-arrow arrow-right"><span
                                        class="ion-ios-arrow-forward"></span></a></li>
                        @else
                            <li class="disabled"><span class="ion-ios-arrow-forward"></span></li>
                        @endif
                    </ul>

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
