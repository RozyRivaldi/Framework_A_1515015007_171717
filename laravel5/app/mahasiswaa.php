<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswaa extends Model
{
     protected $table = 'mahasiswaa';
    
    
    public function pengguna(){
          	return  $this->belongsTo(Pengguna::class);
    }
    public function jadwal_mahasiswa(){
   			return $this-hasMany(JadwalMahasiswa::class);
	
	}
}