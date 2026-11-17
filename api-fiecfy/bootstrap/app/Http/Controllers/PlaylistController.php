<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index(){
        $cacau = [];
        return response()->json($cacau);
    }

    public function store(Request $request){
        $nome = $request->input('nome_playlist');
        $dados = $request->all();
        return response()->json(['recebido' => $dados], 201);
    }

    public function destroy($id){
        return response()->json(['ID' => $id . " Removido"]);
    }

    public function addSong(Request $request, $id){
        $playlist = Playlist::findOrFail($id);
        $playlist->songs()->attach($request->song_id);
    }
    
}
