<html>
    <head>
        <link rel='stylesheet' href='{{ URL::to("hw2-profile.css") }}'>
        <script src='{{ URL::to("hw2-profile.js") }}' defer></script>
		<script>
        const COMMENT = "{{ URL::to('profile/save_comment') }}";
        const PREFER = "{{ URL::to('profile/search_orange') }}";
		const csrf_token = "{{ csrf_token() }}";
   	 	</script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profilo</title>
    </head>

    <body>
    	<p id="logo">
      	<img src="https://sicibia.it/wp-content/uploads/2019/01/mandarini-bio.jpg"/></br>
      	<em> Azienda Agricola Gagliano</em>
    	</p>

    	<header>
      	<div id="overlay"></div>
    	<div id="uplay">Profilo di {{$user->username}}</div>
  	</header>
    
	  <nav>
      <a href='/recipe'>RICETTE</a>
      <a href='/social'>CONTATTI</a>
      <a href='/home'>HOME</a>
      <a href='/video'>VIDEO</a>
      <a href='/profile'>PROFILO</a>
    </nav>

        <main>

        <article>
	<div id="foto">
	<img src='{{ URL::to("IMG/user.png") }}'>
	</div>
	<div id="scheda">
	<h3>{{$user->username}}</h3>
	<h5>Nome: {{$user->name}}</h5>
	<h5>Cognome: {{$user->surname}}</h5>
	<h5>Email: {{$user->email}}</h5>
	<h5>Arance preferite: 
        <div id="results"></div>
	</h5>
	<h5>Scrivi una recensione:</h5>
	<form>
	@csrf
        <input type='text' name='commento' id='comment'>
	    <input type='number' max='5' min='1' name='stella' id='comment'>	
	    <input class="submit" type='submit' value='Invio'>
	</form>
	</br> <a id='l' href='{{ URL::to("/logout") }}'> Logout </a>
    </article>
	</main>
    </body>
</html>