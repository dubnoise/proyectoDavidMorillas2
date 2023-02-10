@extends('layout')
@section('inicio', 'Inicio - David Morillas')
@section('contenido')
<div class="eventos">
    <table>
        <tr>
            <th>EVENTO</th>
            <th>DESCRIPCIÓN</th>
            <th>LUGAR</th>
            <th>FECHA</th>
            <th>HORA</th>
        </tr>
        <tr>
            <td>{{$event->name}}</td>
            <td>{{$event->description}}</td>
            <td>{{$event->location}}</td>
            <td>{{$event->date}}</td>
            <td>{{$event->hour}}</td>
        </tr>
    </table>
    <a href={{route('events.edit', $event->id)}}>Editar Evento</a>
    <form action={{route('events.destroy', ['event'=>$event->id])}} method="POST">
        @csrf
        @method('delete')
        <input type="submit" value="Eliminar">
    </form>
</div>

@endsection
