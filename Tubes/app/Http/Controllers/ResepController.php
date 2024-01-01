<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class ResepController extends Controller
{
    public function create()
    {
    return view('resep.create');
    }

    public function store(Request $request)
    {
    // Validasi input
    $validatedData = $request->validate([
        'judul' => 'required|max:255',
        'deskripsi' => 'required',
        'bahan' => 'required',
        'langkah' => 'required',
    ]);

    // Simpan resep ke database
    Resep::create($validatedData);

    return redirect('/resep')->with('success', 'Resep berhasil ditambahkan!');
}
}
