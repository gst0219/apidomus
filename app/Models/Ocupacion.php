<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Ocupacion extends Model
{
    //
    protected $table = "ocupaciones";
    
    public $fillable = [
        'nombre'
    ];
    
}
