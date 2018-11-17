<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockZonas extends Model 
{
    protected $table = 'StockZonas';
    protected $primaryKey = 'pzoID';

    protected $fillable = ['zonID', 'stoID', 'pzoMinimo', 'pzoEstado'];

    public function stock() 
    {
        return $this->belongsTo('App\Models\stock', 'stoID');
    }

    public function zonas()
    {
   		return $this->belongsTo('App\Models\Zonas', 'zonID');
    }

}
