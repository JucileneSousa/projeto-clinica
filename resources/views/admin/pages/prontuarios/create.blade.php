@extends('admin.layouts.sistema')

@section('title','| Prontuário')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 style="float: left;">Cadastrar Prontuário</h3>
    </div>
    <div class="card-body">

      @include('admin.pages.prontuarios._partials.inputsDadosBasicos')
      @include('admin.pages.prontuarios._partials.form')

    </div>
</div>
    
@endsection