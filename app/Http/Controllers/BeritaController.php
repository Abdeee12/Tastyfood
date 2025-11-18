<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritaUtama = Berita::latest()->first();
        $beritaLainnya = Berita::latest()->skip(1)->take(6)->get();
        return view('berita', compact('beritaUtama', 'beritaLainnya'));
    }

    public function show(Berita $berita)
    {
        return view('berita-detail', compact('berita'));
    }
}
