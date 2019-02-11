@extends('layouts.app')
@section('content')



<form action='{{ route('aluno.update', $aluno) }}' method='post' class="form-group">
    {{method_field('patch')}}
    {{ csrf_field() }}

    <div class="panel panel-success btn-block">
        <div class="panel-heading">
            <h1>Editar Dados do Aluno</h1>
        </div>
    </div>

    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>

                    <div class="form-group ">
                        <lable for='nome'><strong>Nome</strong> </label>
                            <input type='text' class="form-control" id="nome" name='nome' value=" {{$aluno->nome}}">
                    </div>

                    <div class="form-group ">
                        <lable for='DataNascimento'><strong>Data de nascimento</strong></label>
                            <input type='text' name='DataNascimento' class="form-control" id="DataNascimento" value=" {{$aluno->DataNascimento}}">
                    </div>



                    <div class="form-group ">
                        <lable for='telefone'><strong>Telefone</strong></label>
                            <input type='text' name='telefone' class="form-control" id="telefone" value=" {{$aluno->telefone}}">
                    </div>


                    <button type="submit" class="btn  btn-warning btn-block ">Editar</button>
                    <a type="submit" class="btn btn-primary btn-block" href="{{ route('aluno.index')}}">Voltar</a>
            </div>
        </div>
    </div>
</form><br>





@endsection