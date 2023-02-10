@extends('layout')

@section('contenido')
    <div class="miembros">
        <h3>Miembros</h3><br>
        @forelse ($users as $user)
        <ul>
            <li><a href={{route('users.show', $user->id)}}>{{$user->name}}</a></li><br>
        </ul>
        @empty
            No hay usuarios.
        @endforelse
    </div>


@endsection
