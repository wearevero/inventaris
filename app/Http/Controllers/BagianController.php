<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use Database\Seeders\BagianSeeder;
use Illuminate\Http\Request;

class BagianController extends Controller
{

    public function index()
    {
        return redirect(route('inventaris.index'));
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
