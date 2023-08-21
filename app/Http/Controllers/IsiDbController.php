<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IsiDb;

class IsiDbController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'Nama' => 'required|string',
            'Nomor' => 'required|string',
            // Validasi dan kolom lainnya sesuai kebutuhan
        ]);

        IsiDb::create($data);

        return redirect()->route('berhasil');
    }
}

