<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use Symfony\Component\VarDumper\Test\VarDumperTestTrait;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');

        return view('series.index', compact('series','mensagem' ));

    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        # UMA FORMA DE GRAVAR UTILIZANDO O REQUEST TODO
        $serie = Serie::Create($request->all());
        $request->session()
        ->flash(
            'mensagem',
            "Série {$serie->id} criada com sucesso {$serie->nome}"
        );

        return redirect()->route('listar_series');
    }

    public function destroy (Request $request) 
    {
        $request->session()
        ->flash(
            'mensagem',
            "Série eliminada com sucesso"
        );
        Serie::destroy($request->id);

        return redirect()->route('listar_series');
    }

}

?>