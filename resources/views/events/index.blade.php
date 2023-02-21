@extends('layout')

@section('contenido')
    <h3>Eventos</h3>
    <div class="eventos">
        <table>
            <tr>
                <th>EVENTO</th>
                <th>DESCRIPCIÓN</th>
            </tr>
            @forelse ($events as $event)

                <tr>
                    <td><a class="btn" href={{route('events.show', $event->id)}}>{{$event->name}}</a></td>
                    <td>{{$event->description}}</td>
                    @if (Auth::check() && !$event->users->contains(Auth::user()))
                    <form action={{route('events.addEvent', $event)}} method="post">
                        @csrf
                        <td><input class="btn" type="submit" value="Añadir"></td>
                    </form>
                @endif

                @if (Auth::check() && $event->users->contains(Auth::user()))
                    <form action={{route('events.deleteEvent', $event)}} method="post">
                        @csrf
                        <td><input class="btn" type="submit" value="Quitar"></td>
                    </form>
                @endif
                </tr>

            @empty
                No hay eventos.
            @endforelse

        </table>
    </div>
@endsection
