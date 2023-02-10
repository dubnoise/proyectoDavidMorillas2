@extends('layout')
@section('inicio', 'Inicio - David Morillas')
@section('contenido')
<div class="miembros">
    <ul>
        <li>{{$user->name}} - {{$user->email}}</li><br>
    </ul>
</div>

@endsection



