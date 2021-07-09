<form action="{{ route('exames.store') }}" method="POST" id="cadastro">
    @include('admin.includes.alerts')
    @csrf

  {{--BOTÕES--}}
  <div class="card bg-light text-center">
    <div class="card-body">
      <a href="{{ route('pacientes.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
      <a href="#" class="btn btn-secondary"><i class="fa fa-print"></i> Imprimir</a>
    </div>
  </div>
  
  {{--CONTEUDO--}}
  <br>
  <h4>Exame Físico</h4>
  <hr>
  <div class="form-row">

    <div class="col-md-6">
      <label for="inputGeral"><b>Geral</b></label>
      <textarea  class="form-control" id="inputGeral" name="geral" rows="2"></textarea>
    </div>
    <div class="col-md-6">
      <label for="inputCardio"><b>Cardiorrespiratório</b></label>
      <textarea  class="form-control" id="inputCardio" name="cardio" rows="2"></textarea>
    </div>

  </div>
  <br>
  <div class="form-row">
  
    <div class="col-md-6">
      <label for="inputGastro"><b>Trato gastrointestinal</b></label>
      <textarea  class="form-control" id="inputGastro" name="gastro" rows="2"></textarea>
    </div>
    <div class="col-md-6">
      <label for="inputPenis"><b>Pênis e testículos</b></label>
      <textarea  class="form-control" id="inputPenis" name="penis" rows="2"></textarea>
    </div>

  </div>
  <br>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="patologias" id="patologia1" value="opcao1" value="{{ $prontuario->p1 ?? old('p1') }}">
        <label class="form-check-label" for="patologia1">
          Lesões dermatológicas
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="patologias" id="patologia2" value="opcao2">
        <label class="form-check-label" for="patologia2">
          Fimose
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="patologias" id="patologia3" value="opcao3">
        <label class="form-check-label" for="patologia3">
          Criptorquidia
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="patologias" id="patologia4" value="opcao4">
        <label class="form-check-label" for="patologia4">
          Candidíase
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="patologias" id="patologia5" value="opcao5">
        <label class="form-check-label" for="patologia5">
          Curvatura peniana
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="patologias" id="patologia6" value="opcao6">
        <label class="form-check-label" for="patologia6">
          Dor de peyronie
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="patologias" id="patologia7" value="opcao7">
        <label class="form-check-label" for="patologia7">
          Emulação
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="patologias" id="patologia8" value="opcao8">
        <label class="form-check-label" for="patologia8">
          Hiperemia
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="patologias" id="patologia9" value="opcao9">
        <label class="form-check-label" for="patologia9">
          Hipospádia
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="patologias" id="patologia10" value="opcao10">
        <label class="form-check-label" for="patologia10">
          Hidrocele
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}

  <br>
  <div class="form-row">
    <div class="col-md-12">
      <label for="inputOutros"><b>Outros</b></label>
      <textarea  class="form-control" id="inputOutros" name="outros" rows="2"></textarea>
    </div>
  </div>

  <br>
  <div class="form-row">
      <label class="col-auto col-form-label" for="inputAlong"><b>Alongamento de pênis:</b></label>
      <div class="col-sm-1">
        <input  class="form-control text-center" id="inputAlong" name="along">
      </div>
  </div>
  
  <br>
  <h4>Exames Complementares</h4>
  <hr>
  <br>
  <div class="form-row">
      <label class="col-auto col-form-label" for="inputBioest"><b>Bioestesiômetro:</b></label>
      <div class="col-sm-3">
        <h3 id="demo"></h3>
      </div>
  </div>

  <div class="slidecontainer">
    <input type="range" min="0" max="20" value="10" class="slider" id="myRange" name="inputBioest">
  </div>
  
  <script>
  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  output.innerHTML = slider.value;
  
  slider.oninput = function() {
    output.innerHTML = this.value;
  }
  </script>

  <br>
  <div class="form-row">
      <legend class="col-form-label pt-0"><b>
        Eco doppler peniano . Doppler fluxo peniano
      </b>
      </legend>
  </div>

  <div class="form-row">
      <label class="col-sm-1 col-form-label" for="inputArterial"><b>Arterial:</b></label>
      <div class="col-sm-1">
        <input  class="form-control form-control-sm text-center" id="inputArterial" name="arterial">
      </div>
  </div>
  
  <div class="form-row">
      <label class="col-sm-1 col-form-label" for="inputVenoso"><b>Venoso:</b></label>
      <div class="col-sm-1">
        <input  class="form-control form-control-sm text-center" id="inputVenoso" name="venoso">
      </div>
  </div>
  
  <br>
  <h4>Exame Teste</h4>
  <hr>

  <div class="card-deck">
    {{--CARD--}}
    <div class="card bg-light" style="max-width: 18rem;">

      <div class="card-body">
        <div class="form-row">
          <label class="col-md-5 col-form-label" for="inputTeste1F"><b>TESTE 1 / F:</b></label>
          <div class="col-md-5">
            <input  class="form-control form-control-sm text-center" id="inputTeste1F" name="teste1f">
          </div>
        </div>
        
        <div class="form-row">
          <label class="col-md-5 col-form-label" for="inputDose1">Dose:</label>
          <div class="col-md-5">
            <input  class="form-control form-control-sm text-center" id="inputDose1" name="dose1">
          </div>
          <span id="" class="text-muted">
            <b>U</b>
          </span>
        </div>
        
        <div class="form-row">
          <label class="col-sm-5 col-form-label" for="inputHora1">Hora início:</label>
          <div class="col-sm-5">
            <input  class="form-control form-control-sm text-center" id="inputHora1" name="hora1">
          </div>
        </div>
        
        <div class="form-row">
          <label class="col-sm-5 col-form-label" for="inputResposta1">Resposta em:</label>
          <div class="col-sm-5">
            <input  class="form-control form-control-sm text-center" id="inputResposta1" name="resposta1">
          </div>
          <span id="" class="text-muted">
            <b>min.</b>
          </span>
        </div>
        
        <div class="form-row">
          <label class="col-sm-5 col-form-label" for="inputErecao1">Ereção:</label>
          <div class="col-sm-5">
            <input  class="form-control form-control-sm text-center" id="inputErecao1" name="erecao1">
          </div>
          <span id="" class="text-muted">
            <b>%</b>
          </span>
        </div>
      </div>

    </div>
    {{-- FIM CARD--}}

    {{--CARD--}}
    <div class="card bg-light" style="max-width: 18rem;">

      <div class="card-body">
        <div class="form-row">
          <label class="col-md-5 col-form-label" for="inputTeste2F"><b>TESTE 2 / F:</b></label>
          <div class="col-md-5">
            <input  class="form-control form-control-sm text-center" id="inputTeste2F" name="teste2f">
          </div>
        </div>
        
        <div class="form-row">
          <label class="col-md-5 col-form-label" for="inputDose2">Dose:</label>
          <div class="col-md-5">
            <input  class="form-control form-control-sm text-center" id="inputDose2" name="dose2">
          </div>
          <span id="" class="text-muted">
            <b>U</b>
          </span>
        </div>
        
        <div class="form-row">
          <label class="col-sm-5 col-form-label" for="inputHora2">Hora início:</label>
          <div class="col-sm-5">
            <input  class="form-control form-control-sm text-center" id="inputHora2" name="hora2">
          </div>
        </div>
        
        <div class="form-row">
          <label class="col-sm-5 col-form-label" for="inputResposta2">Resposta em:</label>
          <div class="col-sm-5">
            <input  class="form-control form-control-sm text-center" id="inputResposta2" name="resposta2">
          </div>
          <span id="" class="text-muted">
            <b>min.</b>
          </span>
        </div>
        
        <div class="form-row">
          <label class="col-sm-5 col-form-label" for="inputErecao2">Ereção:</label>
          <div class="col-sm-5">
            <input  class="form-control form-control-sm text-center" id="inputErecao2" name="erecao2">
          </div>
          <span id="" class="text-muted">
            <b>%</b>
          </span>
        </div>
      </div>

    </div>
    {{-- FIM CARD--}}

    {{--CARD--}}
    <div class="card bg-light" style="max-width: 18rem;">

      <div class="card-header">
        <h5 class=" text-center">
          REMISSÃO DA EREÇÃO
        </h5>
      </div>

      <div class="card-body">
        
        <div class="form-row">
          <label class="col-sm-5 col-form-label" for="inputHoraR">Hora:</label>
          <div class="col-sm-5">
            <input  class="form-control form-control-sm text-center" id="inputHoraR" name="horaR">
          </div>
        </div>
        
        <div class="form-row">
          <label class="col-sm-5 col-form-label" for="inputDuracaoR">Duração:</label>
          <div class="col-sm-5">
            <input  class="form-control form-control-sm text-center" id="inputDuracaoR" name="duracaoR">
          </div>
          <span id="" class="text-muted">
            <b>min.</b>
          </span>
        </div>

    </div>
    {{-- FIM CARD--}}
    </div>
  </div>
  
  <br>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <legend class="col-form-label pt-0"><b>
        Pseudoefedrina 120 mg
      </b></legend>
      <legend class="col-form-label pt-0">
        Após 30 minutos
      </legend>
      <div class="form-row">
        <label class="col-auto col-form-label" for="inputPseudoRegr">Regressão:</label>
        <div class="col-sm-3">
          <input  class="form-control form-control-sm text-center" id="inputPseudoRegr" name="pseudoRegr">
        </div>
        <span id="" class="text-muted">
          <b>%</b>
        </span>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <legend class="col-form-label pt-0"><b>
        Etilefrina
      </b></legend>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ampolas" id="ampola1" value="opcao1">
        <label class="form-check-label" for="ampola1">
          1 ampola
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ampolas" id="ampola2" value="opcao2">
        <label class="form-check-label" for="ampola2">
          2 ampolas
        </label>
      </div>
      <div class="form-row">
        <label class="col-auto col-form-label" for="inputPseudoRemi">Remissão:</label>
        <div class="col-sm-3">
          <input  class="form-control form-control-sm text-center" id="inputPseudoRemi" name="pseudoRemi">
        </div>
      </div>
    </div>
    {{--fim coluna 2--}}
    {{--coluna 3--}}
    <div class="col">
      <legend class="col-form-label pt-0"><b>
        REMISSÃO COMPLETA:
      </b></legend>
      <div class="form-row">
        <label class="col-auto col-form-label" for="inputRemiComp">Hora:</label>
        <div class="col-sm-3">
          <input  class="form-control form-control-sm text-center" id="inputRemiComp" name="remiComp">
        </div>
      </div>
    </div>
    {{--fim coluna 3--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}

  
  {{--BOTÕES--}}
  <br>
  <div class="card bg-light text-center">
    <div class="card-body">
        <a href="{{ route('pacientes.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
        <a href="#" class="btn btn-secondary"><i class="fa fa-print"></i> Imprimir</a>
    </div>
  </div>

  </form>