<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InventarisExport;
use App\Imports\InventarisImport;
use App\Models\Bagian;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{

    public function index()
    {
        $datas = Inventaris::paginate(10);
        $jumlah = Inventaris::count();
        return view('inventaris.index', compact('datas', 'jumlah'));
    }

    public function create(Request $request)
    {
        $bagians = Bagian::get();
        $kategoris = Kategori::all();
        return view('inventaris.tambah', compact('bagians', 'kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_user' => 'required',
            'bagian_id' => 'required',
            'th_pembelian' => 'required',
            'kode' => 'required',
            'memory' => 'required',
            'cpu' => 'required',
            'merk' => 'required',
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
        $bagians = Bagian::all();
        $kategoris = Kategori::all();
        return view('inventaris.edit', compact('data', 'bagians', 'kategoris'));
    }


    public function update(Request $request, $id)
    {
        $data = Inventaris::findOrFail($id);
        $data->update($request->except(['_token']));
        return redirect('inventaris');
    }

    public function destroy($id)
    {
        $data = Inventaris::find($id);
        $data->delete();
        return redirect('/inventaris');
    }

    public function importData()
    {
        return view('inventaris.import');
    }

    public function import()
    {
        Excel::import(new InventarisImport, request()->file('file'));
        return redirect('/inventaris');
    }


    //  fungsi unutk meng-eksport data ke dalam file excel (template)
    public function export()
    {
        return Excel::download(new InventarisExport, 'inventaris.xlsx');
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $datas = Inventaris::where('nama_user', 'like', '%' . $keyword . '%')->orWhere('kode', 'like', '%' . $keyword . '%')->paginate(100);
        return view('inventaris.index', compact('datas'));
    }
}
