<?php

namespace App\Http\Controllers;
use App\Exports\InventarisExport;
use App\Imports\InventarisImport;
use App\Models\Bagian;
use App\Models\Inventaris;
use App\Models\Kategori;
use App\Models\Status;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class InventarisController extends Controller
{
    public function index(Request $request)
    {
        $status = Status::select('id', 'nama_status')->get();
        $bagians = Bagian::select('id', 'nama')->get();
        $kategoris = Kategori::select('id', 'nama')->get();
        $datas = Inventaris::query();
        $users = Inventaris::query()->with('status', 'bagian', 'kategori');
        $count = $users->count();

        $users->when($request->nama_user, function($query) use ($request) {
            return $query->where('nama_user', 'like', '%' . $request->nama_user . '%');
        });
        $users->when($request->status_id, function($query) use ($request) {
            return $query->where('status_id', '=', $request->status_id);
        });
        $users->when($request->kategori_id, function($query) use ($request) {
            return $query->where('kategori_id', '=', $request->kategori_id);
        });

        // filter by bagian 
        $users->when($request->bagian_id, function($query) use ($request) {
            return $query->where('bagian_id', '=', $request->bagian_id);
        });

        return view(
            "inventaris.index", compact("status", 'bagians', 'kategoris', 'count'), ['users' => $users->paginate(10), 'datas' => $datas->paginate(10)],
        );
    }

    public function create(Request $request)
    {
        $bagians = Bagian::select("id", "nama")->get();
        $kategoris = Kategori::select("id", "nama")->get();
        $status = Status::select("id", "nama_status")->get();
        return view(
            "inventaris.tambah",
            compact("bagians", "kategoris", "status")
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama_user" => "required",
            "bagian_id" => "required",
            "kategori_id" => "required",
            "kode" => "required",
            "th_pembelian" => "required",
            "memory" => "required",
            "spec" => "required",
            "merk" => "required",
            "posisi" => "required",
            "size_monitor" => "required",
            "status_id" => "required",
        ]);
        Inventaris::create($request->all());
        return redirect()->route("inventaris.index");
    }

    public function show($id)
    {
        return view("inventaris.detail", [
            "data" => Inventaris::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        $data = Inventaris::findOrFail($id);
        $bagians = Bagian::select("id", "nama", "slug")->get();
        $kategoris = Kategori::select("id", "nama", "slug")->get();
        $status = Status::select("id", "nama_status")->get();
        return view(
            "inventaris.edit",
            compact("data", "bagians", "kategoris", "status")
        );
    }

    public function update(Request $request, $id)
    {
        $data = Inventaris::findOrFail($id);
        $data->update($request->except(["_token"]));

        return redirect("inventaris/detail/" . $id);
    }

    public function destroy($id)
    {
        $data = Inventaris::find($id);
        $data->delete();

        return redirect("/inventaris");
    }

    public function importData()
    {
        return view("inventaris.import");
    }

    public function import()
    {
        Excel::import(new InventarisImport(), request()->file("file"));

        return redirect("/inventaris");
    }

    public function export()
    {
        return Excel::download(new InventarisExport(), "inventaris.xlsx");
    }

    // public function filter(Request $request)
    // {
    //     $datas = Inventaris::query();
    //     $datas->when($request->nama_user, function ($query) use ($request) {
    //         return $query->where(
    //             "nama_user",
    //             "like",
    //             "%" . $request->nama_user . "%"
    //         );
    //     });

    //     return view("inventaris.index", compact("datas"));
    // }

    public function cetakBarcode($id)
    {
        $data = Inventaris::get();
        return view("inventaris.cetak", [
            "data" => Inventaris::findOrFail($id),
        ]);
    }
}
