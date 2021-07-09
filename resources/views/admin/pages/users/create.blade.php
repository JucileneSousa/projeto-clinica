@extends('admin.layouts.sistema')

@section('title','Novo Usuário')

@section('content')

    <h1>Novo Usuário</h1>
    
    <form action="{{ route('users.store') }}" method="POST">
        @include('admin.pages.users._partials.form')
    </form>
    
@endsection