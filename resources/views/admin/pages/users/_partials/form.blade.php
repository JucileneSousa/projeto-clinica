@include('admin.includes.alerts')

@csrf

<div class="form-group row">
    <label for="inputNome" class="col-sm-2 col-form-label">Nome:</label>
    <div class="col-sm-6">
    <input type="text" name="nome" value="{{ $user->name ?? old('nome') }}" class="form-control" id="inputNome" placeholder="Nome">
    </div>
</div>

<div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">E-mail:</label>
    <div class="col-sm-6">
        <input type="email" name="email" value="{{ $user->email ?? old('email') }}" class="form-control" id="inputEmail" placeholder="E-mail">
    </div>
</div>

<div class="form-group row">
    <label for="inputSenha" class="col-sm-2 col-form-label">Senha:</label>
    <div class="col-sm-6">
        <input type="password" name="senha" value="{{ $user->password ?? old('senha') }}" class="form-control" id="inputSenha" placeholder="Senha">
    </div>
</div>

<div class="form-group row">
    <label for="inputPerfil" class="col-sm-2 col-form-label">Perfil:</label>
    <div class="col-sm-6">
        <select class="form-control">
            <option>Selecionar</option>
            <option>Recepção</option>
            <option>Financeiro</option>
            <option>Assessor</option>
            <option>Plantonista</option>
          </select>
    </div>
    </div>

<div class="form-group row">
    <div class="col-sm-10">
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>