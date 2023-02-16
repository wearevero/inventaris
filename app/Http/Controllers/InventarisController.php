<?php

namespace App\Http\Controllers;
use App\Models\Inventaris;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InventarisExport;
use App\Imports\InventarisImport;
use App\Models\Bagian;
use App\Models\Kategori;
use App\Models\Status;

class InventarisController extends Controller
{
    public function index()
    {
        $status = Status::get();
        $datas = Inventaris::select(
            "id",
            "nama_user",
            "bagian_id",
            "kode",
            "status_id"
        )
            ->orderBy("id", "desc")
            ->paginate(5);
        return view("inventaris.index", compact("datas", "status"));
    }

    public function create(Request $request)
    {
        $bagians = Bagian::get();
        $kategoris = Kategori::all();
        $status = Status::all();
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
            "cpu" => "required",
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
        $bagians = Bagian::all();
        $kategoris = Kategori::all();
        $status = Status::all();

        return view(
            "inventaris.edit",
            compact("data", "bagians", "kategoris", "status")
        )->with("Success", "Data telah diubah");
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

    public function search(Request $request)
    {
        $keyword = $request->search;
        $datas = Inventaris::where("nama_user", "like", "%" . $keyword . "%")
            ->orWhere("kode", "like", "%" . $keyword . "%")
            ->paginate(100);
        return view("inventaris.index", compact("datas"));
    }
}
