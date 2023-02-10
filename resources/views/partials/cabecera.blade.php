<a href="/"><img src="{{ asset('img/logo_carrancs.jpg') }}" alt="logo_carrancs"></a>
<a href="/"><h2>UDM CARRANCS</h2></a>
<nav>
    <ul>


        @if (Auth::check())
            <a href="/"><li>Inicio</li></a>
            <a href={{route('users.index')}}><li>Miembros</li></a>
            <a href={{route('events.index')}}><li>Eventos</li></a>
            <a href={{route('messages.create')}}><li>Contacto</li></a>
            <a href="dondeestamos"><li>Dónde estamos</li></a>
            <a href={{route('events.create')}}><li>Añadir evento</li></a>
            <a href={{route('messages.index')}}><li>Mensajes</li></a>
            <a href={{route('login')}}><li>Cuenta</li></a>
            <a href={{route('logout')}}><li>Logout</li></a>
        @else
            <a href="/"><li>Inicio</li></a>
            <a href={{route('users.index')}}><li>Miembros</li></a>
            <a href={{route('events.index')}}><li>Eventos</li></a>
            <a href={{route('messages.create')}}><li>Contacto</li></a>
            <a href="dondeestamos"><li>Dónde estamos</li></a>
            <a href={{route('registro')}}><li>Registro</li></a>
            <a href={{route('login')}}><li>Login</li></a>
            <a href={{route('logout')}}><li>Logout</li></a>
        @endif


    </ul>
</nav>


