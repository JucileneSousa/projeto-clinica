@extends('admin.layouts.sistema')

@section('title','Bem Vindo')

@section('content')
    
    <a class="btn btn-info" href="{{ route('pacientes.index') }}" role="button">Voltar</a>
    <hr>
    
    <div class="row">

    <div class="col-sm-3">
    <div class="card" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Novo Paciente</h5>
          <p class="card-text">Preencha o questionário de um novo paciente.</p>
          <a href="{{ route('pacientes.create') }}" class="btn btn-primary btn-block">Visitar</a>
        </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="card" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Agenda</h5>
          <p class="card-text">Insira novos agendamentos, consulte a agenda.</p>
          <a href="#" class="btn btn-primary btn-block">Visitar</a>
        </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="card" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Usuários</h5>
          <p class="card-text">Adicionar e Gerenciar os usuários do sistema.</p>
          <a href="#" class="btn btn-primary btn-block">Visitar</a>
        </div>
    </div>
    </div>

    </div>

    <hr>
    
    <h1>Lista de Usuários</h1>

    <br>
    
    {{-- LISTA DE USUARIOS --}}
    <table class="table table-hover table-responsive">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Perfil</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                <td><a href="{{ route('users.show', $user->id)}}" class="btn btn-success" role="button">Mais Informações</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if (isset($filtros))
        {!! $users->appends($filtros)->links() !!}
    @else
        {!! $users->links() !!}
    @endif
    
@endsection