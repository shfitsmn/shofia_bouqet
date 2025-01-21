@extends('layouts.dashboard.index')

@section('title', 'Daftar Pesanan')

@section('isi')
<div class="card">
    <div class="card-header">
        <h4>Daftar Pesanan</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal Pesanan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanans as $pesanan)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pesanan->user->nama }}</td>
                        <td>Rp{{ number_format($pesanan->total_harga, 0, ',', '.') }}</td>
                        <td>
                            <span
                                class="badge bg-{{ $pesanan->status == 'completed' ? 'success' : ($pesanan->status == 'pending' ? 'warning' : 'danger') }}">
                                {{ ucfirst($pesanan->status) }}
                            </span>
                        </td>
                        <td>{{ $pesanan->created_at->format('d M Y, H:i') }}</td>
                        <td>
                            @if($pesanan->status == 'pending')
                            <form action="{{ route('pesanan.terima', $pesanan->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success"
                                    onclick="return confirm('Yakin ingin menerima pesanan ini?')">
                                    Terima
                                </button>
                            </form>
                            <form action="{{ route('pesanan.batalkan', $pesanan->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin membatalkan pesanan ini?')">
                                    Batalkan
                                </button>
                            </form>
                            @else
                            <span class="text-muted">Tidak ada aksi</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
