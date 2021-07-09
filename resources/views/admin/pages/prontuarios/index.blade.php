@extends('admin.layouts.sistema')

@section('title','| Lista de Pacientes')

@section('content')

<a class="btn btn-info" href="{{ route('home') }}" role="button"> <i class="fa fa-home"></i> Voltar para o Início</a>

<br><br>

<div class="card">
    <div class="card-header">
        <h3 style="float: left;">Lista de Pacientes</h3>
        <a href="{{ route('pacientes.create') }}" class="btn btn-success my-2 my-sm-0" style="float: right;"> <i class="fa fa-user-plus"></i> Adicionar Novo Registro</a>
    </div>
    
    <div class="card-body">
        
    {{-- FORM DE BUSCA --}}
    <form action="{{ route('pacientes.search') }}" method="post" class="form form-inline">
        @csrf
        <input type="text" name="filtro" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" value="{{ $filtros['filtro'] ?? ''}}">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Pesquisar</button>
    </form>

    <br>
    
    {{-- LISTA DE PACIENTES --}}
    <table class="table table-hover table-responsive">
        <thead class="thead-dark">
            <tr>
                <th>Prontuário</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->prontuario }}</td>
                    <td>{{ $paciente->prontuario }}</td>
                    <td>{{ $paciente->nome }}</td>
                    <td>
                        <a href="{{ route('pacientes.show', $paciente->id)}}" class="btn btn-info" role="button"> <i class="fa fa-plus"></i> Informações</a>
                        <a href="#" class="btn btn-outline-info" role="button"> <i class="fa fa-file-text"></i> Questionário</a>
                        <a href="#" class="btn btn-outline-info" role="button"> <i class="fa fa-clipboard"></i> Prontuário</a>
                        <a href="#" class="btn btn-outline-info" role="button"> <i class="fa fa-comment"></i> Assessor</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if (isset($filtros))
        {!! $pacientes->appends($filtros)->links() !!}
    @else
        {!! $pacientes->links() !!}
    @endif

    </div>
</div>
    
@endsection