<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{                                   //estas clases no necesitamos usar porque:
    //protected $table ='categrias';//por defecto el modelo de laravel hace referencia a la tabla en plural
    //protected $primaryKey = 'id'; //eloquent asume que la llave primaria es una columna llamada id

    protected $fillable = ['nombre', 'descripcion', 'condicion'];//con  esta propiedad le decimos que a estos campos de la base de datos le vamos a asignar valores en masa 
}
