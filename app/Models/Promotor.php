<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotor extends Model
{
    //
    protected $table = "promotores";
    
    public $fillable = [
        'id'             ,
        'nombre'         ,
        'apellido_p'     ,
        'apellido_m'     ,
        'numempleado'    ,
        'email'          ,
        'password'       ,
        'curp'           ,
        'rfc'            ,
        'nss'            ,
        'foto'           ,
        'fecha_nacimiento',
        'genero'         ,
        'num_telefono'   ,
        'ocupacion'      ,
    ];
    
    
    public function ocupacionData(){
        return $this->BelongsTo('App\Models\Ocupacion','ocupacion','id') -> withDefault();
        
    }
}
