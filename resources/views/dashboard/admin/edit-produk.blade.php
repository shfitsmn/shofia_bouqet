@extends('layouts.dashboard.index')

@section('title', 'Produk Create')

@section('isi')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Forms</h5>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="/produk/update/{{ $produk->id }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="namaProduk" class="form-label">Nama Produk</label>
                            <input type="text" name="nama" value="{{ $produk->nama }}" class="form-control"
                                id="namaProduk" placeholder="Masukkan Nama Produk">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar Produk</label>
                            <!-- Menampilkan gambar sebelumnya -->
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="Gambar Produk"
                                    class="img-thumbnail" style="max-width: 200px; height: auto;">
                            </div>
                            <input class="form-control" type="file" name="gambar" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="stokProduk" class="form-label">Stok Produk</label>
                            <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control"
                                id="stokProduk" placeholder="Masukkan Stok Produk">
                        </div>
                        <div class="mb-3">
                            <label for="kategoriProduk" class="form-label">Kategori</label>
                            <select class="form-select" name="kategori" id="kategoriProduk">
                                <option value="" disabled>-- Pilih Kategori --</option>
                                <option value="bunga" {{ $produk->kategori == 'bunga' ? 'selected' : '' }}>Bunga
                                </option>
                                <option value="uang" {{ $produk->kategori == 'uang' ? 'selected' : '' }}>Uang</option>
                                <option value="snack" {{ $produk->kategori == 'snack' ? 'selected' : '' }}>Snack
                                </option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="hargaProduk" class="form-label">Harga Produk</label>
                            <input type="text" name="harga" value="{{ $produk->harga }}" class="form-control"
                                id="hargaProduk" placeholder="Masukkan Harga Produk">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsiProduk" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsiProduk"
                                rows="3">{{ $produk->deskripsi }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
