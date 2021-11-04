<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Prospecto extends Model
{
    //
    protected $fillable = [
    'id'              ,
    'nombre'          ,
    'apellido_p'      ,
    'apellido_m'      ,
    'genero'          ,
    'estadoCivil'     ,
    'nss'             ,
    'curp'            ,
    'tipoCredito'     ,
    'fecha_nacimiento',
    'genero'          ,
    'num_telefono'    ,
    'fecha_captura'   ,
    'anticipo'        ,
    'promotorid'      ,     
    ]; 
    
    
    public function promotor(){
        return $this->belongsTo( 'App\models\Promotor' , 'promotorid' , 'id' ) -> withDefault();
    }
}
