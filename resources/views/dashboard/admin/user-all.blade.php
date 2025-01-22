@extends('layouts.dashboard.index')

@section('title', 'User All')

@section('isi')
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card mt-3">
    <div class="card-header">
        <h4>Data User</h4>
    </div>
    <div class="card-body">
        <div>
            <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <div>
                            <div class="row-reverse">
                                <div class="col-6">
                                    <h6 class="fw-semibold mb-0">{{ ucwords($user->nama) }}</h6>
                                </div>
                                <div class="col-6">
                                    <span class="text-muted">{{ucwords($user->role) }}</span>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">
                                    <i class="ti ti-pencil"></i>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('user.delete', $user->id) }}" class="btn btn-sm btn-danger">
                                    <i class="ti ti-trash-x"></i>
                                </a>

                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection