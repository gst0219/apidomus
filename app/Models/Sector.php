<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    //
    protected $table="sectores";
    
    public $fillable = [
        'nombreSector'
    ];
}
