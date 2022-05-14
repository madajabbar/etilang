<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function struktur(){
        return $this->belongsTo(Struktur::class);
    }
    public function gambar(){
        return $this->morphMany(Gambar::class, 'gambars');
    }

}
