<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemesananTiket;

class PemesananTiketController extends Controller
{
    public function create()
    {
        return view('pemesanan.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'jumlah_tiket' => 'required|integer|min:1',
        ]);

        // Simpan data pemesanan tiket
        $pemesananTiket = new PemesananTiket;
        $pemesananTiket->nama = $request->nama;
        $pemesananTiket->email = $request->email;
        $pemesananTiket->jumlah_tiket = $request->jumlah_tiket;
        $pemesananTiket->save();

        return redirect()->route('pemesanan.success')->with('success', 'Pemesanan tiket berhasil');
    }

    public function success()
    {
        return view('pemesanan.success');
    }

    public function createSampleData()
    {   
    $pemesananTiket = new PemesananTiket;
    $pemesananTiket->nama = 'baruna';
    $pemesananTiket->email = 'barunangurah51@gmail.com';
    $pemesananTiket->jumlah_tiket = 1;
    $pemesananTiket->save();

    return 'Data contoh berhasil ditambahkan.';
    }

}
