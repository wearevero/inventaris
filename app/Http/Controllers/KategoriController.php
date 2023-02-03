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
            'nama' => 'required',
            'kode' => 'required'
        ]);

        Kategori::create($request->all());
        return redirect()->route('kategori.index')->with('success', 'Berhasil menambahkan kategori');
    }


    public function show($slug)
    {
        // $datas = Kategori::where('slug', $slug)->first();
        // return view('kategori.kategories', compact('datas'));
    }

    public function show_kategori($slug)
    {
        $datas = Inventaris::whereHas('kategori',function ($query) use ($slug) {
            return $query->where('slug', $slug);
        })->get();
        $kategoris = Kategori::where('slug', $slug)->get();

        return view('kategori.kategories', [
            'datas' => $datas,
            'kategoris' => $kategoris
        ]);
    }




    
    public function edit($id)
    {
        
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
        $monitors = Inventaris::where('id_kategori', 1)->get();
        return view('kategori.monitor', compact('monitors'));
    }

    public function notebook()
    {
        $notebooks = Inventaris::where('id_kategori', 2)->get();
        return view('kategori.notebook', compact('notebooks'));
    }
}
