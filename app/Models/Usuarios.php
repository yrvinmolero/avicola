<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
	protected $primaryKey = 'usuID';

    public function publicaciones() 
    {
        return $this->hasMany('App\Models\Publicaciones', 'usuID');
    }
}
