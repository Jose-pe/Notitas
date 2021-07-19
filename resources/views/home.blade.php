@extends('layout')

@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($tareas as $tarea)
            <div class="card mt-5">
                <h5 class="card-header text-primary">{{$tarea->titulo}}</h5>
                <div class="card-body">
                 
                  <p class="card-text text-secondary">{{$tarea->tarea}}</p>
                  <div class="text-right mt-3 mb-3">

                    @if (is_null($tarea->recordatoriofecha))

                    @else

                    <small class="text-info ">Recordatorio para el {{ date('d/m/Y', strtotime($tarea->recordatoriofecha))}} a las {{date('H:i', strtotime ($tarea->recodatoriohora))}} horas</small>

                    @endif
                  </div>
                  <div class="row">
                        <div class="col">
                            <form action="{{route('deletetarea', $tarea->id)}}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-success btn-sm">Hecho</button> 
                            </form>
                        </div>
                        <div class="col">
                            <form action="{{route('editartarea', $tarea->id)}}">
                                <button type="" class="btn btn-primary btn-sm">Editar</button>

                            </form>
                        </div>
                        <div class="col">
                            <button type="" class="btn btn-primary btn-sm">Archivar</button>

                        </div>
                        <div class="col">

                        </div>
                  </div>
                  
                  
                </div>
              </div>
              @endforeach
        </div>
    </div>
</div>
{{--
<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Tarea</th>
        <th>Fecha</th>
        <th>hora</th>
    </tr>

@foreach ($tareas as $tarea)
    <tr> 
        <th>{{$tarea->id}}</th>
        <th>{{$tarea->titulo}}</th>
        <th>{{$tarea->tarea}}</th>
        <th>{{$tarea->recordatoriofecha}}</th>
        <th>{{$tarea->recodatoriohora}}</th>
        <th>
            <form action="{{route('deletetarea', $tarea->id)}}" method="POST" >
                @csrf
                @method('DELETE')
                <button type="submit"  class="btn btn-success">Hecho</button> 
            </form>
        </th>
        <th>
            <button type="" class="btn btn-primary">Editar</button>
        </th>
           


        
    </tr>      
@endforeach
</table>
--}}

@endsection