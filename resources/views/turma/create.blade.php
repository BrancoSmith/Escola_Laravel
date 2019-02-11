@extends('layouts.app')
@section('content')

<form action='{{ route('turma.store')}}' method='post'>
    {{ csrf_field() }}

    <div class="panel panel-success btn-block">
        <div class="panel-heading">
            <h1>Cadastro de De Turma</h1>
        </div>
    </div>

    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>


                    <div class="form-group ">
                        <lable for='Turma'><strong>Turma</strong> </label>
                            <input type='text' class="form-control" id="Turma" name='Turma'>
                    </div>

                    <div class="form-group ">
                        <lable for='Ano'><strong>Ano</strong></label>
                            <input type='text' name='Ano' class="form-control" id="cpf">
                    </div>

            </div>
            @foreach($professors as $professor)
            <input type='checkbox' name='professor[]' value='{{ $professor->id }}'>{{$professor->nome}}<br>
            @endforeach
        </div>



        <button type="submit" class="btn  btn-success btn-block ">Cadastrar</button>
        <a type="submit" class="btn btn-primary btn-block" href="{{ route('turma.index')}}">Voltar</a>
</form><br>
</div>
</div>
</div>


@endsection