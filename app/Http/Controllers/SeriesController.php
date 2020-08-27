<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::All();

        return view('series.index', compact('series'));

    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        # UMA FORMA DE GRAVAR UTILIZANDO O REQUEST TODO
        # $serie = Serie::Create($request->all());
        $nome = $request->nome;
        $serie = Serie::Create([
            'nome' => $nome,
        ]);

        echo "Série com o id { $serie->id } criada:{$serie->nome}";
    }

}

?>