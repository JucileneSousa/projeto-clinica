@extends('admin.layouts.sistema')

@section('title','| Editar Prontuário')

@section('content')

    <h1>Editando Prontuário do Paciente</h1>
    <h2>{{$paciente->nome}}</h2>
    <a class="btn btn-info" href="{{ route('pacientes.index') }}" role="button">Voltar</a>
    <hr>

    <form action="{{ route('prontuarios.update', $paciente->id) }}" method="POST">
        @method('PUT')
        @include('admin.pages.prontuarios._partials.form')
    </form>
    
@endsection