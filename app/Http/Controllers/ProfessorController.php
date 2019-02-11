<?php

namespace App\Http\Controllers;

use App\Professor;
use App\Turma;
use Illuminate\Http\Request;

class ProfessorController extends Controller
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
        $professor = Professor::all();
        return view('professor.index', ['professors' => $professor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turmas = Turma::get();
        return view('professor.create', compact('turmas'));
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
        
        $professor = Professor::create($request->all());
        $professor->turma()->sync($request->turma);
        return redirect('professor');
        //dd($professor);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(professor $professor)
    { 
        return view('professor.show',['professor' => $professor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit(professor $professor)
    {
        $turmas = Turma::get()->pluck('Turma', 'id')->sortBy('Turma');
        return view('professor.edit', compact('professor','turmas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, professor $professor)
    {
        $this->validate($request, [
            'nome' => 'bail|required|max:255',
            'DataNascimento' => 'bail|required',
            'telefone' => 'bail|required',
            ]);

           
            $professor->update($request->all());
            $professor->turma()->sync($request->turma);
            return view('professor.show', compact('professor'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(professor $professor)
    {
        //
    }
}
