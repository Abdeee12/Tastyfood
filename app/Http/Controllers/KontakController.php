<?php

namespace App\Http\Controllers;

use App\Models\KontakInfo;

class KontakController extends Controller
{
    public function index()
    {
        $kontak = KontakInfo::first();
        return view('kontak', compact('kontak'));
    }
}
