<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';//indicamos la tabla a la que hacemos referencia
    protected $fillable = [//indicamos los campos para obtener y enviar valores
        'id', 'contacto', 'telefono_contacto'
    ];

    public $timestamps = false;

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }


}
