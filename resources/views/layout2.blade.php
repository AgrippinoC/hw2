<html>
    <head>
        <title>@yield('title')</title>
        <link rel='stylesheet' href='{{ URL::to("hw2-log.css") }}'>
        <link rel="icon" type="image/x-icon" href='{{ URL::to("IMG/orange-xxl.ico") }}'>
        @yield('script')
        <meta name="viewport" content="width=device-width">
        <meta charset="utf-8">
    </head>

    <body>
         <p id="logo">
      <img src="https://sicibia.it/wp-content/uploads/2019/01/mandarini-bio.jpg"/></br>
      <em> Azienda Agricola Gagliano</em>
    	</p>

      @yield('content')
        
    </body>

</html>
