@extends('admin.layouts.sistema')

@section('title','| Dados do Paciente')

@section('content')

<a class="btn btn-info" href="{{ route('home') }}" role="button"> <i class="fa fa-home"></i> Voltar para o Início</a>

<a class="btn btn-success" href="{{ route('pacientes.index') }}" role="button"><i class="fa fa-th-list"></i> Lista de Pacientes</a>
<br><br>

<div class="card">
    {{--HEADER--}}
    
    <div class="card-header">
        <h3 style="float: left;"><i class="fa fa-user"></i> {{$paciente->nome}} | {{$paciente->idade}} anos</h3>
        <div style="float: right;">
            <a href="{{ route('pacientes.edit', $paciente->id) }}" class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Editar Dados</a>
            <span>|</span>
            <a href="{{ route('prontuarios.show', $paciente->id)}}" class="btn btn-primary" role="button"  target="_blank" > <i class="fa fa-clipboard"></i> Prontuário</a>
            <a href="#" class="btn btn-primary" role="button" target="_blank" > <i class="fa fa-comment"></i> Assessor</a>
            <a href="#" class="btn btn-primary" role="button"> <i class="fa fa-id-card"></i> Hist. de Visitas</a>
        </div>
    </div>

<div class="card-body">

    <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" id="deletar">
        @csrf
        @method('DELETE')

        <fieldset disabled>
          @include('admin.pages.pacientes._partials.form')
        </fieldset>

        <div class="alert alert-danger text-center" role="alert">
            <h3><i class="fa fa-exclamation-triangle"></i> ATENÇÃO</h3>
            <h6>
                Deseja deletar todos os registros relacionados ao Paciente <b>{{$paciente->nome}}<b>?
            </h6>
            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i> Deletar Paciente</button>
        </div>
    </form>

</div>
</div>
    
@endsection