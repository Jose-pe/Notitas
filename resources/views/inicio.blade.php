@extends('layout')
@section('contenido')
   
<div class="jumbotron">
    <h1 class="display-4">Hola, vamos a crear unas Notitas </h1>
    <p class="lead">Registrate y crea tus Notitas</p>
    <hr class="my-4">
    <p>Crea Notitas, editalas y elimina, accede siempre que quieras :) </p>
    
  @guest
    @if (Route::has('register'))
    <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Registrate</a>
    @endif
    
  @else
  <a class="btn btn-primary btn-lg" href="{{route('creartarea')}}" role="button">Crear Notitas</a>
    
  @endguest
    
  </div>

  <section class="container">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title text-primary">Usar Notitas es muy facil</h5>
          <p class="card-text">Solo escribe tus Notitas y revisalas cuando quieras.</p>
          <p class="card-text"><small class="text-muted">Notitas es para todos</small></p>
        </div>
        <img src="..." class="card-img-bottom" alt="...">
      </div>
  </section>
  
  

@endsection