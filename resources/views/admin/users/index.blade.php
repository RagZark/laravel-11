@extends('admin.layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')

<h1>Usuários</h1>

<a href="{{ route('users.create') }}">Novo</a>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    <tbody>
        <tr>
            @forelse ($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>-</td>
        </tr>
        @empty
        <tr>
            <td colspan="100">Nenhum usuário no banco.</td>
        </tr>
        @endforelse
        </tr>
    </tbody>
    </thead>
</table>

{{$users->links()}}

@endsection