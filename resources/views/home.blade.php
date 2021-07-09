@extends('admin.layouts.sistema')

@section('title','Página Inicial')

@section('content')
<h1>Seja Bem Vindo(a)</h1>
<br>

<div class="row">

<div class="col-sm-6">
<div class="card">
    <h5 class="card-header">Agendamentos</h5>
    <div class="card-body">

    <div class="alert alert-primary" role="alert">
      <i class="fa fa-calendar" style="font-size: 90px;"></i>
      <h1 class="text-right" style="font-size: 90px; margin-top: -120px">0</h1>
      <p class="card-text text-right" style="margin-top: -20px">Agendamentos para hoje</p>
    </div>

    <div class="alert alert-success" role="alert">
      <i class="fa fa-check" style="font-size: 90px;"></i>
      <h1 class="text-right" style="font-size: 90px; margin-top: -120px">0</h1>
      <p class="card-text text-right" style="margin-top: -20px">Agendamentos confirmados</p>
    </div>

    <div class="alert alert-danger" role="alert">
      <i class="fa fa-phone" style="font-size: 90px;"></i>
      <h1 class="text-right" style="font-size: 90px; margin-top: -120px">0</h1>
      <p class="card-text text-right" style="margin-top: -20px">Agendamentos para confirmar</p>
    </div>
    
    </div>
</div>
</div>

<div class="col-sm-6">

<div class="card">
    <h5 class="card-header">Pacientes</h5>
    <div class="card-body">
      <a href="{{ route('pacientes.index') }}">
    <div class="alert alert-primary" role="alert">
      <i class="fa fa-users" style="font-size: 90px;"></i>
      <h1 class="text-right" style="font-size: 90px; margin-top: -120px">{{$totalPacientes}}</h1>
      <p class="card-text text-right" style="margin-top: -20px">Pacientes Cadastrados</p>
    </div>
      </a>
    </div>
</div>

   <br> 
<div class="card">
    <h5 class="card-header">Financeiro</h5>
    <div class="card-body">
    <div class="alert alert-success" role="alert">
      <i class="fa fa-bar-chart" style="font-size: 90px;"></i>
      <h1 class="text-right" style="font-size: 90px; margin-top: -120px">0</h1>
      <p class="card-text text-right" style="margin-top: -20px">Saldo Positivo</p>
    </div>
    </div>
</div>

</div>

</div>

{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de Administração</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado!
                </div>
            </div>
        </div>
    </div>
</div>
--}}
@endsection
