{{--OUTROS DADOS--}}

{{--PERGUNTA 9--}}
<legend class="col-form-label pt-0"><b>
    COMO O SENHOR NOS CONHECEU?
</b></legend>
{{-- OPÇÕES DE RESPOSTA --}}
<div class="form-row">
  {{--coluna 1--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="comoConheceu" id="comoConheceu1" value="opcao1" value="{{ $prontuario->p1 ?? old('p1') }}">
      <label class="form-check-label" for="comoConheceu1">
        Indicação
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="comoConheceu" id="comoConheceu2" value="opcao2">
      <label class="form-check-label" for="comoConheceu2">
        Site
      </label>
    </div>
  </div>
  {{--fim coluna 1--}}

  {{--coluna 2--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="comoConheceu" id="comoConheceu3" value="opcao3">
      <label class="form-check-label" for="comoConheceu3">
        Televisão
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="comoConheceu" id="comoConheceu4" value="opcao4">
      <label class="form-check-label" for="comoConheceu4">
        Rádio
      </label>
    </div>
  </div>
  {{--fim coluna 2--}}

  {{--coluna 3--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="comoConheceu" id="comoConheceu5" value="opcao5">
      <label class="form-check-label" for="comoConheceu5">
        Jornal
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="comoConheceu" id="comoConheceu6" value="opcao6">
      <label class="form-check-label" for="comoConheceu6">
        Revista
      </label>
    </div>
  </div>
  {{--fim coluna 3--}}
</div>
{{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  <div class="alert alert-warning" role="alert">
    <b><i class="fa fa-exclamation-triangle"></i> ATENÇÃO!</b> Campos preenchidos pelo médico.
  </div>

  <div class="form-row">
      <label for="inputDiagnostico"><b>
        DIAGNÓSTICO
      </b></label>
      <textarea  class="form-control" id="inputDiagnostico" name="diagnostico" rows="2"></textarea>
  </div>
<br>
  <div class="form-row">
      <label for="inputPrognostico"><b>
        PROGNÓSTICO
      </b></label>
      <textarea  class="form-control" id="inputPrognostico" name="prognostico" rows="2"></textarea>
  </div>
<br>
  <div class="form-row">
      <label for="inputSequelas"><b>
        SEQUELAS
      </b></label>
      <textarea  class="form-control" id="inputSequelas" name="sequelas" rows="2"></textarea>
  </div>