@include('admin.includes.alerts')

@csrf

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="perguntas-tab" data-toggle="tab" href="#perguntas" role="tab" aria-controls="perguntas"
      aria-selected="true"><b><i class="fa fa-pencil-square-o"></i> PERGUNTAS</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="exames-tab" data-toggle="tab" href="#exames" role="tab" aria-controls="exames"
      aria-selected="false"><b><i class="fa fa-stethoscope"></i> EXAMES</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="tratamento-tab" data-toggle="tab" href="#tratamento" role="tab" aria-controls="tratamento"
      aria-selected="false"><b><i class="fa fa-medkit"></i> TRATAMENTO</b></a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="perguntas" role="tabpanel" aria-labelledby="perguntas-tab">
    <div class="card" style="border: none;">
    <div class="card-body">
      @include('admin.pages.prontuarios._partials.formPerguntas')
    </div>  
    </div>
  </div>
  <div class="tab-pane fade" id="exames" role="tabpanel" aria-labelledby="exames-tab">
    <div class="card" style="border: none;">
    <div class="card-body">
      @include('admin.pages.prontuarios._partials.formExames')
    </div>  
    </div>
  </div>
  <div class="tab-pane fade" id="tratamento" role="tabpanel" aria-labelledby="tratamento-tab">
    <div class="card" style="border: none;">
    <div class="card-body">
      @include('admin.pages.prontuarios._partials.formTratamento')
    </div>  
    </div>
  </div>
</div>