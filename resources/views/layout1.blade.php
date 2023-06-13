<html>
<head>
<title>@yield('title')</title>
<link rel="icon" type="image/x-icon" href='{{ URL::to("IMG/orange-xxl.ico") }}'>
<link rel="stylesheet" href='{{ URL::to("hw2.css") }}' />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
@yield('script')
</head>
  <body>

     <p id="logo">
      <img src="https://sicibia.it/wp-content/uploads/2019/01/mandarini-bio.jpg"/></br>
      <em> Azienda Agricola Gagliano</em>
    </p>

    <header>
      <div id="overlay"></div>
      <div id="uplay">Agrumi di Sicilia</br></div>
    </header>
    
    <nav>
      <a href='/recipe'>RICETTE</a>
      <a href='/social'>CONTATTI</a>
      <a href='/home'>HOME</a>
      <a href='/video'>VIDEO</a>
      <a href='/profile'>PROFILO</a>
    </nav>

    <article>
    @yield('content')
    </article>

    <footer>Casaccio Agrippino M:1000014638</footer>
</body>

