@extends('layout')
@section('contenido')
    
<div class="jumbotron">
    <h1 class="display-4">Hola {{ Auth::user()->name }} todavia no tienes ninguna Notita !</h1>
    <p class="lead">Vamos a crear una Notita ahora</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" href="{{route('creartarea')}}" role="button">Crear Notita</a>
  </div>      

@endsection