<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    protected $fillable = ['stoCantidad', 'cunID', 'disID', 'pubID', 'stoPrecio', 'stoEstado'];
    protected $primaryKey = 'stoID';
    protected $table = "stock";

    public function categoriasUnidades()
    {
        return $this->belongsTo('App\Models\CategoriasUnidades', 'cunID');
    }

    public function distribuciones()
    {
        return $this->belongsTo('App\Models\Distribuciones', 'disID');
    }

    public function publicaciones()
    {
        return $this->belongsTo('App\Models\Publicaciones', 'pubID');
    }
    

    public function stockzonas()
    {
        return $this->hasOne('App\Models\Stockzonas', 'stoID');
    }

}
