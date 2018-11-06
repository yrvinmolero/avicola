<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $primaryKey = 'catID';

    public function categoriasUnidad()
    {
    	return $this->hasMany('App\Models\CategoriasUnidades', 'catID');
    }

}
