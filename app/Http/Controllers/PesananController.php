<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\DetailPesanan;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanans = Pesanan::all();
        return view('dashboard.admin.pesanan-all', compact('pesanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // Memproses pesanan
    public function storePesanan(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        // Validasi stok
        if ($produk->stok < 1) {
            return redirect()->back()->with('error', 'Stok produk habis.');
        }

        // Buat pesanan baru
        $pesanan = Pesanan::create([
            'user_id' => auth()->id(),
            'total_harga' => $produk->harga,
            'status' => 'pending',
        ]);

        // Tambahkan detail pesanan
        DetailPesanan::create([
            'pesanan_id' => $pesanan->id,
            'produk_id' => $produk->id,
            'kuantitas' => 1,
            'harga' => $produk->harga,
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil dibuat! Menunggu konfirmasi admin.');
    }

    // Menerima pesanan (Admin)
    public function terimaPesanan(Request $request, $id)
    {
        $pesanan = Pesanan::findOrFail($id);

        // Update status pesanan
        $pesanan->update(['status' => 'completed']);

        // Kurangi stok produk
        foreach ($pesanan->detailPesanan as $detail) {
            $produk = $detail->produk;
            $produk->stok -= $detail->kuantitas;
            $produk->save();
        }

        return redirect()->route('pesanan.index')->with('success', 'Pesanan telah diterima dan stok diperbarui.');
    }

    public function checkoutPesanan()
    {
        $produks = Produk::all(); // Mengambil semua produk
        return view('dashboard.user.produk-user', compact('produks')); // Menampilkan view
    }
}