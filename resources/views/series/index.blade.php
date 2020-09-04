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
    @endforeach 
</ul>
@endsection