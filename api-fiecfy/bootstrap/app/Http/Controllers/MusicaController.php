<?php

namespace App\Http\Controllers;

use App\Models\Song;
use FaixaMusical;
use Illuminate\Auth\RequestGuard;
use Illuminate\Http\Request;
use PHPUnit\Event\NoPreviousThrowableException;

class MusicaController extends Controller
{
    public function index() {
        $song = Song::all();
        return response()->json($song, 200);
    }
    

    public function store(Request $request){
        // recebendo os dados do body da requisição
        $tituloRecebido = $request->input("titulo");
        $artistaRecebido = $request->input("artista");

        return response()->json([
            'sucesso' => true,
            'mensagem' => "A música '${tituloRecebido}' de '${artistaRecebido}' foi salva!",
            'dados_recebidos' => $request->all(),
        ], 201);

    }
}

// public function index(){
//     return response()->json([
//         'sucesso' => true,
//         'mensagem' => "Listagem de todas as músicas simulado com sucesso"
//     ]);
// }

// verbo http associado: POST
// recebe a request injetada pelo Postman
// public function store(Request $request){
//     extrair as chaves que chegam no corpo (JSON) da requisição
//     $tituloRecebido = $request->input('titulo');
//     $artistaRecebido = $request->input('artista');

//     return response()->json([
//         'sucesso' => true,
//         'mensagem' => "A música '${tituloRecebido}' de '${artistaRecebido}' foi salva",
//         'dados_recebidos' => $request->all() // mostra tudo que chegou
//     ], 201);
// }