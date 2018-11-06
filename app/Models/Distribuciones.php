<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribuciones extends Model
{
    protected $primaryKey = 'disID';

    public function stock()
    {
    	return $this->hasMany('App\Models\Stock', 'disID');
    }
 }
