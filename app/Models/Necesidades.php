<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Necesidades extends Model
{
    protected $fillable = ['usuID', 'necTitulo', 'necDescripcion', 'necEstado'];

	protected $primaryKey = 'necID';

	public function stockNecesidades()
    {
    	return $this->hasMany('App\Models\StockNecesidades', 'necID');
    }

    public function usuarios()
    {
    	return $this->belongsTo('App\Models\Usuarios', 'usuID');
    }
}
