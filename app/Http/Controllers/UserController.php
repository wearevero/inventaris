<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('user.index', compact('users'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'data-users.xlsx');
    }

    public function import()
    {
        Excel::import(new UsersImport, request()->file('file'));

        return back();
    }
}
