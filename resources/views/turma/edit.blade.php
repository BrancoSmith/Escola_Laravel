@extends('layouts.app')
@section('content')



<form action='{{ route('turma.update', $turma) }}' method='post' class="form-group">
    {{method_field('patch')}}
    {{ csrf_field() }}

    <div class="panel panel-success btn-block">
        <div class="panel-heading">
            <h1>Editar Dados da turma</h1>
        </div>
    </div>

    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>


                    <div class="form-group ">
                        <lable for='Turma'><strong>Turma</strong> </label>
                            <input type='text' class="form-control" id="Turma" name='Turma' value="{{$turma->Turma}}">
                    </div>

                    <div class="form-group ">
                        <lable for='Ano'><strong>Ano</strong></label>
                            <input type='text' name='Ano' class="form-control" value="{{$turma->Ano}}">
                    </div>

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1>Professors</h1>
                        </div>
                        @foreach($professors as $id => $professor)
                    </div>
                    <label for='{{ $professor }}'>
                        <input type='checkbox' name='professor[]' value='{{ $id }}'>
                        {{$professor}}
                    </label>
            </div><br>
            @endforeach
        </div>
    </div>

    <div class="panel panel-success">
        <div class="panel-heading">
            <h1>alunos</h1>
        </div>
        @foreach($alunos as $id => $aluno)
    </div>
    <label for='{{ $aluno }}'>
        <input type='checkbox' name='aluno[]' value='{{ $id }}'  >
        {{$aluno}}
    </label>
    </div><br>
    @endforeach
    </div>
    </div>



    <button type="submit" class="btn  btn-warning btn-block ">Editar</button>
    <a type="submit" class="btn btn-primary btn-block" href="{{ route('turma.index')}}">Voltar</a>
    </div>
    </div>
    </div>
</form><br>





@endsection