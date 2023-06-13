@extends('layout2')
@section('title', 'Iscrizione')
@section('script')
<script src='{{ URL::to("hw2-registra.js") }}' defer></script>
	<script>
        const CHECK_USER = "{{ URL::to('signup/check/username') }}";
        const CHECK_EMAIL = "{{ URL::to('signup/check/email') }}";
    </script>
@stop
@section('content')
    <nav>
	PAGINA DI REGISTRAZIONE
    </nav>

    <main>
    <section class="campi">
	<h1>Iscriviti gratuitamente</h1>
    <form name='signup' method='post' autocomplete="off">
    @csrf
    
        <div class="name">
        <label for='name'>Nome</label>
        <input type='text' name='name' value='{{ old("name") }}'>
        <div><span>Nome non valido</span></div>
        </div>
                    
        <div class="surname">
        <label for='surname'>Cognome</label>
        <input type='text' name='surname' value='{{ old("surname") }}'>
        <div><span>Cognome non valido</span></div>
        </div>
    

        <div class="username">
        <label for='username'>Nome utente</label>
        <input type='text' name='username' value='{{ old("username") }}'>
        <div><span>Nome utente non disponibile</span></div>
        </div>

        <div class="email">
        <label for='email'>Email</label>
        <input type='text' name='email' value='{{ old("email") }}'>
        <div><span>Email non valida</span></div>
        </div>

        <div class="password">
        <label for='password'>Password</label>
        <input type='password' name='password'>
        <div><span>Inserisci almeno 10 caratteri</span></div>
        </div>

        <div class="confirm_password">
        <label for='confirm_password'>Conferma Password</label>
        <input type='password' name='confirm_password'>
        <div><span>Le due password non coincidono</span></div>
        </div>
                
            @foreach($errors->all() as $err)
            <div class='allarme'><span>{{ $err }}</span></div>
            @endforeach

        <div class="submit">
        <input type='submit' value="Registrati" id="submit">
        </div>

    </form>

    <a id='l' href="{{ URL::to('login') }}">Accedi se già registrato</a>
	</br>
    </section>
    </main>
    
@stop