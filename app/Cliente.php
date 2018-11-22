<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable =
    [
        'idCliente','RFC','nombre','fecha','localidad','direccion','telefono','email'
    ];

    public function facturas()
    {
        return $this->hasMany('App\Factura');
    }
}
