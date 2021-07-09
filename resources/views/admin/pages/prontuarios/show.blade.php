@extends('admin.layouts.sistema')

@section('title','| Prontuário')

@section('content')

<a class="btn btn-info" href="{{ route('home') }}" role="button"> <i class="fa fa-home"></i> Voltar para o Início</a>
<br><br>

<div class="card">
    <div class="card-header">
        <h3 style="float: left;">Prontuário</h3>
        <div style="float: right;">
          <a href="{{ route('prontuarios.edit', $paciente->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Editar Prontuário</a>
        </div>
    </div>
    <div class="card-body">

      @include('admin.pages.prontuarios._partials.inputsDadosBasicos')
      @include('admin.pages.prontuarios._partials.form')

    </div>
</div>

@endsection