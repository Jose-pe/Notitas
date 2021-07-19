@extends('layout')

@section('contenido')
    
    <section class="container mt-5">

         

        <form action="{{route('storetarea')}}" method="post">

            @csrf
            @method('PUT')
            <div class="input-group mt-4 mb-1">
                <input type="hidden" name="id_usuario" value="{{auth()->user()->id}}" class="form-control" >
                <input type="text" name="titulo" class="form-control" placeholder="Titulo de la Notita" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group">
                
                <textarea class="form-control" name="tarea" rows="15" placeholder="Descripcion de la Notita!!!"></textarea>
            </div>

            <div class="input-group mt-2 mb-2">
                <input class="form-control" type="date" name="recordatoriofecha" id="">   -   
                <input class="form-control" type="time" name="recodatoriohora" id="">
            </div>
            
            <div class="input-group">

                <input type="submit" class="form-control btn btn-success btn-lg " value="Crear Notita">
               
            </div>
            

         </form>

    </section>

@endsection