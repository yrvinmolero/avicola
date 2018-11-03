<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zonas extends Model
{
    protected $primaryKey = 'zonID';

    public function pubZonas()
    {
   		return $this->hasMany('App\Models\PubZonas', 'zonID');
    }

}
