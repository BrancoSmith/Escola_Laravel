@extends('layouts.app')
@section('content')


<div class="panel panel-success">
    <div class='panel-heading '>
        <h1>Turmas</h1> <a href="{{ route('turma.create')}}" class="btn btn-success  btn-sm">
            Cadastrar
        </a>
    </div>
</div>


<div class="w3-container">
    <div class="w3-card-4" style="width:100%">
        <div class="w3-container w3-center">
            <table class="table table-striped"> <br>

                @foreach($turmas as $turma)
                <div class="nav nav-pills nav-stacked">
                    <a href="{{ route('turma.show', $turma)}}"
                        class="list-group-item"><strong>{{ $turma->Turma}}</strong></a>
                </div>
                @endforeach

                s
        </div>
    </div>
</div><br>



</table>

@endsection