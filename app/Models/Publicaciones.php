<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model 
{
	protected $fillable = ['usuID', 'pubTitulo', 'pubDescripcion', 'pubPrecio', 'pubEstado'];

	protected $primaryKey = 'pubID';


    public function usuarios() 
    {
        return $this->belongsTo('App\Models\Usuarios', 'usuID');
    }


    public function stock() 
    {
        return $this->hasMany('App\Models\Stock', 'pubID');
    }

}
