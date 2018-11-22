<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable =
    [
        'idProducto','nombre','cantidad'
    ];

    public function productos()
    {
        return $this->belongstoMany('App\Producto');
    }
}
