@extends('layout')

@section('contenido')
    <h3>Mensajes</h3><br>
    <div class="mensajes">
        @forelse ($messages as $message)
        <ul>
            <li>{{$message->name}} - {{$message->text}}</li><br>
        </ul>
        @empty
            No hay mensajes.
        @endforelse
    </div>

@endsection
