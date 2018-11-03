<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pubzonas extends Model 
{
    protected $primaryKey = 'pozID';

    public function publicaciones() 
    {
        return $this->belongsTo('App\Models\Publicaciones', 'pubID');
    }

   public function zonas()
   {
   		return $this->belongsTo('App\Models\Zonas', 'zonID');
   }

}
