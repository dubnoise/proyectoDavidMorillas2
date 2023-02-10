@extends('layout')

@section('contenido')
    <form action={{route('login')}} method="POST" class="form-login">
        @csrf

        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="password">Contraseña</label>
        <input type="password" name="password">
        <input type="submit" value="Entrar" class="btn">
        @if (isset($error))
        <ul>
            <li>{{$error}}</li>
        </ul>
        @endif

    </form>

@endsection
