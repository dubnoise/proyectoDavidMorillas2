@extends('layout')

@section('contenido')

<form action={{route('users.update', auth()->user()->id)}} method="POST" class="form-account" enctype="multipart/form-data">
    @csrf
    @method('put')

    {{-- <label for="name">Nombre</label>
    <input type="text" name="name" value="{{$user->name}}">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{$user->email}}"> --}}
    <label for="birthday">Fecha de nacimiento</label>
    <input type="date" name="birthday" value="{{$user->birthday}}">
    <label for="twitter">Twitter</label>
    <input type="text" name="twitter" value="{{$user->twitter}}">
    <label for="instagram">Instagram</label>
    <input type="text" name="instagram" value="{{$user->instagram}}">
    <label for="twitch">Twitch</label>
    <input type="text" name="twitch" value="{{$user->twitch}}">
    <label for="profile_img">Cambiar foto de perfil</label>
    <input type="file" name="profile_img">
    <input type="submit" value="Guardar">
</form>

@endsection
