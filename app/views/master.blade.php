<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Stuff</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/partials.css">

  </head>
  
  <body>
    <header>
      
      
      
      <div class="container">
        <nav class="row">
          <div id="logo" class="col-2"><h2>FINDMEABAND!</h2></div>
          <div id="nav-links" class="col-2">
            
            @if( Request::url() == route('home'))
              <a href="{{route('home')}}">HEM</a>
              <a href="#">REGISTRERA DIG</a>
            @else
              <a href="{{route('user_profile')}}">PROFIL</a>
              <a href="#">BAND</a>
              <a href="#">MATCHNINGAR</a>
              <a href="{{route('logout')}}">LOGGA UT</a>
            @endif

          </div>
        </nav>  
      </div> <!-- CONTAINER COLLAPSE -->

    </header>
   
    @yield('content')

  </body>
</html>