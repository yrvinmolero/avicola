<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model 
{

	protected $primaryKey = 'pubID';

    public function pubZonas() 
    {
        return $this->hasOne('App\Models\PubZonas', 'pubID');
    }

    public function usuarios() 
    {
        return $this->belongsTo('App\Models\Usuarios', 'usuID');
    }

}
