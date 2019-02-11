<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'HomeController@index');
Route::resource('home', 'HomeController');
Route::resource('aluno', 'AlunoController');
Route::resource('professor', 'ProfessorController');
Route::resource('turma', 'TurmaController');
Route::resource('/login', 'LoginController@login');

Auth::routes();

