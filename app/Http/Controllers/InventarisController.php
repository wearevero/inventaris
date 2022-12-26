<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
        $data = Inventaris::findOrFail($id);
        return view('inventaris.detail', compact('data'));
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
        $data = Inventaris::findOrFail($id);
        $data->delete();
        return view('inventaris.index', compact('data'));
    }
}
