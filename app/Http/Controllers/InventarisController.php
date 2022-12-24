<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
