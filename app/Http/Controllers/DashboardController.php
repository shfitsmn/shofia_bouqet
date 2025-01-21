<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            // Data untuk admin
            $totalPendapatan = Pesanan::where('status', 'completed')->sum('total_harga'); // Total pendapatan dari pesanan completed
            $transaksiTerbaru = Pesanan::whereIn('status', ['completed', 'cancelled'])->orderBy('updated_at', 'desc')->take(5)->get(); // Transaksi terbaru (completed/cancelled)
            $pesananDiterima = Pesanan::where('status', 'completed')->count(); // Jumlah pesanan diterima

            return view('dashboard.index', compact('totalPendapatan', 'transaksiTerbaru', 'pesananDiterima'));
        } else {
            // Data untuk user
            $userId = auth()->id();
            $totalPesanan = Pesanan::where('user_id', $userId)->count(); // Total pesanan yang dipesan user
            $pesananDitolak = Pesanan::where('user_id', $userId)->where('status', 'cancelled')->count(); // Total pesanan ditolak admin

            return view('dashboard.index', compact('totalPesanan', 'pesananDitolak'));
        }
    }

}