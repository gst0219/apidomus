<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CitaProspecto extends Model
{
    //
    public $fillable = [
        'id'              ,
        'prospectoid'     ,
        'promotorid'      ,
        'inmuebleid'      ,
        'fecha_solicitada',
        'tipocita' 
        
    ];
          
    
      
    public function prospecto(){
        return $this->BelongsTo('App\Models\Prospecto','prospectoid','id') -> withDefault();
        
    }
    
      
    public function promotor(){
        return $this->BelongsTo('App\Models\Promotor','promotorid','id') -> withDefault();
        
    }
    
      
    public function Inmueble(){
        return $this->BelongsTo('App\Models\Inmueble','inmuebleid','id') -> withDefault();
        
    }
    
    
    
}
