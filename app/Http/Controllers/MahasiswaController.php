<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        return "Tabel mahasiswa di sini";
    }
    public function create(){
        return view('form-pendaftaran');
    }
    public function store(Request $request){
        $validdateData= $request ->validate([
            'nim'=>'required|size:8',
            'nama'=>'reqired|min:3|max:50',
            'jenis_kelamin'=>'required|in:p,l',
            'jurusan'=>'required',
            'alamat'=>'',
        ]);
        dump($validdateData);
    }

}
