<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Database\Seeders\BagianSeeder;
use Illuminate\Http\Request;

class BagianController extends Controller
{

    public function index()
    {
        // $bagians = Bagian::select('nama_bagian')->get();
        return view('welcome');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
