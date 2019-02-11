@extends('layouts.app')
@section('content')

<div class="panel panel-success">

    <div class="panel-heading">
        <h1>Turma {{$turma->Turma}}</h1>
    </div>

    <div class="panel-body"><strong> Data : {{$turma->Ano}}</strong></div>
</div>

<div class="panel panel-success">
    <div class="panel-heading">
        <h1>Professores das Turma</h1>
    </div>
    @foreach($turma->professor()->get() as $professor)
    <a href="{{ route('professor.show', $professor->id)}}"
        class="list-group-item"><strong>{{$professor->nome}}</strong></a>
    @endforeach
</div>
</div>

<div class="panel panel-success">
    <div class="panel-heading">
        <h1>Alunos das Turma</h1>
    </div>
    @foreach($turma->aluno()->get() as $aluno)
    <a href="{{ route('aluno.show', $aluno->id)}}" class="list-group-item"><strong>{{$aluno->nome}}</strong></a>
    @endforeach
</div>
</div>
<a class="btn btn-warning btn-sm btn-block " href="{{ route('turma.edit', $turma)}}">Editar</a>
<a class="btn btn-primary  btn-sm btn-block" href="{{ route('turma.index')}}">Voltar</a>


@endsection