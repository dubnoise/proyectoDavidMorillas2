@extends('layout')

@section('titulo', 'Editar Evento')

@section('contenido')
    <div class="div-anyadir-evento">
        <form action={{route('events.update', $event->id)}} method="POST" class="anyadir-evento">
            @csrf
            @method('put')

            <label for="name">Título</label>
            <input type="text" name="name" id="name" value="{{$event->name}}">
            @error('name')
                <br>Error: {{$message}}
            @enderror
            <br>
            <label for="description">Descripcion</label>
            <textarea name="description" id="description" cols="30" rows="10">{{$event->description}}</textarea>
            @error('description')
                <br>Error: {{$message}}
            @enderror
            <br>
            <label for="location">Lugar</label>
            <input type="text" name="location" id="location" value={{$event->location}}>
            @error('location')
                <br>Error: {{$message}}
            @enderror
            <br>
            <label for="date">Fecha</label>
            <input type="date" name="date" id="date" value={{$event->date}}>
            @error('date')
                <br>Error: {{$message}}
            @enderror
            <br>
            <label for="hour">Hora</label>
            <input type="time" name="hour" id="hour" value={{$event->hour}}>
            @error('hour')
                <br>Error: {{$message}}
            @enderror
            <br>
            <label for="tags">Tags</label>
            <input type="text" name="tags" id="tags" value={{$event->tags}}>
            @error('tags')
                <br>Error: {{$message}}
            @enderror
            <br>

            <input type="submit" value="Guardar">
        </form>
    </div>

@endsection
