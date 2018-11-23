<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{

    //protege y declara los campos que pueden ser modificados por el usuario
    //de igual manera sirve para insertar de manera inplicita en la tabla usuarios
    protected $fillable = ['usuario', 'correo', 'clave', 'nombre', 'direccion', 'telefono', 'usuEstado'];
    protected $primaryKey = 'usuID';

    public function publicaciones()
    {
        return $this->hasMany('App\Models\Publicaciones', 'usuID');
    }

    public function usuarioestablecimiento()
    {
        return $this->hasMany('App\Models\usuarioestablecimiento', 'estID');
    }

    public function necesidades()
    {
        return $this->hasMany('App\Models\Necesidades', 'usuID');
    }

}
