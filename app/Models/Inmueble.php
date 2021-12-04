<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    //
    
    public $fillable = [
        'modelo'        ,
        'valor'         ,
        'superficieplana' ,
        'construccion'  ,
        'habitaciones'  ,
        'banos'         ,
        'cochera'       ,
        'plazas'         ,
        'sectodid'
    ];
}
