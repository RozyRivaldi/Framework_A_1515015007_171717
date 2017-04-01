<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswaa;

class MahasiswaaController extends Controller
{
     public function awal(){
        
    }
    public function tambah(){
        return $this -> simpan();
    }
    public function simpan(){
        $mahasiswaa = new mahasiswaa();
        $mahasiswaa->nama  = 'rozy';
        $mahasiswaa->nim = '1515015007';
        $mahasiswaa->alamat = 'di atas tanah';
        $mahasiswaa->pengguna_id = '19';
        $mahasiswaa->save();
        return "data dengan nama {$mahasiswaa->nama} telah disimpan";
    }
}
