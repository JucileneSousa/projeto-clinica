<form action="{{ route('prontuarios.store') }}" method="POST" id="cadastro">
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
<br>
  {{-- PERGUNTA 1 --}}
  <legend class="col-form-label pt-0"><b>
    1. Nas últimas quatro semanas, com que frequência você foi capaz de ter uma ereção durante uma relação sexual**?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p1" id="p1o1" value="opcao1" value="{{ $prontuario->p1 ?? old('p1') }}">
        <label class="form-check-label" for="p1o1">
          Sem atividade sexual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p1" id="p1o2" value="opcao2">
        <label class="form-check-label" for="p1o2">
          Quase sempre ou sempre
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p1" id="p1o3" value="opcao3">
        <label class="form-check-label" for="p1o3">
          A maioria das vezes (muito mais que a metade das vezes)
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p1" id="p1o4" value="opcao4">
        <label class="form-check-label" for="p1o4">
          Algumas vezes (aproximadamente a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p1" id="p1o5" value="opcao5">
        <label class="form-check-label" for="p1o5">
          Poucas vezes (muito menos que a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p1" id="p1o6" value="opcao6">
        <label class="form-check-label" for="p1o6">
          Quase nunca ou nunca
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 2 --}}
  <legend class="col-form-label pt-0"><b>
    2. Nas últimas quatro semanas, quando você teve ereções sexuais com estimulação****, com que frequência foram suas ereções, duras o suficiente para penetração?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p2" id="p2o1" value="opcao1">
        <label class="form-check-label" for="p2o1">
          Sem estimulação sexual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p2" id="p2o2" value="opcao2">
        <label class="form-check-label" for="p2o2">
          Quase sempre ou sempre
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p2" id="p2o3" value="opcao3">
        <label class="form-check-label" for="p2o3">
          A maioria das vezes (muito mais que a metade das vezes)
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p2" id="p2o4" value="opcao4">
        <label class="form-check-label" for="p2o4">
          Algumas vezes (aproximadamente a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p2" id="p2o5" value="opcao5">
        <label class="form-check-label" for="p2o5">
          Poucas vezes (muito menos que a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p2" id="p2o6" value="opcao6">
        <label class="form-check-label" for="p2o6">
          Quase nunca ou nunca
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  <div class="alert alert-warning" role="alert">
    As próximas três questões irão perguntar sobre as ereções que você pode ter tido durante a relação sexual*.
  </div>
  {{-- PERGUNTA 3 --}}
  <legend class="col-form-label pt-0"><b>
    3. Nas últimas quatro semanas, quando você tentou ter relação sexual* com que frequência foi capaz de penetrar (entrar) na sua parceira?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p3" id="p3o1" value="opcao1">
        <label class="form-check-label" for="p3o1">
          Não tentou ter relação sexual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p3" id="p3o2" value="opcao2">
        <label class="form-check-label" for="p3o2">
          Quase sempre ou sempre
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p3" id="p3o3" value="opcao3">
        <label class="form-check-label" for="p3o3">
          A maioria das vezes (muito mais que a metade das vezes)
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p3" id="p3o4" value="opcao4">
        <label class="form-check-label" for="p3o4">
          Algumas vezes (aproximadamente a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p3" id="p3o5" value="opcao5">
        <label class="form-check-label" for="p3o5">
          Poucas vezes (muito menos que a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p3" id="p3o6" value="opcao6">
        <label class="form-check-label" for="p3o6">
          Quase nunca ou nunca
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 4 --}}
  <legend class="col-form-label pt-0"><b>
    4. Nas últimas quatro semanas, durante uma relação sexual* com que frequência você foi capaz de manter sua ereção após ter penetrado (entrado) na sua parceira?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p4" id="p4o1" value="opcao1">
        <label class="form-check-label" for="p4o1">
          Não tentou ter relação sexual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p4" id="p4o2" value="opcao2">
        <label class="form-check-label" for="p4o2">
          Quase sempre ou sempre
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p4" id="p4o3" value="opcao3">
        <label class="form-check-label" for="p4o3">
          A maioria das vezes (muito mais que a metade das vezes)
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p4" id="p4o4" value="opcao4">
        <label class="form-check-label" for="p4o4">
          Algumas vezes (aproximadamente a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p4" id="p4o5" value="opcao5">
        <label class="form-check-label" for="p4o5">
          Poucas vezes (muito menos que a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p4" id="p4o6" value="opcao6">
        <label class="form-check-label" for="p4o6">
          Quase nunca ou nunca
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 5 --}}
  <legend class="col-form-label pt-0"><b>
    5. Nas últimas quatro semanas, durante uma relação sexual*, o quanto foi difícil para você manter sua ereção até o fim da relação?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p5" id="p5o1" value="opcao1">
        <label class="form-check-label" for="p5o1">
          Não tentou ter relação sexual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p5" id="p5o2" value="opcao2">
        <label class="form-check-label" for="p5o2">
          Extremamente difícil
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p5" id="p5o3" value="opcao3">
        <label class="form-check-label" for="p5o3">
          Muito difícil
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p5" id="p5o4" value="opcao4">
        <label class="form-check-label" for="p5o4">
          Difícil
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p5" id="p5o5" value="opcao5">
        <label class="form-check-label" for="p5o5">
          Pouco difícil
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p5" id="p5o6" value="opcao6">
        <label class="form-check-label" for="p5o6">
          Não difícil
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 6 --}}
  <legend class="col-form-label pt-0"><b>
    6. Nas últimas quatro semanas, quantas vezes você tentou ter relação sexual*?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p6" id="p6o1" value="opcao1">
        <label class="form-check-label" for="p6o1">
          Não tentou
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p6" id="p6o2" value="opcao2">
        <label class="form-check-label" for="p6o2">
          1-2 tentativas
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p6" id="p6o3" value="opcao3">
        <label class="form-check-label" for="p6o3">
          3-4 tentativas 
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p6" id="p6o4" value="opcao4">
        <label class="form-check-label" for="p6o4">
          5-6 tentativas
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p6" id="p6o5" value="opcao5">
        <label class="form-check-label" for="p6o5">
          7-10 tentativas
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p6" id="p6o6" value="opcao6">
        <label class="form-check-label" for="p6o6">
          11 ou mais tentativas
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 7 --}}
  <legend class="col-form-label pt-0"><b>
    7. Nas últimas quatro semanas, quando você tentou ter relação sexual* com que frequência ela foi satisfatória para você?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p7" id="p7o1" value="opcao1">
        <label class="form-check-label" for="p7o1">
          Não tentou ter relação sexual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p7" id="p7o2" value="opcao2">
        <label class="form-check-label" for="p7o2">
          Quase sempre ou sempre
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p7" id="p7o3" value="opcao3">
        <label class="form-check-label" for="p7o3">
          A maioria das vezes (muito mais que a metade das vezes)
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p7" id="p7o4" value="opcao4">
        <label class="form-check-label" for="p7o4">
          Algumas vezes (aproximadamente a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p7" id="p7o5" value="opcao5">
        <label class="form-check-label" for="p7o5">
          Poucas vezes (muito menos que a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p7" id="p7o6" value="opcao6">
        <label class="form-check-label" for="p7o6">
          Quase nunca ou nunca
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 8 --}}
  <legend class="col-form-label pt-0"><b>
    8. Nas últimas quatro semanas, o quanto você aproveitou a relação sexual*?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p8" id="p8o1" value="opcao1">
        <label class="form-check-label" for="p8o1">
          Não teve relação sexual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p8" id="p8o2" value="opcao2">
        <label class="form-check-label" for="p8o2">
          Aproveitou extremamente
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p8" id="p8o3" value="opcao3">
        <label class="form-check-label" for="p8o3">
          Aproveitou muito
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p8" id="p8o4" value="opcao4">
        <label class="form-check-label" for="p8o4">
          Aproveitou um tanto
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p8" id="p8o5" value="opcao5">
        <label class="form-check-label" for="p8o5">
          Aproveitou muito pouco
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p8" id="p8o6" value="opcao6">
        <label class="form-check-label" for="p8o6">
          Não aproveitou
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 9 --}}
  <legend class="col-form-label pt-0"><b>
    9. Nas últimas quatro semanas, quando você teve estimulação sexual**** ou relação sexual com qual frequência você teve uma ejaculação***?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p9" id="p9o1" value="opcao1">
        <label class="form-check-label" for="p9o1">
          Não teve estimulação sexual ou relação sexual 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p9" id="p9o2" value="opcao2">
        <label class="form-check-label" for="p9o2">
          Quase sempre ou sempre
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p9" id="p9o3" value="opcao3">
        <label class="form-check-label" for="p9o3">
          A maioria das vezes (muito mais que a metade das vezes)
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p9" id="p9o4" value="opcao4">
        <label class="form-check-label" for="p9o4">
          Algumas vezes (aproximadamente a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p9" id="p9o5" value="opcao5">
        <label class="form-check-label" for="p9o5">
          Poucas vezes (muito menos que a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p9" id="p9o6" value="opcao6">
        <label class="form-check-label" for="p9o6">
          Quase nunca ou nunca
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 10 --}}
  <legend class="col-form-label pt-0"><b>
    10. Nas últimas quatro semanas, quando você teve estimulação sexual**** ou relação sexual, com que frequência você teve a sensação de orgasmo com ou sem ejaculação***?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p10" id="p10o1" value="opcao1">
        <label class="form-check-label" for="p10o1">
          Não teve estimulação sexual ou relação sexual 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p10" id="p10o2" value="opcao2">
        <label class="form-check-label" for="p10o2">
          Quase sempre ou sempre
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p10" id="p10o3" value="opcao3">
        <label class="form-check-label" for="p10o3">
          A maioria das vezes (muito mais que a metade das vezes)
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p10" id="p10o4" value="opcao4">
        <label class="form-check-label" for="p10o4">
          Algumas vezes (aproximadamente a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p10" id="p10o5" value="opcao5">
        <label class="form-check-label" for="p10o5">
          Poucas vezes (muito menos que a metade das vezes)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p10" id="p10o6" value="opcao6">
        <label class="form-check-label" for="p10o6">
          Quase nunca ou nunca
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  <div class="alert alert-warning" role="alert">
    As próximas duas questões se referem ao desejo sexual. Vamos definir desejo sexual como uma sensação que pode incluir querer ter uma experiência sexual (por exemplo, masturbação ou relação), pensamento sobre sexo ou sentimento de frustração devido à falta de sexo.
  </div>
  {{-- PERGUNTA 11 --}}
  <legend class="col-form-label pt-0"><b>
    11. Nas últimas quatro semanas, com que frequência você tem sentido desejo sexual?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p11" id="p11o1" value="opcao1">
        <label class="form-check-label" for="p11o1">
          Quase sempre ou sempre
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p11" id="p11o2" value="opcao2">
        <label class="form-check-label" for="p11o2">
          Frequentemente (muito mais que a metade do tempo) 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p11" id="p11o3" value="opcao3">
        <label class="form-check-label" for="p11o3">
          Algumas vezes (aproximadamente a metade do tempo)
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p11" id="p11o4" value="opcao4">
        <label class="form-check-label" for="p11o4">
          Poucas vezes (muito menos que a metade do tempo)
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p11" id="p11o5" value="opcao5">
        <label class="form-check-label" for="p11o5">
          Quase nunca ou nunca
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 12 --}}
  <legend class="col-form-label pt-0"><b>
    12. Nas últimas quatro semanas, o quanto você consideraria o seu nível de desejo sexual?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p12" id="p12o1" value="opcao1">
        <label class="form-check-label" for="p12o1">
          Muito alto
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p12" id="p12o2" value="opcao2">
        <label class="form-check-label" for="p12o2">
          Alto 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p12" id="p12o3" value="opcao3">
        <label class="form-check-label" for="p12o3">
          Moderado
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p12" id="p12o4" value="opcao4">
        <label class="form-check-label" for="p12o4">
          Baixo
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p12" id="p12o5" value="opcao5">
        <label class="form-check-label" for="p12o5">
          Muito baixo ou inexistente
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 13 --}}
  <legend class="col-form-label pt-0"><b>
    13. Nas últimas quatro semanas, de modo geral, o quão satisfeito você tem estado com sua vida sexual?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p13" id="p13o1" value="opcao1">
        <label class="form-check-label" for="p13o1">
          Muito satisfeito
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p13" id="p13o2" value="opcao2">
        <label class="form-check-label" for="p13o2">
          Moderadamente satisfeito 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p13" id="p13o3" value="opcao3">
        <label class="form-check-label" for="p13o3">
          Igualmente satisfeito e insatisfeito
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p13" id="p13o4" value="opcao4">
        <label class="form-check-label" for="p13o4">
          Moderadamente insatisfeito
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p13" id="p13o5" value="opcao5">
        <label class="form-check-label" for="p13o5">
          Muito insatisfeito
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 14 --}}
  <legend class="col-form-label pt-0"><b>
    14. Nas últimas quatro semanas, de modo geral, o quão satisfeito você tem estado com o seu relacionamento sexual com a sua parceira?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p14" id="p14o1" value="opcao1">
        <label class="form-check-label" for="p14o1">
          Muito satisfeito
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p14" id="p14o2" value="opcao2">
        <label class="form-check-label" for="p14o2">
          Moderadamente satisfeito 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p14" id="p14o3" value="opcao3">
        <label class="form-check-label" for="p14o3">
          Igualmente satisfeito e insatisfeito
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p14" id="p14o4" value="opcao4">
        <label class="form-check-label" for="p14o4">
          Moderadamente insatisfeito
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p14" id="p14o5" value="opcao5">
        <label class="form-check-label" for="p14o5">
          Muito insatisfeito
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 15 --}}
  <legend class="col-form-label pt-0"><b>
    15. Nas últimas quatro semanas, como você consideraria a sua confiança em conseguir ter e manter uma ereção?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p15" id="p15o1" value="opcao1">
        <label class="form-check-label" for="p15o1">
          Muito alta
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p15" id="p15o2" value="opcao2">
        <label class="form-check-label" for="p15o2">
          Alta
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p15" id="p15o3" value="opcao3">
        <label class="form-check-label" for="p15o3">
          Moderada
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p15" id="p15o4" value="opcao4">
        <label class="form-check-label" for="p15o4">
          Baixa
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p15" id="p15o5" value="opcao5">
        <label class="form-check-label" for="p15o5">
          Muito baixa
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 16 --}}
  <legend class="col-form-label pt-0"><b>
    16. Você consegue ejacular após o orgasmo do parceiro?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="p16" id="p16o1" value="opcao1">
        <label class="form-check-label" for="p16o1">
          Sim
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="p16" id="p16o2" value="opcao2">
        <label class="form-check-label" for="p16o2">
          Não
        </label>
      </div>

  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 17 --}}
  <legend class="col-form-label pt-0"><b>
    17. Você acredita que controla sua ejaculação na maioria das vezes?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}

      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="p17" id="p17o1" value="opcao1">
        <label class="form-check-label" for="p17o1">
          Sim
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="p17" id="p17o2" value="opcao2">
        <label class="form-check-label" for="p17o2">
          Não
        </label>
      </div>

  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 18 --}}
  <legend class="col-form-label pt-0"><b>
    18. Em quanto tempo ocorre a ejaculação?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p18" id="p18o1" value="opcao1">
        <label class="form-check-label" for="p18o1">
          Antes da penetração 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p18" id="p18o2" value="opcao2">
        <label class="form-check-label" for="p18o2">
          Após menos de um minuto
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p18" id="p18o3" value="opcao3">
        <label class="form-check-label" for="p18o3">
          Entre 2 - 5 minutos após iniciado ato sexual
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p18" id="p18o4" value="opcao4">
        <label class="form-check-label" for="p18o4">
          5 a 10 minutos após iniciado o ato sexual
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p18" id="p18o5" value="opcao5">
        <label class="form-check-label" for="p18o5">
          Mais de 10 minutos
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p18" id="p18o6" value="opcao6">
        <label class="form-check-label" for="p18o6">
          Não ejacula
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 19 --}}
  <legend class="col-form-label pt-0"><b>
    19. Você tem ereções matinais ou noturnas?
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
  <div class="row">
    {{--coluna 1--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p19" id="p19o1" value="opcao1">
        <label class="form-check-label" for="p19o1">
          Sim, sempre 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p19" id="p19o2" value="opcao2">
        <label class="form-check-label" for="p19o2">
          Às vezes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p19" id="p19o3" value="opcao3">
        <label class="form-check-label" for="p19o3">
          Diminuíram muito
        </label>
      </div>
    </div>
    {{--fim coluna 1--}}
    {{--coluna 2--}}
    <div class="col">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p19" id="p19o4" value="opcao4">
        <label class="form-check-label" for="p19o4">
          Sim, porém são rápidas e parciais
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="p19" id="p19o5" value="opcao5">
        <label class="form-check-label" for="p19o5">
          Não tenho mais
        </label>
      </div>
    </div>
    {{--fim coluna 2--}}
  </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 20 --}}
  <legend class="col-form-label pt-0"><b>
    20.
  </b></legend>
  <div class="form-row">
    <label for="p20" class="col-form-label pt-0"><b>
      Melhor ereção:
    </b></label>
  <div class="col-md-1">
    <input type="text" name="p20" class="form-control text-center form-control-sm" id="p20" value="" >
  </div>

  <div class="col-md-1"></div>
  
  <div class="col">
  <div class="input-group input-group-sm mb-3">
    <label for="p20_1"><b>
      Masturbação: &nbsp;
    </b></label>
      <input type="text" name="p20_1" class="form-control form-control-sm text-center col-md-1" id="p20-1" value="">
    <div class="input-group-append">
      <span class="input-group-text" id="inputGroup-sizing-sm"><b>%</b></span>
    </div>
  </div>
</div>
</div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>
  {{-- PERGUNTA 21 --}}
  <legend class="col-form-label pt-0"><b>
    21.
  </b></legend>
  <div class="form-row">
    <div class="col">
    <div class="input-group input-group-sm mb-3">
  <label for="p21"><b>
    Penetração sexual obtida: &nbsp;
  </b></label>
    <input type="text" name="p21" class="form-control form-control-sm text-center col-md-1" id="p21" value="">
  <div class="input-group-append">
    <span class="input-group-text" id="inputGroup-sizing-sm"><b>/10 vezes</b></span>
  </div>
</div>
</div>
 </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}

  {{-- PERGUNTA 22 --}}
  <legend class="col-form-label pt-0"><b>
    22. Progressão:
  </b></legend>
  {{-- OPÇÕES DE RESPOSTA --}}
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="p22" id="p22o1" value="opcao1">
      <label class="form-check-label" for="p22o1">
        Súbita
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="p22" id="p22o2" value="opcao2">
      <label class="form-check-label" for="p22o2">
        Lentamente progressiva
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="p22" id="p22o3" value="opcao3">
      <label class="form-check-label" for="p22o3">
        Rapidamente progressiva
      </label>
    </div>
  {{-- FIM DE OPÇÕES DE RESPOSTA --}}
  <br>  <br>
  {{--BOTÕES--}}
  <div class="card bg-light text-center">
    <div class="card-body">
        <a href="{{ route('pacientes.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
        <a href="#" class="btn btn-secondary"><i class="fa fa-print"></i> Imprimir</a>
    </div>
  </div>

  </form>