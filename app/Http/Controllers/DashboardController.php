<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pegawai = PegawaiModel::count();
        return view('admin.index', compact('pegawai'));
    }
   
}
