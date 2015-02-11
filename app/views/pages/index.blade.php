@extends('master')
  @section('content')
      
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
                  {{ Form::text('email', null, ['class' => 'w100']) }}

                  {{ Form::label('password', 'Lösenord:') }}
                  {{ Form::password('password', null, ['class' => 'w100']) }}
                  
                  {{ Form::submit('Logga in', ['class' => 'button btn-primary']) }}
                  
                {{ Form::close() }}
              </div>
            </div>
          </div>
        </div>
        <!--LOGIN FRAME COLLAPSE-->

      </div>
    </div>

  @stop