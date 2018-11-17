<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuarioestablecimiento extends Model
{

    public function usuarios()
    {
        return $this->belongsTo('App\Models\Usuarios', 'usuID');
    }

    public function zonas()
    {
        return $this->belongsTo('App\Models\Zonas', 'zonID');
    }

    public function usuariotipos()
    {
        return $this->belongsTo('App\Models\Usuariotipos', 'ustID');
    }

}
