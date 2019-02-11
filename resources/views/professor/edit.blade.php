@extends('layouts.app')
@section('content')

<form action='{{ route('professor.update', $professor)}}' method='post'>
    {{method_field('patch')}}
    {{ csrf_field() }}



    <div class="panel panel-success btn-block">
        <div class="panel-heading">
            <h1>Informaçãoes professor</h1>
        </div>
    </div>

    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>


                    <div class="form-group ">
                        <lable for='nome'><strong>Nome</strong> </label>
                            <input type='text' class="form-control" id="nome" name='nome' value="{{$professor->nome}}">
                    </div>

                    <div class="form-group ">
                        <lable for='DataNascimento'><strong>Data de nascimento</strong></label>
                            <input type='text' name='DataNascimento' class="form-control" id="DataNascimento"
                                value="{{$professor->DataNascimento}}">
                    </div>

                    <div class="form-group ">
                        <lable for='telefone'><strong>Telefone</strong></label>
                            <input type='text' name='telefone' class="form-control" id="telefone"
                                value="{{$professor->telefone}}">
                    </div>


                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1>Turmas</h1>
                        </div>
                        @foreach($turmas as $id => $turma)
                    </div>
                    <label for='{{ $turma }}'>
                        <input type='checkbox' name='turma[]' value='{{ $id }}'>
                        {{$turma}}
                    </label>
            </div><br>
            @endforeach
        </div>
    </div>







    <button type="submit" class="btn  btn-success btn-block ">Editar</button>
    <a type="submit" class="btn btn-primary btn-block" href="{{ route('professor.index')}}">Voltar</a>
</form><br>
</div>
</div>
</div>


@endsection