<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
    public function awal(){
        return "hello dari DosenController";
    }
    public function tambah(){
        return $this -> simpan();
    }
    public function simpan(){
        $dosen = new dosen();
        $dosen->nama  = 'bu tung';
        $dosen->nip = '1010174772';
        $dosen->alamat = 'dimana dia senang';
        $dosen->pengguna_id = '10';
        $dosen->save();
        return "data dengan nama {$dosen->nama} telah disimpan";
    }
}
