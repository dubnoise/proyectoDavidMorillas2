@extends('layout')

@section('contacto', 'Inicio - David Morillas')

@section('contenido')
    <h3>Contacto</h3>

    <form action={{route('messages.store')}} method="POST" class="contacto_mensaje">
        @csrf

        <label for="name">Nombre</label>
        <input type="text" name="name">
        <label for="subject">Subject</label>
        <input type="text" name="subject">
        <label for="text">Texto</label>
        <input type="text" name="text">
        <input type="submit" value="Enviar">
    </form>
@endsection
