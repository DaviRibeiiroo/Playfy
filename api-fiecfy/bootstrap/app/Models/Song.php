<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable = ["artistas_id", "title", "release_year", "cover_image"];
    public function album(){
        $this->belongsTo(Albuns::class);
    }

    public function playlists(){
        return $this->belongsToMany(Playlist::class);
    }
}
