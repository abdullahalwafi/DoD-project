@extends('admin.layouts.app')
@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Data Kecamatan</h3>
    </div>

    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Data News</h5>
                    <a data-bs-toggle="modal" data-bs-target="#tambahData" style="width: 100%" class="btn btn-primary">Add
                        Data</a>
                    <!-- Modal -->
                    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDataLabel">Form News</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form class="form" action="/admin/news" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="title">Title</label>
                                                        <input type="text" id="title" class="form-control"
                                                            name="title" placeholder="Title" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="image">Image</label>
                                                        <input type="file" id="image" class="form-control"
                                                            name="image" accept="image/*" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="content">Content</label>
                                                        <textarea name="content" class="summernote" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                            <meta http-equiv="refresh" content="3; url=/admin/news">
                        </div>
                    @endif
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Views</th>
                                <th>Updated</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($news as $new)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $new->title }}</td>
                                    <td>{{ $new->views }}</td>
                                    <td>{{ $new->updated_at }}</td>
                                    <td>
                                        <a data-bs-toggle="modal" data-bs-target="#editData{{ $new->id }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ url('/admin/news/' . $new->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="editData{{ $new->id }}" tabindex="-1"
                                    aria-labelledby="editData{{ $new->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editData{{ $new->id }}Label">Form News
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form class="form" action="/admin/news" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="title">Title</label>
                                                                    <input type="text" id="title"
                                                                        class="form-control" name="title"
                                                                        placeholder="Title" value="{{$new->title}}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="image">Image</label>
                                                                    <input type="file" id="image"
                                                                        class="form-control" name="image"
                                                                        accept="image/*" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="content">Content</label>
                                                                    <textarea name="content" class="summernote"value="{{$new->content}}" required>{{$new->content}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('script')
    <script src="{{ asset('assets/admin/assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/static/js/pages/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/extensions/summernote/summernote-lite.min.js') }}"></script>
    <script>
        $(".summernote").summernote({
            tabsize: 2,
            height: 120,
        })
    </script>
@endpush
@push('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/extensions/summernote/summernote-lite.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/compiled/css/form-editor-summernote.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/extensions/simple-datatables/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/compiled/css/table-datatable.css') }}" />
@endpush
