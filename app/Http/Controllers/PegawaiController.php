<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\PegawaiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
   

    public function index()
    {
        $pegawai = PegawaiModel::all();
        return view('Pegawai.index')->with('pegawai', $pegawai);
    }
    
    public function create()
    {
        return view('Pegawai.create');
    }

    public function store(Request $request)
    {
        PegawaiModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat
        ]);
        return redirect()->route('pegawai.index')->with('success', 'Tambah Data Success');
    }


    public function edit($id)
    {
        $pegawai = PegawaiModel::whereId($id)->first();
        return view('Pegawai.edit')->with('pegawai', $pegawai);
    }



    public function update($id, Request $request)
    {
        $date = Carbon::now();

        PegawaiModel::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'updated_at' => $date
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Update Data Success');
    }
    
    public function delete($id)
    {
        PegawaiModel::whereId($id)->delete();
        return redirect()->back()->with('success', 'Delete Data Success');
    }
}
