<?php

namespace App\Http\Controllers;

use App\Turma;
use Illuminate\Http\Request;
use App\Professor;
use App\Aluno;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
    public function index()
    {
        $turma = Turma::all();
        return view('turma.index', ['turmas' => $turma]);
        
    
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professors = Professor::get();
        return view('turma.create', compact('professors'));
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
            'Ano' => 'bail|required|max:255',
            'Turma' => 'bail|required',
            ]);
        $turma = Turma::create($request->all());
        $turma->professor()->sync($request->professor);
        return redirect('turma');
        //dd($turma->professor());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {
       
        return view('turma.show', ['turma' => $turma]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(turma $turma)
    {
        $professors = Professor::get()->pluck('nome', 'id')->sortBy('nome');
        $alunos = Aluno::get()->pluck('nome', 'id')->sortBy('nome');
        return view('turma.edit', compact('turma', 'professors', 'alunos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, turma $turma)
    {
        $this->validate($request, [
            'Ano' => 'bail|required|max:255',
            'Turma' => 'bail|required',
            ]);

        $turma->update($request->all());
        $turma->professor()->sync($request->professor);
        $turma->aluno()->sync($request->aluno);
        return view('turma.show', ['turma' => $turma]);
            
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy(turma $turma)
    {
        //
    }
}
