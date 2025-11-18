<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KontakInfo;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function edit()
    {
        $kontak = KontakInfo::first();
        return view('admin.kontak.edit', compact('kontak'));
    }

    public function update(Request $request)
    {
$data = $request->validate([
    'email' => 'required|email',
    'telepon' => 'required',
    'alamat' => 'required',
]);

        $kontak = KontakInfo::first();
        if ($kontak) {
            $kontak->update($data);
        } else {
            KontakInfo::create($data);
        }

        return back()->with('success', 'Kontak berhasil diperbarui');
    }
}
