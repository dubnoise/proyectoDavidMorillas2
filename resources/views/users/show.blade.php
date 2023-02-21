@extends('layout')
@section('inicio', 'Inicio - David Morillas')
@section('contenido')
<div class="miembro">
    <table>
        <tr>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Fecha de nacimiento</th>
            <th>Rol</th>
            <th>Twitter</th>
            <th>Instagram</th>
            <th>Twitch</th>
        </tr>
        <tr>
            <td><img src={{asset('profileImg/'.$user->id.'.jpg')}}></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->birthday}}</td>
            <td>{{$user->rol}}</td>
            <td>{{$user->twitter}}</td>
            <td>{{$user->instagram}}</td>
            <td>{{$user->twitch}}</td>
        </tr>
    </table>
</div>

@endsection



