@extends('layout')

@section('cabecalho')
Lista de Séries
@endsection

@section('conteudo')
<div class="alert alert-success">
    {{$mensagem}}
</div>
<a href="series/criar" class="btn btn-dark mb-2">Adicionar</a>
<ul class="list-group">
    @foreach ($series as $serie)
    <li class="list-group-item">{{$serie->nome}}</li>
    <form method="post" action="series/{{$serie->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $serie->nome )}}?')">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Excluir</button>
    </form>
    @endforeach 
</ul>
@endsection