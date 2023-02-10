@extends('layout')

@section('añadirevento', 'Inicio - David Morillas')

@section('contenido')

<div class="div-anyadir-evento">
    <h3>Añadir evento</h3><br>
    <form action={{route('events.store')}} method="post" class="anyadir-evento">
        @csrf

        <label for="name">Nombre del evento</label>
        <input type="text" name="name">
        <label for="description">Descripción</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
        <label for="location">Lugar</label>
        <input type="text" name="location"><br>
        <label for="date">Fecha</label>
        <input type="date" name="date"><br>
        <label for="hour">Hora</label>
        <input type="time" name="hour"><br>
        <label for="tags">Tags</label>
        <input type="text" name="tags"><br>
        <input type="submit" value="Crear evento">
    </form>
</div>

@endsection
