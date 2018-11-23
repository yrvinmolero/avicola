<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoriasunidades extends Model
{
    protected $primaryKey = 'cunID';

    public function unidades()
    {
    	return $this->belongsTo('App\Models\Unidades', 'uniID');
    }

    public function categorias()
    {
    	return $this->belongsTo('App\Models\Categorias', 'catID');
    }

    public function stock()
    {
    	return $this->hasMany('App\Models\Stock', 'cunID');
    }

    public function stockNecesidades()
    {
        return $this->hasMany('App\Models\StockNecesidades', 'cunID');
    }
}
