<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users','UserController')->middleware('auth');

Route::resource('pacientes','PacienteController')->middleware('auth');

Route::any('pacientes/search', 'PacienteController@search')->name('pacientes.search')->middleware('auth');

Route::resource('questionarios','QuestionarioController')->middleware('auth');

Route::resource('prontuarios','ProntuarioController')->middleware('auth');

Route::resource('exames','ExameController')->middleware('auth');

Route::resource('tratamentos','TratamentoController')->middleware('auth');

Route::resource('assessoria','AssessorController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
