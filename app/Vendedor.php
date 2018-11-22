<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    //
    protected $fillable =
    [
        'idVendedor','nombre','direccion','telefono','logo'
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function facturas()
    {
        return $this->hasMAny('App\Factura');
    }
}
