<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    //
    protected $fillable =
    [
        'idfactura','iva','fechaFactura','idCliente','idVendedor'
    ];

    public function cliente()
    {
        return $this->hasOne('App\Cliente');
    }
    
    public function vendedor()
    {
        return $this->hasOne('App\Vendedor');
    }
}
