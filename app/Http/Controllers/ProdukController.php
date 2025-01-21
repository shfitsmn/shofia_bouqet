<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('dashboard.admin.produk-all', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.create-produk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'stok' => 'required|integer|min:0',
        'kategori' => 'required|string',
        'harga' => 'required|numeric|min:0',
        'deskripsi' => 'nullable|string',
    ]);

    // Upload gambar
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $path = $file->store('produk', 'public');
    } else {
        return back()->withErrors(['gambar' => 'File gambar tidak terupload']);
    }

    // Debugging path
    if (!$path) {
        return back()->withErrors(['gambar' => 'File gagal disimpan']);
    }

    // Simpan data ke database
    $produk = Produk::create([
        'nama' => $validated['nama'],
        'gambar' => $path,
        'stok' => $validated['stok'],
        'kategori' => $validated['kategori'],
        'harga' => $validated['harga'],
        'deskripsi' => $validated['deskripsi'],
    ]);

    if ($produk) {
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    } else {
        return back()->withErrors(['database' => 'Gagal menyimpan data ke database']);
    }
    } 

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::find($id);
        return view('dashboard.admin.edit-produk', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stok' => 'required|integer|min:0',
            'kategori' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        // Cari data produk berdasarkan ID
        $produk = Produk::findOrFail($id);

        // Update data produk
        $produk->nama = $request->nama;
        $produk->stok = $request->stok;
        $produk->kategori = $request->kategori;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;

        // Jika ada gambar baru yang diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($produk->gambar && file_exists(storage_path('app/public/' . $produk->gambar))) {
                unlink(storage_path('app/public/' . $produk->gambar));
            }

            // Simpan gambar baru
            $file = $request->file('gambar');
            $path = $file->store('produk', 'public'); // Simpan di folder 'storage/app/public/produk'
            $produk->gambar = $path; // Simpan path gambar ke database
        }

        // Simpan perubahan ke database
        $produk->save();

        // Redirect dengan pesan sukses
        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Cari data produk berdasarkan ID
        $produk = Produk::findOrFail($id);

        // Hapus gambar jika ada
        if ($produk->gambar && file_exists(storage_path('app/public/' . $produk->gambar))) {
            unlink(storage_path('app/public/' . $produk->gambar));
        }

        // Hapus data produk
        $produk->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus!');
    }
}