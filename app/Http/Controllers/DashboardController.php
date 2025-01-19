<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function userCreate(){
        return view('dashboard.admin.create-produk');
    }
    public function userAll(){
        return view('dashboard.admin.user-all');
    }
}