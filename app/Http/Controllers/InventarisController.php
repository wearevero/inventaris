<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{

    public function index()
    {
        $data = Inventaris::get();
        return view('inventaris.index', compact('data'));
    }

    public function create(Request $request)
    {
        return view('inventaris.tambah');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_user' => 'required',
            'nama_bagian' => 'required',
            'th_pembelian' => 'required',
            'kode' => 'required',
            'ram' => 'required',
            'cpu' => 'required',
            'merk' => 'required'
        ]);

        Inventaris::create($request->all());
        return redirect()->route('inventaris.index')->with('success', 'Data berhasil ditambah!');
    }


    public function show($id)
    {
        return view('inventaris.detail', [
            'data' => Inventaris::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $data = Inventaris::findOrFail($id);
        return view('inventaris.edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $data = Inventaris::find($id);
        $data->delete();
        return redirect('/inventaris');
    }
}
