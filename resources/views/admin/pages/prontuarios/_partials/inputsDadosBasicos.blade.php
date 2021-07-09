
  {{-- CARD DADOS BÁSICOS--}}
  <div class="card text-white bg-primary">

    <div class="card-header">

      <div class="form-row">
        <div class="col-md-8">
          <h3><i class="fa fa-user"></i> Dados Do Paciente</h3>
        </div>
    
      <div class="col-md-4">
        <label class="sr-only" for="inlineFormInputGroup">Prontuário</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><b>Prontuário</b></div>
          </div>
          <input type="text" name="prontuario" class="form-control col-md-5 text-center" id="inlineFormInputGroup" placeholder="Nº Prontuário" value="{{ $paciente->prontuario ?? old('prontuario') }}" disabled>
        </div>
      </div>
    
    </div>

    </div>

    <div class="card-body">
    
    {{--DADOS BÁSICOS--}}
    <fieldset disabled>
    <div class="form-row">
        <div class="col-md-6">
        <label for="inputNome"><b>Nome</b></label>
        <input type="text" class="form-control" id="inputNome" name="nome" value="{{ $paciente->nome ?? old('nome') }}">
        </div>
        <div class="form-group col-md-1">
          <label for="inputIdade"><b>Idade</b></label>
          <input type="text" class="form-control text-center" id="inputIdade" name="idade" value="{{ $paciente->idade ?? old('idade') }}">
        </div>
        <div class="form-group col-md-2">
          <label for="inputNasc"><b>Data de Nascimento</b></label>
          <input type="text" class="form-control text-center" id="inputNasc" placeholder="00/00/0000" value="{{ $paciente->dataNasc ?? old('dataNasc') }}">
        </div>
        <div class="form-group col-md-2">
          <label for="inputCPF"><b>CPF</b></label>
          <input type="text" class="form-control text-center" id="inputCPF" placeholder="000.000.000-00" value="{{ $paciente->cpf ?? old('cpf') }}">
        </div>
        <div class="form-group col-md-1">
          <label for="inputRG"><b>RG</b></label>
          <input type="text" class="form-control text-center" id="inputRG" placeholder="00000" value="{{ $paciente->rg ?? old('rg') }}">
        </div>
    </div>
    
    {{--CONTATO--}}
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="inputTel1"><b>Telefone Principal</b></label>
            <input type="text" class="form-control text-center" id="inputTel1" placeholder="(00) 9 0000-0000" value="{{ $paciente->tel1 ?? old('tel1') }}">
        </div>
        <div class="form-group col-md-2">
            <label for="inputTel2"><b>Telefone Recado</b></label>
            <input type="text" class="form-control text-center" id="inputTel2" placeholder="(00) 9 0000-0000" value="{{ $paciente->tel2 ?? old('tel2') }}">
        </div>
        <div class="form-group col-md-8">
            <label for="inputEmail"><b>E-mail</b></label>
            <input type="text" class="form-control" id="inputEmail" placeholder="exemplo@dominio.com" value="{{ $paciente->email ?? old('email') }}">
        </div>
    </div>
    </fieldset>
    
    </div>
    
    </div>
    {{-- FIM CARD DADOS BÁSICOS --}}
    <hr>