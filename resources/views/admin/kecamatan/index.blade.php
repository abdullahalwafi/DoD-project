@extends('admin.layouts.app')
@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
        @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        <meta http-equiv="refresh" content="3;url=/admin/kecamatan">
        @endif
    </header>

    <div class="page-heading">
        <h3>Data Kecamatan</h3>
    </div>
    
    <div class="page-content">
        <section class="section">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Daftar Kecamatan Tersedia</h4>
              </div>
              <div class="card-body">
                <a href="{{ url('admin/kecamatan/create') }}" class="btn btn-success">+ Tambah Kecamatan</a> 
                <p class="card-description">                
                </p>
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kecamatan</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Camats as $Kecamatan)
                            <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td> {{ $Kecamatan->nama}} </td>
                            <td>                          
                                <a href="{{ url('/admin/kecamatan/edit', $Kecamatan->id) }}" class="btn btn-warning btn-sm">Edit</a> 
                                <form action="{{ url('/admin/kecamatan/destroy', $Kecamatan->id) }}" method="post" class="d-inline"
                                    onclick="if(!confirm('Anda Yakin Hapus Data Buku {{ $Kecamatan->nama}}?')) {return false}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
