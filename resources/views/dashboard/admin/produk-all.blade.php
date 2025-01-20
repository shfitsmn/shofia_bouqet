@extends('layouts.dashboard.index')

@section('title', 'Produk All')

@section('isi')
<div class="card">
    <div class="card-header">
        <h4>Data Produk</h4>
    </div>
    <div class="card-body">
        <div>
            <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $produk)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <img src="{{ asset('storage/'.$produk->gambar) }}" class="img-thumbnail" alt="...">

                    </td>
                    <td>
                        <h6 class="fw-semibold mb-0">{{ ucwords($produk->nama) }}</h6>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="row">
                            <div class="col-2">
                                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-warning">
                                    <i class="ti ti-pencil"></i>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="{{ route('produk.delete', $produk->id) }}" class="btn btn-sm btn-danger">
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
