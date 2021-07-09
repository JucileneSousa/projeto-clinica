@extends('admin.layouts.sistema')

@section('title','| Editar Registro')

@section('content')

<a class="btn btn-info" href="{{ route('home') }}" role="button"> <i class="fa fa-home"></i> Voltar para o Início</a>

<br><br>

<div class="card">
    <div class="card-header text-white bg-warning">
        <h3 style="float: left;">Editando Dados do Paciente <i class="fa fa-exclamation-triangle"></i></h3>
        <div style="float: right;">
            <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
            <a class="btn btn-success" href="{{ route('pacientes.update', $paciente->id) }}"
                onclick="event.preventDefault();
                document.getElementById('editar').submit();"><i class="fa fa-check"></i> {{ __('Salvar') }}
            </a>
        </div>
    </div>
    <div class="card-body">
    
    <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST" id="editar">
        @method('PUT')
        @include('admin.includes.alerts')
        @csrf
        @include('admin.pages.pacientes._partials.form')
        {{--BOTÕES--}}
        <br>
        <div class="card bg-light text-center">
        <div class="card-body">
            <a href="{{ route('pacientes.show', $paciente->id) }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
        </div>
        </div>
    </form>

    </div>
</div>

@endsection