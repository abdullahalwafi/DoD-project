@extends('admin.layouts.app')
@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Data Users</h3>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="page-content">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Data Users</h5>
                    <a data-bs-toggle="modal" data-bs-target="#tambahData" style="width: 100%" class="btn btn-primary">Add
                        Data</a>
                    <!-- Modal -->
                    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahDataLabel">Form Users</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form class="form" action="/admin/users" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" id="name" class="form-control"
                                                            name="name" placeholder="Name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" id="email" class="form-control"
                                                            name="email" placeholder="Email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Password</label>
                                                        <input type="text" id="password" class="form-control"
                                                            name="password" placeholder="Password" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="role">Role</label>
                                                        <input type="radio" id="admin" value="admin" name="role"
                                                            required>
                                                        <label for="admin">admin</label>
                                                        <input type="radio" id="user" value="user" name="role"
                                                            required>
                                                        <label for="user">user</label>
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
                            <meta http-equiv="refresh" content="3; url=/admin/users">
                        </div>
                    @endif
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a data-bs-toggle="modal" data-bs-target="#editData{{ $user->id }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ url('/admin/users/' . $user->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="editData{{ $user->id }}" tabindex="-1"
                                    aria-labelledby="editData{{ $user->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editData{{ $user->id }}Label">Form Users
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form class="form" action="/admin/users/{{ $user->id }}"
                                                method="post">
                                                @csrf
                                                @method('put')
                                                <div class="modal-body">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" id="name"
                                                                        class="form-control" name="name" value="{{$user->name}}"
                                                                        placeholder="Name" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="email" id="email"
                                                                        class="form-control" name="email" value="{{$user->email}}"
                                                                        placeholder="Email" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password">Password</label>
                                                                    <input type="text" id="password"
                                                                        class="form-control" name="password"
                                                                        placeholder="Password">
                                                                    <small><i>*kosogkan jika tidak ingin ubah password</i></small>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="role">Role</label><br>
                                                                    <input type="radio" id="admin" value="admin" {{$user->role == "admin" ? 'checked' : "" }}
                                                                        name="role" required>
                                                                    <label for="admin">admin</label>
                                                                    <input type="radio" id="user2" value="user" {{$user->role == "user" ? 'checked' : "" }}
                                                                        name="role" required>
                                                                    <label for="user2">user</label>
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
