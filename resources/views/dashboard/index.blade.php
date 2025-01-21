@extends('layouts.dashboard.index')

@section('title', 'Dashboard')

@section('isi')
<div class="row">
    @if(auth()->user()->role === 'admin')
    <!-- Dashboard untuk Admin -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Pendapatan</h5>
                <h4 class="fw-semibold text-success">Rp{{ number_format($totalPendapatan, 0, ',', '.') }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pesanan Diterima</h5>
                <h4 class="fw-semibold text-primary">{{ $pesananDiterima }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-12 mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Transaksi Terbaru</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Pemesan</th>
                                <th>Status</th>
                                <th>Total Harga</th>
                                <th>Waktu Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksiTerbaru as $transaksi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $transaksi->pengguna->nama }}</td>
                                <td>
                                    <span
                                        class="badge bg-{{ $transaksi->status == 'completed' ? 'success' : 'danger' }}">
                                        {{ ucfirst($transaksi->status) }}
                                    </span>
                                </td>
                                <td>Rp{{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
                                <td>{{ $transaksi->updated_at->format('d M Y, H:i') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @else
    <!-- Dashboard untuk User -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Pesanan</h5>
                <h4 class="fw-semibold text-primary">{{ $totalPesanan }}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pesanan Ditolak</h5>
                <h4 class="fw-semibold text-danger">{{ $pesananDitolak }}</h4>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
