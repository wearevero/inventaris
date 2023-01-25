<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public function inventaris()
    {
        $query = request('query');
        $data = Inventaris::where("nama_user", 'like', "%$query%")->latest()->pagiante(10);
        return view('inventaris.index', compact('data'));
    }
    
}
