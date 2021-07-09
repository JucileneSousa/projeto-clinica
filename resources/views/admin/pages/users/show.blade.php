@extends('admin.layouts.sistema')

@section('title','Dados do Usuário')

@section('content')

    <h1>Dados do Usuário</h1>
    <h2>{{$user->name}}</h2>
    <a class="btn btn-info" href="{{ route('users.index') }}" role="button">Voltar</a>
    <hr>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">Editar os dados</a>
        <button type="submit" class="btn btn-danger">Excluir os dados</button>
    </form>
    
@endsection