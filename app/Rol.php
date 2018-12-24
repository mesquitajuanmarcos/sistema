<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';//en laravel el modelo es el singular de la tabla, como nuestra clase es Rol la tabla deberia ser Rols pero como no es asi le agregamos una variable con el nombre de nuestra tabla
    protected $fillable = ['nombre','descripcion','condicion'];
    public $timestamps = false;

    public function users(){
    	return $this->hasMany('App\User');
    }
}
