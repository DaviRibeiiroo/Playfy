<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;

class Albuns extends Model
{
    use HasFactory;
    public function songs(){
        return $this->hasMany(Song::class);
    }
    
    public function artist() {
    // Este álbum PERTENCE A um Artista
    return $this->belongsTo(Artistas::class);
}
}

