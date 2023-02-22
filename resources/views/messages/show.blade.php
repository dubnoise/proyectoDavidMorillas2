@extends('layout')

@section('contenido')
    <div class="mensaje">
        <table>
            <tr>
                <td>Nombre</td>
                <td>Asunto</td>
                <td>Texto</td>
                <td>Leído</td>
                <td></td>
            </tr>
            <tr>
                <th>{{$message->name}}</th>
                <th>{{$message->subject}}</th>
                <th>{{$message->text}}</th>
                @if ($message->readed == '0')
                    <th>No</th>
                @else
                    <th>Si</th>
                @endif
                @if (Auth::check() && Auth::user()->rol == 'admin')
                <form action={{route('messages.destroy', ['message'=>$message->id])}} method="POST">
                    @csrf
                    @method('delete')
                    <th><input class="btn" type="submit" value="Eliminar"></th>
                </form>
            @endif
            </tr>

        </table>

    </div>

@endsection
