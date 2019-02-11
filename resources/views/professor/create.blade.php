@extends('layouts.app')
@section('content')

<form action='{{ route('professor.store')}}' method='post'>
    {{ csrf_field() }}


    <div class="panel panel-success btn-block">
        <div class="panel-heading">
            <h1>Cadastro de De professor</h1>
        </div>
    </div>

    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>


                    <div class="form-group ">
                        <lable for='nome'><strong>Nome</strong> </label>
                            <input type='text' class="form-control" id="nome" name='nome'>
                    </div>

                    <div class="form-group ">
                        <lable for='DataNascimento'><strong>Data de nascimento</strong></label>
                            <input type='text' name='DataNascimento' class="form-control" id="cpf">
                    </div>

                    <div class="form-group ">
                        <lable for='telefone'><strong>Telefone</strong></label>
                            <input type='text' name='telefone' class="form-control" id="telefone">
                    </div>


            </div>
            @foreach($turmas as $turma)
            <input type='checkbox' name='turma[]' value='{{ $turma->id }}'>{{$turma->Turma}}<br>
            @endforeach
        </div>

        <button type="submit" class="btn  btn-success btn-block ">Cadastrar</button>
        <a type="submit" class="btn btn-primary btn-block" href="{{ route('professor.index')}}">Voltar</a>
</form><br>
</div>
</div>
</div>


@endsection