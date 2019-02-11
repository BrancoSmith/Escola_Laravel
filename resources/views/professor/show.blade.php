@extends('layouts.app')
@section('content')

<div class="panel panel-success">

    <div class="panel-heading">
        <h1>Professor {{$professor->nome}}</h1>
    </div>
    <div class="panel-body"><strong> Nº de Matricula: {{$professor->id}}</strong></div>
    <div class="panel-body"><strong>Data: {{$professor->DataNascimento}}</strong></div>
    <div class="panel-body"><strong>Telefone: {{$professor->telefone}}</strong></div>


    <div class="panel-heading">
        <h1>Turmas matriculadas</h1>
    </div>
    
    @foreach($professor->turma()->get() as $turma)

    <a href="{{ route('turma.show', $turma->id)}}" class="list-group-item"><strong>{{$turma->Turma}}</strong></a>

    @endforeach



</div>
<a class="btn btn-warning btn-sm btn-block " href="{{ route('professor.edit', $professor)}}">Editar</a>
<a class="btn btn-primary  btn-sm btn-block" href="{{ route('professor.index')}}">Voltar</a>


@endsection