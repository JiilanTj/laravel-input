<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\IsiDB; // Ganti sesuai nama model Anda

class InputController extends Controller
{
    public function showForm()
    {
        return view('input-form'); // Ganti dengan nama blade view Anda
    }

    public function submitForm(Request $request)
    {
        $nama = $request->input('nama');
        $nomor = $request->input('number');

        IsiDB::create([
            'Nama' => $nama,
            'Nomor' => $nomor
        ]);

        return redirect('/berhasil'); // Ganti dengan halaman berhasil Anda
    }

    public function showBerhasilPage()
    {
        return view('berhasil'); // Ganti dengan nama blade view Anda
    }
}
