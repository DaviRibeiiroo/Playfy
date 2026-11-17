<?php

namespace App\Http\Controllers;

use App\Models\Artistas;
use Illuminate\Http\Request;

class ArtistasController extends Controller
{

    //Método index: Devolve a coleção inteira
    public function store(Request $request)
    {
        // O eloquente pega os dados, monta o SQL e salva no banco sozinho
        $novoArtista = Artistas::create($request->all());
        return response()->json($novoArtista, 201);
    }

    // Método show: devolve um item buscado por ID  
    public function index()
    {
        // Equivalente a "select * FROM artists;"
        $artistas = Artistas::all();
        return response()->json($artistas, 200);
    }

    public function show($id)
    {
        // Carrega o artista com a lista de álbuns aninhada no JSON!
        $artista = Artistas::with('albums')->findOrFail($id);
        return response()->json($artista);
    }

    public function update(Request $request, int $id)
    {
        $artista = Artistas::findORFail($id);

        // Aplica os dados novos por cima dos antigos e salva
        $artista->update($request->all());
        return response()->json($artista, 200);
    }

    public function destroy(int $id)
    {
        $artista = Artistas::findOrFail($id);

        // executa DELETE FROM artists WHERE id = ?
        $artista->delete();

        return response()->json(["mensagem" => "apagado com sucesso"], 200);
    }
}
