@extends('layout')

@section('contenido')
    <h3>Eventos</h3><br>
    <div class="eventos">
        <table>
            <tr>
                <th>EVENTO</th>
                <th>DESCRIPCIÓN</th>
            </tr>
            @forelse ($events as $event)
                <tr>
                    <td><a href={{route('events.show', $event->id)}}>{{$event->name}} - {{$event->id}}</a></td>
                    <td>{{$event->description}}</td>
                </tr>
            @empty
                No hay eventos.
            @endforelse
        </table>
    </div>
@endsection
