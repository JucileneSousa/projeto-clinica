@extends('admin.layouts.sistema')

@section('title','Editar Registro')

@section('content')

    <h1>Editando Dados do Usuário</h1>
    <h2>{{$user->nome}}</h2>
    <a class="btn btn-info" href="{{ route('users.index') }}" role="button">Voltar</a>
    <hr>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @method('PUT')
        @include('admin.pages.users._partials.form')
    </form>
    
@endsection