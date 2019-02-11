@extends('layouts.app')
@section('content')


<div class="panel panel-success">
    <div class='panel-heading '>
        <h1>Alunos</h1> <a href="{{ route('aluno.create')}}" class="btn btn-success  btn-sm">
            Cadastrar
        </a>
    </div>
</div>


<div class="w3-container">
    <div class="w3-card-4" style="width:100%">
        <div class="w3-container w3-center">
            <table class="table table-striped"> <br>

                @foreach($alunos as $aluno)
                <div class="nav nav-pills nav-stacked">
                    <a href="{{ route('aluno.show', $aluno)}}"
                        class="list-group-item"><strong>{{ $aluno->nome}}</strong></a>
                </div>
                @endforeach


        </div>
    </div>
</div><br>




</table>

@endsection