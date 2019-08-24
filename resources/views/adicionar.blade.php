@extends('layout.site')
@section('titulo','Cadastrar')
@section('conteudo')

<div class="container">
    <h3 class="center">Adicionar Usuarios</h3>
    <div class="row">

        <form method="post"action="{{route('user.salvar')}}">
            {{csrf_field()}}
            <div class="input-field">
                <input type="text"name="name"value=""/>
                <label>Nome</label>
            </div>
            <div class="input-field">
                <input type="text"name="email"value=""/>
                <label>E-mail</label>
            </div>
            <div class="input-field">
                <input type="text"name="telefone"value=""/>
                <label>Telefone</label>
            </div>
            <div class="input-field">
                <input type="text"name="endereco"value=""/>
                <label>Endereco</label>
            </div>
            <div class="input-field">
                <input type="password"name="password"value=""/>
                <label>Senha</label>
            </div>
    </div>
    <button class="btn deep-orange">Salvar</button>
</form>
</div>
</div>
@endsection