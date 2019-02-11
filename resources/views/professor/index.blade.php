@extends('layouts.app')
@section('content')


<div class="panel panel-success">
    <div class='panel-heading '>
        <h1>Professors</h1> <a href="{{ route('professor.create')}}" class="btn btn-success  btn-sm">
            Cadastrar
        </a>
    </div>
</div>


<div class="w3-container">
    <div class="w3-card-4" style="width:100%">
        <div class="w3-container w3-center">
            <table class="table table-striped"> <br>

                @foreach($professors as $professor)
                <div class="nav nav-pills nav-stacked">
                    <a href="{{ route('professor.show', $professor)}}"
                        class="list-group-item"><strong>{{ $professor->nome}}</strong></a>
                </div>
                @endforeach


        </div>
    </div>
</div><br>

</table>

@endsection