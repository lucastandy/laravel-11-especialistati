@extends('admin.layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
    <h1>Detalhes do Usuário</h1>

    <ul>
        <li><strong>Nome:</strong> {{ $user->name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
    </ul>
    <x-alert/>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Deletar</button>
    </form>
@endsection
