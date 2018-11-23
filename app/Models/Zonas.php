<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zonas extends Model
{

    protected $primaryKey = 'zonID';

    public function stockzonas()
    {
        return $this->hasMany('App\Models\Stockzonas', 'pzoID');
    }

    public function usuarioestablecimiento()
    {
        return $this->belongsTo('App\Models\usuarioestablecimiento', 'estID');
    }

    public function stockNecesidades()
    {
        return $this->hasMany('App\Models\StockNecesidades', 'zonID');
    }

}
