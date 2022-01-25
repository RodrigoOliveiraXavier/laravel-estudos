@extends('Usuario.layouts.layout')

@section('title', 'Usuários/Blade')

@section('content')

    <h2>Logar</h2>

    <hr style="margin-bottom: 15px; " />

    <form method="post">
        @csrf

        <b>Usuário:</b><br />
        <input type="text" name="Usuário"><br />

        <b>Senha:</b><br />
        <input style="margin-bottom: 15px;" type="password" name="Senha"><br />

        <input type="submit" value="Logar"><br />
    </form>

    @component('alert')
        teste
    @endcomponent

@endsection
