@extends('layout.site')
@section('titulo','Usuarios')
@section('conteudo')

<div class="container">
    <h4 class="center">LISTA DE USUÁRIOS</h4>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>email</th>
                    <th>Telefone</th>
                    <th>Endereco</th>
                </tr>
            </thead>
            <thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->telefone }}</td>
                    <td>{{ $user->endereco }}</td>
                </tr>                
                @endforeach
            </tbody>
            </thead>
        </table>
    </div>
</div>
@endsection