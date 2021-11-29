<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EtapasDesarrollo extends Model
{
    //
    
    public $fillable = [
        'id'           ,
        'numero_etapa' ,
        'campo'        ,
        'estado_etapa' ,
        'sectorid'     ,
        'numero_casas' ,
        'promotorid'   ,
        'fecha_inicio' ,
        'fecha_fin'    ,
    ];
    
    public function sector(){
        return $this->BelongsTo('App\Models\Sector','sectorid','id') -> withDefault();
        
    }
    
    public function promotor(){
        return $this->BelongsTo('App\Models\Promotor','promotorid','id') -> withDefault();
        
    }
}
