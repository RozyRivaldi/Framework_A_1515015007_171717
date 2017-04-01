<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class dosenMatakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function dosen(){
    	return $this->belongsTo(Dosen::class);
    }

    public function jadwalMatakuliah(){
    	return $this->hasMany(JadwalMataKuliah::class);
    }
    public function matakuliah(){
    	return $this->belongsTo(MataKuliah::class);
    }
}
