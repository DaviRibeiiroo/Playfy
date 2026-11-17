<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\StringMatchesFormatDescription;
use App\Http\Controllers\ArtistasController;

// Criando uma Classe
class FaixaMusical {
    // Propriedades Tipadas
    public string $titulo;
    public string $artista;

    //metodo constructor (roda quando chamado o 'new')
    public function __construct(string $tituloDesejado, string $artistaDesejado){
        $this->titulo = $tituloDesejado;
        $this->artista = $artistaDesejado;
    }

    //Ação do objeto
    public function getDetalhes():string {
        //Usando ponto ( . ) para concatenar
        return $this->titulo . " - " . $this->artista;
    }
}

class Artista {
    public string $nome;
    public string $estilo;
    public int $ouvintesMensais;
    public int $vendas;

    public function __construct(string $nomeDesejado, string $estiloDesejado, int $ouvintes = 10000, string $vendasTotal){
        $this->nome = $nomeDesejado;
        $this->estilo = $estiloDesejado;
        $this->ouvintesMensais = $ouvintes;
        $this->vendas = $vendasTotal;
    }

    public function isFamoso(){
        return $this->ouvintesMensais > 1000000;
    }

    public function typeError(int $varia){
        return;
    }
}

Route::get('/ex5', function(){
    $playlist = ['nome' => 'Alef', 'criador' => 'Alef', 'musicas' => 34];
    return response()->json($playlist);
});

// Route::get('/ex6', function(){
//     $venda = new Artista('Alef o Grande que quer ser pequeno', 'All Black', '50000000', 'fada');
//     return response()->json($venda->typeError("string"));
// });

Route::get('/ex4', function (){
    $artista = new Artista('Alef o Grande que quer ser pequeno', 'All Black', '50000000','');
    $variavel = $artista->isFamoso();
    return response()->json($variavel);
});

Route::get('/ex3', function (){
    $artista = new Artista('Alef o Grande que quer ser pequeno', 'All Black','','');
    return response()->json($artista);
});

// criando um endpoint para o objeto
Route::get('/minha-musica', function (){
    //instanciando o objeto
    $musica1 = new FaixaMusical('Bohemian Rhapsody', 'Queen');

    return response()->json($musica1);
});

Route::get('/teste', function (){
    return [
        'sistema' => 'API Clone do Spotify',
        'versão' => '1.0',
        'status' => 'Conectado'
    ];
});

Route::get('/artistas', [ArtistasController::class, 'index']
);