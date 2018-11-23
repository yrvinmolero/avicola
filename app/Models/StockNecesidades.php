<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stocknecesidades extends Model
{
    protected $fillable = ['stnCantidad', 'cunID', 'disID', 'necID', 'zonID', 'stnEstado'];

	protected $primaryKey = 'stnID';

	public function categoriasUnidades()
    {
        return $this->belongsTo('App\Models\CategoriasUnidades', 'cunID');
    }

    public function distribuciones()
    {
        return $this->belongsTo('App\Models\Distribuciones', 'disID');
    }

    public function necesidades()
    {
        return $this->belongsTo('App\Models\Necesidades', 'necID');
    }
    

    public function zonas()
    {
        return $this->hasOne('App\Models\Zonas', 'zonID');
    }
}
