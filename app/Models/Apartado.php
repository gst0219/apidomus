<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartado extends Model
{
    //
    
    public $timestamps= false;
    public $fillable = [
        'id'         ,
        'clienteid'  ,
        'fecha'      
                      
    ];
    
    public function cliente(){
        return $this->BelongsTo('App\Models\Cliente','clienteid','id') -> withDefault();
        
    }
    
    
    
    
}
