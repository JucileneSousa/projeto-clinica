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
  <h4>Tratamento Recomendado</h4>
  <hr>
  
  {{-- OPÇÕES DE Posologia --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="tratamento" id="tratamento1" value="opcao1" value="{{ $prontuario->p1 ?? old('p1') }}">
        <label class="form-check-label" for="tratamento1">
            Spray Sublingual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="tratamento" id="tratamento2" value="opcao2">
        <label class="form-check-label" for="tratamento2">
            Farmacoterapia intracavernoso
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="tratamento" id="tratamento3" value="opcao3">
        <label class="form-check-label" for="tratamento3">
            Reposição hormonal
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="tratamento" id="tratamento4" value="opcao4">
        <label class="form-check-label" for="tratamento4">
            Terapia sexual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="tratamento" id="tratamento5" value="opcao5">
        <label class="form-check-label" for="tratamento5">
            Prótese peniana
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
  </div>
  {{-- FIM DE OPÇÕES DE Posologia --}}

  <div class="form-row">
    <div class="col-md-12">
      <label for="inputOutros"><b>Outros</b></label>
      <textarea  class="form-control" id="inputOutros" name="outros" rows="2"></textarea>
    </div>
  </div>
<br>
  <div class="card-deck">
    {{--CARD--}}
    <div class="card bg-light">

        <div class="card-header">
          <h5 class=" text-center">
            FIC
          </h5>
        </div>

      <div class="card-body">
        <div class="form-group row">
          <label class="col-md-5 col-form-label" for="inputFormula1">Fórmula:</label>
          <div class="col-md-6">
            <input  class="form-control form-control-sm text-center" id="inputFormula1" name="formula1">
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-5 col-form-label" for="inputDose1">Dose inicial:</label>
          <div class="col-md-6">
            <input  class="form-control form-control-sm text-center" id="inputDose1" name="dose1">
          </div>
          <span id="" class="text-muted">
            <b>U</b>
          </span>
        </div>
        
        <div class="form-group row">
          <label class="col-sm-5 col-form-label" for="inputPeriodo1">Período de tratamento:</label>
          <div class="col-sm-6">
            <select id="inputPeriodo1" class="form-control form-control-sm" name="periodo1">
              <option selected>Escolher...</option>
              <option>3 meses</option>
              <option>6 meses</option>
              <option>9 meses</option>
              <option>12 meses</option>
            </select>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-sm-5 col-form-label" for="inputPosologia1">Posologia:</label>
          <div class="col-sm-6">
            <textarea  class="form-control form-control-sm" id="inputPosologia1" name="posologia1" rows="3">
            </textarea>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-sm-5 col-form-label" for="inputObs1">Observação:</label>
          <div class="col-sm-6">
            <textarea  class="form-control form-control-sm" id="inputObs1" name="obs1" rows="3">
            </textarea>
          </div>
        </div>
      </div>

    </div>
    {{-- FIM CARD--}}

    
    {{--CARD--}}
    <div class="card bg-light">

        <div class="card-header">
          <h5 class=" text-center">
            Spray
          </h5>
        </div>

      <div class="card-body">
        <div class="form-group row">
          <label class="col-md-5 col-form-label" for="inputFormula2">Fórmula:</label>
          <div class="col-md-6">
            <input  class="form-control form-control-sm text-center" id="inputFormula2" name="formula2">
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-md-5 col-form-label" for="inputDose2">Jatos/Dip.:</label>
          <div class="col-md-6">
            <input  class="form-control form-control-sm text-center" id="inputDose2" name="dose2">
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-sm-5 col-form-label" for="inputPeriodo2">Período de tratamento:</label>
          <div class="col-sm-6">
            <select id="inputPeriodo2" class="form-control form-control-sm" name="periodo2">
              <option selected>Escolher...</option>
              <option>3 meses</option>
              <option>6 meses</option>
              <option>9 meses</option>
              <option>12 meses</option>
            </select>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-sm-5 col-form-label" for="inputPosologia2">Posologia:</label>
          <div class="col-sm-6">
            <textarea  class="form-control form-control-sm" id="inputPosologia2" name="posologia2" rows="3">
            </textarea>
          </div>
        </div>
        
        <div class="form-group row">
          <label class="col-sm-5 col-form-label" for="inputObs2">Observação:</label>
          <div class="col-sm-6">
            <textarea  class="form-control form-control-sm" id="inputObs2" name="obs2" rows="3">
            </textarea>
          </div>
        </div>
      </div>

    </div>
    {{-- FIM CARD--}}

    </div>
  </div>

  {{--BOTÕES--}}
  <div class="card bg-light text-center">
    <div class="card-body">
      <a href="{{ route('pacientes.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
      <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
      <a href="#" class="btn btn-secondary"><i class="fa fa-print"></i> Imprimir</a>
    </div>
  </div>
  
</form>