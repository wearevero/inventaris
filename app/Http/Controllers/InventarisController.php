<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InventarisExport;
use App\Imports\InventarisImport;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{

    public function index()
    {
        $datas = Inventaris::get();
        return view('inventaris.index', compact('datas'));
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

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $datas = DB::table('inventaris')->where('nama_user', 'like', "%".$cari."%")->paginate();
        return view('inventaris.index', ['datas' => $datas]);
    }
}
