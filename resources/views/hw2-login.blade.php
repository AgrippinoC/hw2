@extends('layout2')
@section('title', 'Accesso')
@section('script')
<script src='{{ URL::to("hw2-login.js") }}' defer></script>
@stop
@section('content')
<nav>
	PAGINA D'ACCESSO
    </nav>
	@foreach($errors->all() as $err)
            <p class='allarme'>{{ $err }}</p>
        @endforeach
	<main>
	<section class="campi">
	    <h1>Accedi al sito</h1>
            <form name='login' method='post'>
            @csrf
                <p class="username">
                    <label>Username <input type='text' name='username' value='{{ old("username") }}'></label>
                    <div class='allarme'><span></span></div>
		</p>
                <p class="password">
                    <label>Password <input type='password' name='password'></label>
                </p>
                <p class="submit">
                    <input type='submit' value="ACCEDI">
                </p>
            </form>
	<a href="{{ URL::to('signup') }}">REGISTRATI</a>
	</section>
	</main>
@stop