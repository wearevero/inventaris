<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index()
    {
        $kategoris = Kategori::get();
        return view('kategori.index', compact('kategoris'));
    }

    public function create()
    {
        return view('kategori.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required',
            'kode_kategori' => 'required'
        ]);

        Kategori::create($request->all());
        return redirect()->route('kategori.index')->with('success', 'Berhasil menambahkan kategori');
    }


    public function show(Kategori $kategori)
    {
        $dataKategori = $kategori->inventaris()->latest()->paginate(10);
        return view('inventaris.index', compact('dataKategori', 'kategori'));
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }


    // custom function untuk menampilkan barang berdasarkan kategori
    public function monitor()
    {
        $monitors = Inventaris::where('kategori', '=', 'MT')->first();
        return view('kategori.monitor', compact('monitors'));
    }
}
