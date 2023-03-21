<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Kategori;
use App\Models\Status;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        $status = Status::all();

        return view("kategori.index", compact("kategoris", "status"));
    }

    public function create()
    {
        return view("kategori.tambah");
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "kode" => "required",
        ]);

        Kategori::create($request->all());

        return redirect()
            ->route("kategori.index")
            ->with("success", "Berhasil menambahkan kategori");
    }

    public function show($id)
    {
    }

    public function show_kategori($slug)
    {
        $datas = Inventaris::whereHas("kategori", function ($query) use (
            $slug
        ) {
            return $query->where("slug", $slug);
        })->get();
        $kategoris = Kategori::where("slug", $slug)->get();

        return view("kategori.slug", [
            "datas" => $datas,
            "kategoris" => $kategoris,
            "slug" => $slug,
        ]);
    }

    public function show_kategori_status($status)
    {
        $datas = Inventaris::whereHas("kategori", function ($query) use (
            $status
        ) {
            return $query->where("status", $status);
        })->get();
        $kategoris = Kategori::where("slug", $status)->get();

        return view("kategori.slug", [
            "datas" => $datas,
            "kategoris" => $kategoris,
            "slug" => $status,
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
        $monitors = Inventaris::where("id_kategori", 1)->get();

        return view("kategori.monitor", compact("monitors"));
    }

    public function notebook()
    {
        $notebooks = Inventaris::where("id_kategori", 2)->get();

        return view("kategori.notebook", compact("notebooks"));
    }
}
