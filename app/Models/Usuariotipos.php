<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuariotipos extends Model
{

    protected $primaryKey = 'ustID';

    public function usuarioestablecimiento()
    {
        return $this->belongsTo('App\Models\usuarioestablecimiento', 'ustID');
    }

}
