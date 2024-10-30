@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1>Editar Usuário {{$user->name}}</h1>
    <x-alert/>

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
        <input type="email" name="email" placeholder="Email" value="{{ $user->email }}">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Enviar</button>
    </form>
@endsection