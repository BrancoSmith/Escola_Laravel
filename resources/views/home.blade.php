@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Matriculas</div>

                <div class="panel-body">
                  <a  href ="{{ route('professor.index')}}">Professor</a>
                </div>
                <div class="panel-body">
                  <a  href ="{{ route('aluno.index')}}">Aluno</a>
                </div>
                <div class="panel-body">
                  <a  href ="{{ route('turma.index')}}">Turma</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
