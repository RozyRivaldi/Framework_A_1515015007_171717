<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class RuanganController extends Controller
{
    public function awal(){
        
        return "halo";
    }
    public function tambah(){
        return $this -> simpan();
    }
    public function simpan(){
        $ruangan = new ruangan();
        $ruangan ->title = 'ruangan1';
        $ruangan ->save();
        return "data dengan nama {$ruangan->title} telah disimpan";
    }
}
