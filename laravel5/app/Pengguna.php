<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
   protected $table = 'Pengguna';
   protected $fillable =['username','passwoard'];

   public function mahasiswa(){
   	return $this-hasOne(Mahasiswa::class);
}

	public function dosen(){
   	return $this-hasOne(Dosen::class);
}

	public function peran(){
   	return $this-belongsToMany(Peran::class);

   }
}