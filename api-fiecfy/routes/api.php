<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MusicaController;
use Illuminate\Http\Request;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AlbunsController;
use App\Http\Controllers\ArtistasController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/musicas')->group(function () {
    route::get('/', [MusicaController::class, 'index']);
});

Route::prefix('/playlists')->group(function () {
    route::get('/play', function (Request $request) {
        return response()->json('Alef');
    });
    route::post('/playlis', [PlaylistController::class, "store"]);
    route::delete('/playlists1/{id}', [PlaylistController::class, "destroy"]);
    route::post('/playlists/{id}/songs', [PlaylistController::class, "addSong"]);
});

Route::prefix('/albuns')->group(function () {
    route::post('/', [AlbunsController::class, "store"]);
    route::get('/2', [AlbunsController::class, "index"]);
    route::get('/1', [AlbunsController::class, "index"]);
});

Route::prefix('/artistas')->group(function () {
    route::post('/', [ArtistasController::class, "store"]);
    route::get('/', [ArtistasController::class, "index"]);
});

Route::put('/albums/{id}', [AlbunsController::class, 'update']);

Route::delete('/albums/{id}', [AlbunsController::class, 'destroy']);
