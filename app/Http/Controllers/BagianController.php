<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Database\Seeders\BagianSeeder;
use Illuminate\Http\Request;

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
            'nama_bagian' => 'required'
        ]);
    
        Bagian::create($request->all());
        return redirect()->route('bagian.index')->with('success', 'Berhasil menambahkan bagian!');
    }

    public function show($id)
    {
        //
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
}
