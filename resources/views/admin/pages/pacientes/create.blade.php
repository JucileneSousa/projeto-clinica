@extends('admin.layouts.sistema')

@section('title','| Novo Paciente')

@section('content')

<a class="btn btn-info" href="{{ route('home') }}" role="button"> <i class="fa fa-home"></i> Voltar para o Início</a>

<br><br>

<div class="card">
    <div class="card-header">
        <h3 style="float: left;">Novo Paciente</h3>
        <div style="float: right;">
            <a href="{{ route('pacientes.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
            <a class="btn btn-success" href="{{ route('pacientes.store') }}"
                onclick="event.preventDefault();
                document.getElementById('cadastro').submit();"><i class="fa fa-check"></i> {{ __('Salvar') }}
            </a>
            <a href="#" class="btn btn-secondary"><i class="fa fa-print"></i> Imprimir</a>
        </div>
    </div>

    <div class="card-body">
    
    <form action="{{ route('pacientes.store') }}" method="POST" id="cadastro">
        @include('admin.includes.alerts')
        @csrf
        @include('admin.pages.pacientes._partials.form')

        {{--BOTÕES--}}
        <br>
        <div class="card bg-light text-center">
        <div class="card-body">
            <a href="{{ route('pacientes.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
            <a href="#" class="btn btn-secondary"><i class="fa fa-print"></i> Imprimir</a>
        </div>
        </div>
    </form>

    </div>
</div>
    
@endsection