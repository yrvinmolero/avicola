<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
	protected $primaryKey = 'uniID';

    public function categoriasUnidades()
    {
    	return $this->hasMany('App\Models\CategoriasUnidades', 'uniID');
    }
}
