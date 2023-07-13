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
        <meta http-equiv="refresh" content="3;url=/admin/jenis">
        @endif
    </header>

    <div class="page-heading">
        <h3>Data Jenis Wisata</h3>
    </div>
    
    <div class="page-content">
        <section class="section">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Daftar Jenis Wisata Tersedia</h4>
              </div>
              <div class="card-body">
                <a href="{{ url('admin/jenis/create') }}" class="btn btn-success">+ Tambah Jenis Wisata</a> 
                <p class="card-description">                
                </p>
                <table class="table table-striped" id="table1">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Wisata</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($JeWis as $JenisWisata)
                      <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $JenisWisata->nama}} </td>
                        <td>                          
                          <a href="{{ url('/admin/jenis/edit', $JenisWisata->id) }}" class="btn btn-warning btn-sm">Edit</a> 
                          <form action="{{ url('/admin/jenis/destroy', $JenisWisata->id) }}" method="post" class="d-inline"
                              onclick="if(!confirm('Anda Yakin Hapus Data Buku {{ $JenisWisata->nama}}?')) {return false}">
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
