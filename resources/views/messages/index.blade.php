@extends('layout')

@section('contenido')
    <h3>Mensajes</h3><br>
    <div class="mensajes">
        @forelse ($messages as $message)
        <ul>
            <form action={{route('messages.update', $message)}} method="POST">
                @csrf
                @method('put')
                <input type="hidden" name="name" value={{$message->name}}>
                <input type="hidden" name="subject" value={{$message->subject}}>
                <input type="hidden" name="text" value={{$message->text}}>
                <input type="hidden" name="readed" value="1">
                @if ($message->readed == '1')
                    <a class="leido" href={{route('messages.show', $message)}}><input type="submit" value="{{$message->name.' - '.$message->subject}}"></a>
                @else
                    <a class="no_leido" href={{route('messages.show', $message)}}><input type="submit" value="{{$message->name.' - '.$message->subject}}"></a>
                @endif

            </form>
        </ul>
        @empty
            No hay mensajes.
        @endforelse
    </div>

@endsection
