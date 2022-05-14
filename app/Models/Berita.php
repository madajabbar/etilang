<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
    public function gambar(){
        return $this->morphMany(Gambar::class, 'gambars');
    }
}
