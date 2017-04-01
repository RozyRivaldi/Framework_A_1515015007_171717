<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwalMatakuliah extends Model
{
     protected $table = 'jadwal_matakuliah';
     protected $fillable = ['mahasiswa_id','ruangan_id','dosen_id'];

     public function mahasiswa(){
    	return $this->belongsTo(Mahasiswa::class);
    }

    public function dosenMatakuliah(){
    	return $this->belongsTo(DosenMataKuliah::class);
    }
    public function ruangan(){
    	return $this->belongsTo(Ruangan::class);
    }
}
