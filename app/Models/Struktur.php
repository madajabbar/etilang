<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function periode(){
        return $this->belongsTo(Periode::class);
    }

    public function kegiatan(){
        return $this->hasMany(Kegiatan::class);
    }

    public function anggota(){
        return $this->hasMany(Anggota::class);
    }
}
