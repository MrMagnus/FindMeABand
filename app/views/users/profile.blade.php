@extends('master')

@section('content')
  
  <div class="banner">
      <div class="container">

      {{ $user->name }}
  
      @foreach($user->bands as $band)
        {{ $band->name }}
      @endforeach
    
    </div>
  </div>
  
  

@stop