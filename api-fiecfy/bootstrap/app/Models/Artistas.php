<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artistas extends Model
{
    use HasFactory;
    // Liberando as colunas que podem ser preenchidas via formulário/JSON
    protected $fillable = ["name", "genre", "profile_pic_url"];
    public function albums() {
    // Este artista TEM MUITOS Álbuns
    return $this->hasMany(Albuns::class);
    }
}
