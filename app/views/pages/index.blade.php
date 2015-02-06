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
            <a href="#">HEM</a>
            <a href="#">REGISTRERA DIG</a>
          </div>
        </nav>  
      </div>
      
      <div class="banner">
        <div class="container">
         
          <!--LOGIN FRAME-->
          <div class="row row-centered">
            <div id="login-frame" class="col-2 col-centered">
              <h2>LOGGA IN</h2>
              <div class="row row-centered">
                <div class="col-2 col-centered">
                  {{ Form::open(['route' => 'sessions.store']) }}
                    
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email') }}

                    {{ Form::label('password', 'Lösenord:') }}
                    {{ Form::password('password') }}
                    
                    {{ Form::submit('Logga in', ['class' => 'button btn-primary']) }}
                    
                  {{ Form::close() }}
                </div>
              </div>
            </div>
          </div> <!--ROW COLLAPSE-->
          <!--LOGIN FRAME COLLAPSE-->

        </div>
      </div>

    </header>


  </body>
</html>