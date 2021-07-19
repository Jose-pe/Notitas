<?php

namespace App\Http\Controllers;

use App\Tarea;
use Auth;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $tareas = Tarea::all()->where('id_usuario',Auth::user()->id)->sortBy('recordatoriofecha');
        if (!$tareas->count()) {
            return view('nuevousuario');
        }
        else {
            return view('home',compact('tareas'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('creartarea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosvalidados = $request->validate([
            'titulo' => 'max:200',
            'tarea' =>'max:500',
            'recordatoriofecha' => 'nullable|date',
            'recodatoriohora' => 'nullable',
            'id_usuario' => 'required'
        ]);

        $tarea = Tarea::create($datosvalidados);
        return redirect('/home')->with('Mensaje','Tarea creada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea, $id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('editartarea', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea, $id)
    {
        $datosvalidados = $request->validate([
            'titulo' => 'max:200',
            'tarea' =>'max:500',
            'recordatoriofecha' => 'nullable|date',
            'recodatoriohora' => 'nullable',
            'id_usuario' => 'required'
        ]);

        Tarea::whereId($id)->update($datosvalidados);
        return redirect('home')->with('mensaje', 'Notita modificada con Exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea, $id)
    {
        //
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return redirect('home')->with('mensaje','Tarea Removida');
    }
}
