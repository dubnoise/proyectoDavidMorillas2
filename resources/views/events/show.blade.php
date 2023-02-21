@extends('layout')

@section('contenido')
<div class="evento">
    <table>
        <tr>
            <th>EVENTO</th>
            <th>DESCRIPCIÓN</th>
            <th>LUGAR</th>
            <th>FECHA</th>
            <th>HORA</th>
            <th>MIEMBROS</th>
        </tr>
        <tr>
            <td>{{$event->name}}</td>
            <td>{{$event->description}}</td>
            <td>{{$event->location}}</td>
            <td>{{$event->date}}</td>
            <td>{{$event->hour}}</td>
            <td>
            @forelse ($event->users as $miembro)
                <li>{{$miembro->name}}</li>
            @empty

            @endforelse
            </td>
        </tr>
        </table>
    @if (Auth::check() && !$event->users->contains(Auth::user()))
        <form action={{route('events.addEvent', $event)}} method="post">
            @csrf
            <tr><td><input class="btn" type="submit" value="Añadir"></td></tr>
        </form>
    @endif

    @if (Auth::check() && $event->users->contains(Auth::user()))
        <form action={{route('events.deleteEvent', $event)}} method="post">
            @csrf
            <tr><td><input class="btn" type="submit" value="Quitar"></td></tr>
        </form>
    @endif

    @if (Auth::check() && Auth::user()->rol == 'admin')
        <a class ="btn" href={{route('events.edit', $event->id)}}>Editar Evento</a>
        <form action={{route('events.destroy', ['event'=>$event->id])}} method="POST">
            @csrf
            @method('delete')
            <tr><td><input class ="btn" type="submit" value="Eliminar"></td></tr>
        </form>
    @endif


</table>
</div>

@endsection
