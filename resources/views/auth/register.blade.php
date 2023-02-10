@extends('layout')

@section('contenido')
    <form action={{route('registro')}} method="POST" class="form-registro">
        @csrf

        <h3>Registro</h3>
        <label for="name">Nombre</label>
        <input type="text" name="name" value={{old('name')}}>
        <label for="email">Email</label>
        <input type="text" name="email" value={{old('email')}}>
        <label for="password">Contraseña</label>
        <input type="password" name="password">
        <label for="birthday">Fecha de nacimiento</label>
        <input type="date" name="birthday" value={{old('birthday')}}>
        <input type="submit" value="Enviar" class="btn">
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    </form>



@endsection
