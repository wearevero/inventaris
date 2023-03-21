<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $data = User::get();

        return view("dashboard", compact("data"));
    }
}
