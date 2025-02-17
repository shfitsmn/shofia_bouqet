@extends('layouts.dashboard.index')

@section('title', 'Produk All')

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
        <h4>Data Produk</h4>
    </div>
    <div class="card-body">
        <div>
            <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Stok</th>
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
                            <a href="{{ asset('storage/'.$produk->gambar) }}" target="_blank">
                                <img src="{{ asset('storage/'.$produk->gambar) }}" class="img-thumbnail"
                                    alt="{{ $produk->nama }}" style="max-width: 80px; height: auto;">
                            </a>

                        </td>
                        <td>
                            <h6 class="fw-semibold mb-0">{{ ucwords($produk->nama) }}</h6>
                        </td>
                        <td>
                            <h6 class="fw-semibold mb-0">{{ ucwords($produk->stok) }}</h6>
                        </td>
                        <td>
                            <span class="badge bg-primary">{{ ucwords($produk->kategori ?? 'Tidak Ada') }}</span>
                        </td>
                        <td>
                            <p style="max-width: 150px;">{{ $produk->deskripsi ?? 'Tidak Ada
                                Deskripsi' }}</p>
                        </td>
                        <td>
                            <span class="fw-bold text-dark">Rp{{ number_format($produk->harga, 0, ',', '.') }}</span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-warning">
                                    <i class="ti ti-pencil"></i>
                                </a>
                                <a href="{{ route('produk.delete', $produk->id) }}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                    <i class="ti ti-trash-x"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection