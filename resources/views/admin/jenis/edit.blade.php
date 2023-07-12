@extends('admin.layouts.app')
@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Jenis Wisata</h3>
    </div>
    
    <div class="page-content">
        <section class="section">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Edit Jenis Wisata</h4>
              </div>
              <div class="card-body">                

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- form validasi -->
        <form class="forms-sample" action="{{ url('/admin/jenis/update', $JenisWisata->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Jenis Wisata</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Jenis Wisata" 
                        value="{{ $JenisWisata->nama }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </form>
              </div>
            </div>
          </section>
    </div>
@endsection
