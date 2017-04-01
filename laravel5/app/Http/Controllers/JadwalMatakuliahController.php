<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwalmatakuliah;

class JadwalMatakuliahController extends Controller
{
    public function awal(){
    
        return "halo";
    }
    public function tambah(){
        return $this -> simpan();
    }
    public function simpan(){
        $jadwalmatakuliah = new jadwalmatakuliah();
        $jadwalmatakuliah ->mahasiswa_id = '2';
        $jadwalmatakuliah ->ruangan_id = '4';
        $jadwalmatakuliah ->dosen_id = '6';
        $jadwalmatakuliah ->save();
        return "data dengan id {$jadwalmatakuliah->id} telah disimpan";
    }
}
