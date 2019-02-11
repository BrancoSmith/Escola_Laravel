@extends('layouts.app')
@section('content')

<div class="panel panel-success">

    <div class="panel-heading">
        <h1>Aluno {{$aluno->nome}}</h1>
    </div>

    <div class="panel-body"><strong> Nº de Matricula: {{$aluno->id}}</strong></div>
    <div class="panel-body"><strong> Data: {{$aluno->DataNascimento}}</strong></div>
    <div class="panel-body"><strong> Telefone: {{$aluno->telefone}}</strong></div>

    <div class="panel-heading">
        <h1>Turmas matriculadas</h1>
    </div>
    @foreach($aluno->turma()->get() as $turma)

    <a href="{{ route('turma.show', $turma->id)}}" class="list-group-item"><strong>{{$turma->Turma}}</strong></a>

    @endforeach
</div>
<a class="btn btn-warning btn-sm btn-block " href="{{ route('aluno.edit', $aluno)}}">Editar</a>
<a class="btn btn-primary  btn-sm btn-block" href="{{ route('aluno.index')}}">Voltar</a>


@endsection