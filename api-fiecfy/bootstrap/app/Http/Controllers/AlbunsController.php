<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albuns;
use Exception;

class AlbunsController extends Controller
{
    public function store(Request $request)
    {
        $albun2 = Albuns::create($request->all());
        return response()->json($albun2, 200);
    }

    public function index()
    {
        $albuns = Albuns::all();
        return response()->json($albuns, 200);
    }

    public function show($id)
    {
        $album = Albuns::with('songs')->findOrFail($id);
        return response()->json($album, 200);
    }

    public function update(Request $request, $id)
    {
        $album = Albuns::findOrFail($id);
        $album->update($request->all());
        return response()->json($album, 200);
    }

    public function destroy($id)
    {
        $album = Albuns::findOrFail($id);
        $album->delete();
        return response()->json(['mensagem' => 'Apagado com sucesso'], 200);
    }
}
