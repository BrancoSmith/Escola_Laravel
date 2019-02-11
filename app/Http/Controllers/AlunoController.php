<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Turma;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
   
  
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aluno = Aluno::all();
        return view('alunos.index', ['alunos' => $aluno]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'bail|required|max:255',
            'DataNascimento' => 'bail|required',
            ]);
        Aluno::create($request->all());
        return redirect('aluno');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return view('alunos.show', ['aluno' => $aluno]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(aluno $aluno)
    {    $turmas = Turma::get()->pluck('Turma', 'id')->sortBy('Turma');
        return view('alunos.edit', compact('aluno','turmas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aluno $aluno)
    {
        $this->validate($request,  [
            'nome' => 'required|max:100',
            'DataNascimento' => 'bail|required',
            'telefone' =>'required',
    
        ]);

        $aluno->update($request->all());
        $aluno->turma()->sync($request->turma);
        return view('alunos.show', ['aluno' => $aluno]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(aluno $aluno)
    {
        //
    }
}