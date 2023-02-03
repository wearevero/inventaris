<?php

namespace App\Http\Controllers;

use App\Exports\BagianExport;
use App\Imports\BagianImport;
use App\Models\Bagian;
use Database\Seeders\BagianSeeder;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BagianController extends Controller
{

    public function index()
    {
        $bagians = Bagian::get();
        return view('bagian.index', compact('bagians'));
    }

    public function create()
    {
        return view('bagian.tambah');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'slug' => 'required'
        ]);
    
        Bagian::create($request->all());
        return redirect()->route('bagian.index')->with('success', 'Berhasil menambahkan bagian!');
    }

    public function show($id)
    {
        return view('inventaris.detail', [
            'data' => Bagian::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $data = Bagian::findOrFail($id);
        return view('inventaris.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Bagian::findOrFail($id);
        $data->update($request->except(['_token']));
        return redirect('bagian');
    }

    public function destroy($id)
    {
        //
    }

    public function export()
    {
        return Excel::download(new BagianExport, 'master-bagian.xlsx');
    }

    public function import() 
    {
        Excel::import(new BagianImport,request()->file('file'));
        return back();
    }
}
