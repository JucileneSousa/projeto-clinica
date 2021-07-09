{{--DADOS BÁSICOS--}}
<div class="form-row">

    <div class="col-auto">
        <label class="sr-only" for="inlineFormInputGroup">Nº Prontuário</label>
        <div class="input-group mb-2">
          <div class="input-group-prepend">
            <div class="input-group-text"><b>Nº Prontuário</b></div>
          </div>
          <input type="text" name="prontuario" class="form-control col-md-5 text-center" id="inlineFormInputGroup" placeholder="Nº Prontuário" value="{{ $paciente->prontuario ?? old('prontuario') }}" >
        </div>
    </div>

</div>

<div class="form-row">

    <div class="col-md-6">
      <label for="inputNome">Nome</label>
      <input type="text"  class="form-control" id="inputNome" name="nome" value="{{ $paciente->nome ?? old('nome') }}">
    </div>
    <div class="form-group col-md-1">
      <label for="inputIdade">Idade</label>
      <input type="text" class="form-control text-center" id="inputIdade" name="idade" value="{{ $paciente->idade ?? old('idade') }}">
    </div>
    <div class="form-group col-md-2">
      <label for="inputNasc">Data de Nascimento</label>
      <input type="text" class="form-control text-center" id="inputNasc" name="dataNasc" value="{{ $paciente->dataNasc ?? old('dataNasc') }}" placeholder="00/00/0000">
    </div>
    <div class="form-group col-md-2">
      <label for="inputCPF">CPF</label>
      <input type="text" class="form-control text-center" id="inputCPF" name="cpf" value="{{ $paciente->cpf ?? old('cpf') }}" placeholder="000.000.000-00">
    </div>
    <div class="form-group col-md-1">
      <label for="inputRG">RG</label>
      <input type="text" class="form-control text-center" id="inputRG" name="rg" value="{{ $paciente->rg ?? old('rg') }}" placeholder="00000">
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-4">
      <label for="inputEstadoCivil">Estado Civil</label>
      <select id="inputEstadoCivil" class="form-control" name="estadoCivil" value="{{ $paciente->estadoCivil ?? old('estadoCivil') }}">
        <option selected>Escolher...</option>
        <option>Solteiro</option>
        <option>Casado</option>
        <option>União Estável</option>
        <option>Divorciado</option>
        <option>Separado</option>
        <option>Viúvo</option>
        <option>Outro</option>
      </select>
    </div>
    <div class="form-group col-md-8">
      <label for="inputProfissao">Profissão</label>
      <input type="text" class="form-control" id="inputProfissao" name="profissao" value="{{ $paciente->profissao ?? old('profissao') }}">
    </div>

</div>

{{--CONTATO--}}
<div class="form-row">

    <div class="form-group col-md-2">
        <label for="inputTel1">Telefone Principal</label>
        <div class="input-group-prepend">
        <input type="text" class="form-control text-center" id="inputTel1" name="tel1" value="{{ $paciente->tel1 ?? old('tel1') }}" placeholder="(00) 9 0000-0000">
        </div>
    </div>
    <div class="form-group col-md-2">
        <label for="inputTel2">Telefone Recado</label>
        <input type="text" class="form-control text-center" id="inputTel2" name="tel2" value="{{ $paciente->tel2 ?? old('tel2') }}" placeholder="(00) 9 0000-0000">
    </div>
    <div class="form-group col-md-8">
        <label for="inputEmail">E-mail</label>
        <input type="text" class="form-control" id="inputEmail" name="email" value="{{ $paciente->email ?? old('email') }}" placeholder="exemplo@dominio.com">
    </div>

</div>

{{--ENDEREÇO--}}
<div class="form-row">

    <div class="form-group col-md-8">
        <label for="inputEndereco">Endereço</label>
        <input type="text" class="form-control" id="inputEndereco" name="endereco" value="{{ $paciente->endereco ?? old('endereco') }}">
    </div>
    <div class="form-group col-md-4">
        <label for="inputBairro">Bairro</label>
        <input type="text" class="form-control" id="inputBairro" name="bairro" value="{{ $paciente->bairro ?? old('bairro') }}">
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity" name="cidade" value="{{ $paciente->cidade ?? old('cidade') }}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEstado">Estado</label>
      <input type="text" class="form-control"  id="inputEstado" name="estado" value="{{ $paciente->estado ?? old('estado') }}">
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">CEP</label>
      <input type="text" class="form-control text-center" id="inputCEP" name="cep" value="{{ $paciente->cep ?? old('cep') }}">
    </div>

</div>
