@include('admin.includes.alerts')

@csrf

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic"
      aria-selected="true"><b><i class="fa fa-pencil-square-o"></i> DADOS BÁSICOS</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="medic-tab" data-toggle="tab" href="#medic" role="tab" aria-controls="medic"
      aria-selected="false"><b><i class="fa fa-stethoscope"></i> DADOS MÉDICOS</b></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="outros-tab" data-toggle="tab" href="#outros" role="tab" aria-controls="outros"
      aria-selected="false"><b><i class="fa fa-list-alt"></i> OUTROS DADOS</b></a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
    <div class="card" style="border: none;">
    <div class="card-body">
      @include('admin.pages.pacientes._partials.inputsDadosBasicos')
    </div>  
    </div>
  </div>
  <div class="tab-pane fade" id="medic" role="tabpanel" aria-labelledby="medic-tab">
    <div class="card" style="border: none;">
    <div class="card-body">
      @include('admin.pages.pacientes._partials.inputsDadosMedicos')
    </div>  
    </div>
  </div>
  <div class="tab-pane fade" id="outros" role="tabpanel" aria-labelledby="outros-tab">
    <div class="card" style="border: none;">
    <div class="card-body">
      @include('admin.pages.pacientes._partials.inputsOutrosDados')
    </div>  
    </div>
  </div>
</div>