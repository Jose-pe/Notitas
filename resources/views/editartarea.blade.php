@extends('layout')

@section('contenido')
<section class="container mt-5">

         

    <form action="{{route('updatetarea', $tarea->id)}}" method="post">

        @csrf
        @method('PATCH')
        <div class="input-group mt-4 mb-1">
            <input type="hidden" name="id_usuario" value="{{auth()->user()->id}}" class="form-control" >
            <input type="text" name="titulo" class="form-control" value="{{$tarea->titulo}}" aria-describedby="basic-addon1">
        </div>

        <div class="input-group">
            
            <textarea class="form-control" name="tarea" rows="15" value="{{$tarea->tarea}}"> {{$tarea->tarea}} </textarea>
        </div>

        <div class="input-group mt-2 mb-2">
            <input class="form-control" type="date" name="recordatoriofecha" value="{{$tarea->recordatoriofecha}}" id="">   -   
            <input class="form-control" type="time" name="recodatoriohora" value="{{$tarea->recodatoriohora}}" id="">
        </div>
        
        <div class="input-group">

            <input type="submit" class="form-control btn btn-success btn-lg " value="Modifar Notita">
           
        </div>
        

     </form>

</section>

@endsection