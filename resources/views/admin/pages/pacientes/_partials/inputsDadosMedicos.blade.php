{{--DADOS MÉDICOS--}}

{{--PERGUNTA 1--}}
<legend class="col-form-label pt-0"><b>
    HISTÓRICO MÉDICO: O senhor já sofreu com algum dos itens abaixo?
</b></legend>
{{-- OPÇÕES DE RESPOSTA --}}
<div class="form-row">
  {{--coluna 1--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed1" value="opcao1" value="{{ $prontuario->p1 ?? old('p1') }}">
      <label class="form-check-label" for="hisMed1">
        Pressão Alta
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed2" value="opcao2">
      <label class="form-check-label" for="hisMed2">
        Diabetes
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed3" value="opcao3">
      <label class="form-check-label" for="hisMed3">
        Hepatite
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed4" value="opcao4">
      <label class="form-check-label" for="hisMed4">
        Ataque Cardíaco / Infarto
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed5" value="opcao5">
      <label class="form-check-label" for="hisMed5">
        Câncer de Próstata
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed6" value="opcao6">
      <label class="form-check-label" for="hisMed6">
        Derrame / Acidente Vascular Encefálico
      </label>
    </div>
  </div>
  {{--fim coluna 1--}}

  {{--coluna 2--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed7" value="opcao7">
      <label class="form-check-label" for="hisMed7">
        Colesterol Alto
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed8" value="opcao8">
      <label class="form-check-label" for="hisMed8">
        Mal de Parkinson
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed9" value="opcao9">
      <label class="form-check-label" for="hisMed9">
        Insuficiência Renal
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed10" value="opcao10">
      <label class="form-check-label" for="hisMed10">
        Curvatura de Pênis
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed11" value="opcao11">
      <label class="form-check-label" for="hisMed11">
        Doenças Cardíacas
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed12" value="opcao12">
      <label class="form-check-label" for="hisMed12">
        Problemas Prostáticos
      </label>
    </div>
  </div>
  {{--fim coluna 2--}}

  {{--coluna 3--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed13" value="opcao13">
      <label class="form-check-label" for="hisMed13">
        Gastrite
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed14" value="opcao14">
      <label class="form-check-label" for="hisMed14">
        DST
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed15" value="opcao15">
      <label class="form-check-label" for="hisMed15">
        AIDS/HIV
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed16" value="opcao16">
      <label class="form-check-label" for="hisMed16">
        Problemas Circulatórios
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed17" value="opcao17">
      <label class="form-check-label" for="hisMed17">
        Transtornos de Coagulação
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histMed" id="hisMed18" value="opcao18">
      <label class="form-check-label" for="hisMed18">
        Depressão
      </label>
    </div>
  </div>
  {{--fim coluna 3--}}
</div>
<div class="form-row">
    <label class="col-md-4 col-form-label" for="inputEstMental">Transtornos Psiquiátricos/Estado Mental:</label>
    <div class="col-sm-4">
      <input  class="form-control form-control-sm" id="inputEstMental" name="estMental">
    </div>
</div>
{{-- FIM DE OPÇÕES DE RESPOSTA --}}

<br>

{{--PERGUNTA 2--}}
<legend class="col-form-label pt-0"><b>
    HISTÓRICO DE CIRURGIAS: O senhor já fez alguma cirurgia?
</b></legend>
{{-- OPÇÕES DE RESPOSTA --}}
<div class="form-row">
  {{--coluna 1--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur1" value="opcao1" value="{{ $prontuario->p1 ?? old('p1') }}">
      <label class="form-check-label" for="hisCirur1">
        Coração
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur2" value="opcao2">
      <label class="form-check-label" for="hisCirur2">
        Coluna
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur3" value="opcao3">
      <label class="form-check-label" for="hisCirur3">
        Intestino
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur4" value="opcao4">
      <label class="form-check-label" for="hisCirur4">
        Cabeça
      </label>
    </div>
  </div>
  {{--fim coluna 1--}}

  {{--coluna 2--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur5" value="opcao5">
      <label class="form-check-label" for="hisCirur5">
        Hérnias
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur6" value="opcao6">
      <label class="form-check-label" for="hisCirur6">
        Apendicite
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur7" value="opcao7">
      <label class="form-check-label" for="hisCirur7">
        Próstata
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur8" value="opcao8">
      <label class="form-check-label" for="hisCirur8">
        Pênis
      </label>
    </div>
  </div>
  {{--fim coluna 2--}}

  {{--coluna 3--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur9" value="opcao9">
      <label class="form-check-label" for="hisCirur9">
        Vesícula
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur10" value="opcao10">
      <label class="form-check-label" for="hisCirur10">
        Escroto/Testículo
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur11" value="opcao11">
      <label class="form-check-label" for="hisCirur11">
        Varizes
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histCirur" id="hisCirur12" value="opcao12">
      <label class="form-check-label" for="hisCirur12">
        Outros
      </label>
      <div class="col-sm-4">
        <input  class="form-control form-control-sm" id="inputHistCirur" name="histCirurOutros">
      </div>
    </div>
  </div>
  {{--fim coluna 3--}}
</div>
{{-- FIM DE OPÇÕES DE RESPOSTA --}}



{{--PERGUNTA 3--}}
<legend class="col-form-label pt-0"><b>
    HISTÓRICO FAMILIAR: O senhor tem parentes de primeiro grau com algum dos itens abaixo?
</b></legend>
{{-- OPÇÕES DE RESPOSTA --}}
<div class="form-row">
  {{--coluna 1--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histFamiliar" id="hisFamiliar1" value="opcao1" value="{{ $prontuario->p1 ?? old('p1') }}">
      <label class="form-check-label" for="hisFamiliar1">
        Pressão Alta
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histFamiliar" id="hisFamiliar2" value="opcao2">
      <label class="form-check-label" for="hisFamiliar2">
        Diabetes
      </label>
    </div>
  </div>
  {{--fim coluna 1--}}

  {{--coluna 2--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histFamiliar" id="hisFamiliar3" value="opcao3">
      <label class="form-check-label" for="hisFamiliar3">
        Câncer de Próstata
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histFamiliar" id="hisFamiliar4" value="opcao4">
      <label class="form-check-label" for="hisFamiliar4">
        Problemas Cardíacos
      </label>
    </div>
  </div>
  {{--fim coluna 2--}}

  {{--coluna 3--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histFamiliar" id="hisFamiliar5" value="opcao5">
      <label class="form-check-label" for="hisFamiliar5">
        Ataque Cardíaco Prematuro
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histFamiliar" id="hisFamilia6" value="opcao6">
      <label class="form-check-label" for="hisFamiliar6">
        Outros
      </label>
      <div class="col-sm-4">
        <input  class="form-control form-control-sm" id="inputHistFamiliar" name="histFamiliarOutros">
      </div>
    </div>
  </div>
  {{--fim coluna 3--}}
</div>
{{-- FIM DE OPÇÕES DE RESPOSTA --}}



{{--PERGUNTA 4--}}
<legend class="col-form-label pt-0"><b>
    HISTÓRICO SOCIAL:
</b></legend>
{{-- OPÇÕES DE RESPOSTA --}}
<div class="form-row">
  {{--coluna 1--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histSocial" id="hisSocial1" value="opcao1" value="{{ $prontuario->p1 ?? old('p1') }}">
      <label class="form-check-label" for="hisSocial1">
        Tabaco
      </label>
    </div>
  </div>
  {{--fim coluna 1--}}

  {{--coluna 2--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histSocial" id="hisSocial3" value="opcao3">
      <label class="form-check-label" for="hisSocial3">
        Drogas Recreativas
      </label>
    </div>
  </div>
  {{--fim coluna 2--}}

  {{--coluna 3--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="histSocial" id="hisSocial5" value="opcao5">
      <label class="form-check-label" for="hisSocial5">
        Álcool
      </label>
    </div>
  </div>
  {{--fim coluna 3--}}
</div>
{{-- FIM DE OPÇÕES DE RESPOSTA --}}

<br>

{{--PERGUNTA 5--}}
<legend class="col-form-label pt-0"><b>
    ALERGIAS: O senhor já teve alguma reação alérgica a alguma medicação?
</b></legend>
{{-- OPÇÕES DE RESPOSTA --}}
<div class="form-row">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="alergia" id="alergiaSim" value="opcao1">
        <label class="form-check-label" for="alergiaSim">
          Sim
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="alergia" id="alergiaNao" value="opcao2">
        <label class="form-check-label" for="alergiaNao">
          Não
        </label>
      </div>
      <label for="inputAlergias">Qual?</label>
      <div class="col-sm-6">
        <input  class="form-control form-control-sm" id="inputAlergias" name="alergias">
      </div>
</div>

<br>

{{--PERGUNTA 6--}}
<legend class="col-form-label pt-0"><b>
    MEDICAÇÃO ATUAL:
</b></legend>
<div class="form-row">
    <label for="inputAlergias">Faz uso de alguma medicação?</label>
<div class="col-sm-6">
  <input  class="form-control form-control-sm" id="inputMedicacao" name="medicacao">
</div>
</div>

<br>

{{--PERGUNTA 7--}}
<legend class="col-form-label pt-0"><b>
    MOTIVO DA CONSULTA DE HOJE:
</b></legend>
{{-- OPÇÕES DE RESPOSTA --}}
<div class="form-row">
  {{--coluna 1--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="motivoConsu" id="motivoConsu1" value="opcao1" value="{{ $prontuario->p1 ?? old('p1') }}">
      <label class="form-check-label" for="motivoConsu1">
        Dificuldade de obter ereção
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="motivoConsu" id="motivoConsu2" value="opcao2">
      <label class="form-check-label" for="motivoConsu2">
        Dificuldade em manter ereção
      </label>
    </div>
  </div>
  {{--fim coluna 1--}}

  {{--coluna 2--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="motivoConsu" id="motivoConsu3" value="opcao3">
      <label class="form-check-label" for="motivoConsu3">
        Ejaculação retrograda
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="motivoConsu" id="motivoConsu4" value="opcao4">
      <label class="form-check-label" for="motivoConsu4">
        Ejaculação precoce
      </label>
    </div>
  </div>
  {{--fim coluna 2--}}

  {{--coluna 3--}}
  <div class="col">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="motivoConsu" id="motivoConsu5" value="opcao5">
      <label class="form-check-label" for="motivoConsu5">
        Incapacidade de ejaculação
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="motivoConsu" id="motivoConsu6" value="opcao6">
      <label class="form-check-label" for="motivoConsu6">
        Curvatura de pênis
      </label>
    </div>
  </div>
  {{--fim coluna 3--}}
</div>
{{-- FIM DE OPÇÕES DE RESPOSTA --}}

<br>

{{--PERGUNTA 8--}}
<legend class="col-form-label pt-0"><b>
    JÁ FEZ ALGUM TRATAMENTO REFERENTE A SUA QUEIXA?
</b></legend>
{{-- OPÇÕES DE RESPOSTA --}}
<div class="form-row">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tratamentoAtual" id="tratamentoSim" value="opcao1">
        <label class="form-check-label" for="tratamentoSim">
          Sim
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tratamentoAtual" id="tratamentoNao" value="opcao2">
        <label class="form-check-label" for="tratamentoNao">
          Não
        </label>
      </div>
      <label for="inputTratamentoAtual">Qual?</label>
      <div class="col-sm-6">
        <input  class="form-control form-control-sm" id="inputTratamentoAtual" name="qualTratamento">
      </div>
</div>

<br>