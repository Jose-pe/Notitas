<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tarea extends Model
{
 

    protected $table = 'tareas';
    

    protected $fillable = [
        'id',
        'titulo',
        'tarea',
        //arreglar este erro tipografico y volve a hacer la migracion
        'recordatoriofecha',
        'recodatoriohora',
        'id_usuario'


    ];

    public function user(){
        return $this->belongsTo('app/User');
    }

}
