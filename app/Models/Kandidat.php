<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    use HasFactory;

    protected $table = 'kandidat';

    public function nama_calon_ketua(){
        return $this->belongsTo('App\Models\Mahasiswa','calon_ketua','id');
    }

    public function nama_calon_wakil(){
        return $this->belongsTo('App\Models\Mahasiswa','calon_wakil','id');
    }

}
