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
                    <h3>Data Wisata</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/admin') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                Wisata
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('/admin/wisata/create') }}" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-bordered" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Kecamatan</th>
                                <th>Rating</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wisata as $w)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $w->nama }}</td>
                                    <td>{{ $w->jenisWisata->nama }}</td>
                                    <td>{{ $w->kecamatan->nama }}</td>
                                    <td>{{ $w->skor_rating }}</td>
                                    <td>Rp.{{ number_format($w->harga_tiket) }}</td>
                                    <td>
                                        <a href="{{ url('wisata/show', $w->id) }}" class="btn btn-info btn-sm"><i
                                                class="bi bi-eye"></i></a>
                                        <a href="{{ url('/admin/wisata/edit', $w->id) }}" class="btn btn-warning btn-sm"><i
                                                class="bi bi-pen"></i></a>
                                        {{-- hapus --}}
                                        <form action="{{ url('/admin/wisata/destroy', $w->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" onclick="if(!confirm('Anda yakin akan menghapus data {{ $w->nama }} ?')) {return false}"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
