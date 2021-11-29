<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    
    public $fillable = [
        'id'               ,
        'nombre'           ,
        'apellido_p'       ,
        'apellido_m'       ,
        'genero'           ,
        'estadoCivil'      ,
        'nss'              ,
        'curp'             ,
        'tipoCredito'      ,
        'fecha_nacimiento' ,
        'num_telefono'     ,
        'fecha_captura'    ,
        'anticipo'         ,
        'genero'           ,
        'promotorid'       ,
        'prospectoid'      ,
        'usuario'           ,
        'password'
    ];
           
    public function promotor(){
        return $this->BelongsTo('App\Models\Promotor','promotorid','id') -> withDefault();
        
    } 
    
    public function prospecto(){
        return $this->BelongsTo('App\Models\Promotor','prospectoid','id') -> withDefault();
        
    } 
    
    
    
}
