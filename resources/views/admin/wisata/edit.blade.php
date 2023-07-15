@extends('admin.layouts.app')
@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Edit Wisata</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/admin') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('/admin/wisata') }}">Wisata</a>
                            </li>
                            <li class="breadcrumb-item">
                                Edit
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Data</h4>
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="{{ url('/admin/wisata/update', $wisata->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama" class="form-label">Nama Wisata</label>
                                            <input type="text" id="nama" name="nama" value="{{ $wisata->nama }}"
                                                class="form-control" placeholder="Nama Wisata" />
                                            @if ($errors->has('nama'))
                                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="alamat" class="form-label">Alamat Wisata</label>
                                            <input type="text" id="alamat" name="alamat"
                                                value="{{ $wisata->alamat }}" class="form-control"
                                                placeholder="Alamat Wisata" />
                                            @if ($errors->has('alamat'))
                                                <span class="text-danger">{{ $errors->first('alamat') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jenis_wisata_id" class="form-label">Jenis Wisata</label>
                                            <select id="jenis_wisata_id" name="jenis_wisata_id" class="form-control">
                                                <option value="">Pilih Jenis Wisata</option>
                                                @foreach ($jenis_wisata as $jenis)
                                                    <option value="{{ $jenis->id }}"
                                                        {{ $wisata->jenis_wisata_id == $jenis->id ? 'selected' : '' }}>
                                                        {{ $jenis->nama }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('jenis_wisata_id'))
                                                <span class="text-danger">{{ $errors->first('jenis_wisata_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="kecamatan_id" class="form-label">Kecamatan</label>
                                            <select id="kecamatan_id" name="kecamatan_id" class="form-control">
                                                <option value="">Pilih Kecamatan</option>
                                                @foreach ($kecamatan as $kec)
                                                    <option value="{{ $kec->id }}"
                                                        {{ $wisata->kecamatan_id == $kec->id ? 'selected' : '' }}>
                                                        {{ $kec->nama }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('kecamatan_id'))
                                                <span class="text-danger">{{ $errors->first('kecamatan_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="skor_rating" class="form-label">Rating Wisata</label>
                                            <input type="text" id="skor_rating" name="skor_rating"
                                                value="{{ $wisata->skor_rating }}" class="form-control"
                                                placeholder="Rating Wisata" />
                                            @if ($errors->has('skor_rating'))
                                                <span class="text-danger">{{ $errors->first('skor_rating') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="harga_tiket" class="form-label">Harga tiket</label>
                                            <input type="text" id="harga_tiket" name="harga_tiket"
                                                value="{{ $wisata->harga_tiket }}" class="form-control"
                                                placeholder="Harga tiket" />
                                            @if ($errors->has('harga_tiket'))
                                                <span class="text-danger">{{ $errors->first('harga_tiket') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control" name="image"
                                            accept="image/*">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <textarea id="deskripsi" name="deskripsi" value="{{ $wisata->deskripsi }}" class="form-control"
                                                placeholder="Deskripsi">{{ $wisata->deskripsi }}</textarea>
                                            @if ($errors->has('deskripsi'))
                                                <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                            Submit
                                        </button>
                                        <a href="{{ url('/admin/wisata') }}" class="btn btn-light-secondary me-1 mb-1">
                                            back
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
