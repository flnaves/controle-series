@extends('layout')

@section('cabecalho')
Lista de Séries
@endsection

@section('conteudo')
<div class="alert alert-sucess">
    {{$mensagem}}
</div>
<a href="series/criar" class="btn btn-dark mb-2">Adicionar</a>
<ul class="list-group">
    @foreach ($series as $serie)
    <li class="list-group-item">{{$serie->nome}}</li>
    <form method="post" action="series/{{$serie->id}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Excluir {{$serie->id}}</button>
    </form>
    @endforeach 
</ul>
@endsection