<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $datas = Inventaris::all();
        $status = Status::all();

        return view("status.index", compact("status", "datas"));
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

    public function show_status($slug)
    {
        $datas = Inventaris::whereHas("status", function ($query) use ($slug) {
            return $query->where("slug", $slug);
        })->get();
        $status = Status::where("slug", $slug)->get();

        return view("status.slug", [
            "datas" => $datas,
            "status" => $status,
            "slug" => $slug,
        ]);
    }
}
