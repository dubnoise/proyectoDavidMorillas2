@extends('layout')

@section('contenido')
    <div class="mensaje">
        <table>
            <tr>
                <td>Nombre</td>
                <td>Asunto</td>
                <td>Texto</td>
                <td>Leído</td>
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

            </tr>
        </table>

    </div>

@endsection
