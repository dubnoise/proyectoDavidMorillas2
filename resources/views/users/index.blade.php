@extends('layout')

@section('contenido')
    <h2>Miembros</h2>
    <div class="miembros">
        @if (Auth::check())
            @forelse ($users as $user)
            <ul>
                <li><img src={{asset('profileImg/'.$user->id.'.jpg')}} alt="profileImg"><a href={{route('users.show', $user->id)}}>{{$user->name}}</a></li><br>
            </ul>
            @empty
                No hay usuarios.
            @endforelse
        @else
            @forelse ($users as $user)
            <ul>
                <li><img src={{asset('profileImg/'.$user->id.'.jpg')}} alt="profileImg">{{$user->name}}</li><br>
            </ul>
            @empty
                No hay usuarios.
            @endforelse
        @endif

    </div>


@endsection
