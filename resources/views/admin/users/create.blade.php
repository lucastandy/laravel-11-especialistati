@extends('admin.layouts.app')

@section('title', 'Criar Usuário')

@section('content')
    <h1>Novo Usuário</h1>
    
    {{-- @include('admin.includes.errors') --}}

    <form action="{{ route('users.store') }}" method="post">
        @include('admin.users.partials.form')
    </form>
@endsection