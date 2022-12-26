<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswa = Mahasiswa::latest()->get();
        return view('home', compact('mahasiswa'));
    }

    public function store(Request $request) {
        
        $mhs = new Mahasiswa;
        $mhs->nama = $request->nama;
        $mhs->nim = $request->nim;
        $mhs->prodi = $request->prodi;
        $mhs->alamat = $request->alamat;
        $hashName = time().rand(100,999).".". 
                    $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->move('foto/','mhs-'. $hashName);
        $mhs->foto = 'mhs-'. $hashName;
        $mhs->save();
        
        return redirect()->back();
    }

    public function edit($id)
    {
        $mhs = Mahasiswa::find($id);
        return view ('edit',compact('mhs'));
    }

    public function update(Request $request, $id){

        $mhs = Mahasiswa::find($id);
        $mhs->nama = $request->nama;
        $mhs->nim = $request->nim;
        $mhs->prodi = $request->prodi;
        $mhs->alamat = $request->alamat;
        $hashName = time().rand(100,999).".". 
                    $request->file('foto')->getClientOriginalExtension();
        $request->file('foto')->move('foto/','mhs-'. $hashName);
        $mhs->foto = 'mhs-'. $hashName;
        $mhs->save();
        
        return redirect()->back();
        
    }

    public function delete(){
        
    }
}
