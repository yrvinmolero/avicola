<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stockzonas extends Model
{

    protected $primaryKey = 'pzoID';
    protected $fillable = ['zonID', 'stoID', 'pzoMinimo'];

    public function publicaciones()
    {
        return $this->belongsTo('App\Models\Publicaciones', 'pubID');
    }

    public function zonas()
    {
        return $this->belongsTo('App\Models\Zonas', 'zonID');
    }

    public function stock()
    {
        return $this->belongsTo('App\Models\Stock', 'stoID');
    }

}
