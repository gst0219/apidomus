<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgendaPromotor extends Model
{
    //+
    
    public $fillable = [
      'promotorid',
      'citaid',
      'fecha'  
    ];
    public function promotor(){
        return $this->BelongsTo('App\Models\Promotor','promotorid','id') -> withDefault();
        
    }
    public function cita(){
        return $this->BelongsTo('App\Models\CitaProspecto','citaid','id') -> withDefault();
        
    }
    
}
