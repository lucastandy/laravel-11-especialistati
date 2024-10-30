@extends('admin.layouts.app')

@section('title', 'Criar Usuário')

@section('content')
    <h1>Novo Usuário</h1>
    
    {{-- @include('admin.includes.errors') --}}

    <x-alert/>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Enviar</button>
    </form>
@endsection