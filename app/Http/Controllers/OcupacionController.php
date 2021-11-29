<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocupacion;
use Illuminate\Support\Facades\Validator;

class OcupacionController extends Controller
{
    //
    public function index(){
        
        $ocupaciones = new Ocupacion();
        
        return  $ocupaciones->get();
    }
    
    public function create(Request $request){
            
        $data =Validator::make($request->all(),[
            'nombre' => 'required|max:50',
    
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        
        if(Ocupacion::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego la ocupación'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
    }
    
    public function edit(Request $request){
            
        $data =Validator::make($request->all(),[
            'nombre' => 'required|max:50',
            'id' => 'required',
            
    
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        $ocupacion =Ocupacion::findOrfail($request -> id);
        
        if($ocupacion->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se edito la ocupación'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
    }
        
    public function delete(Request $request){
        
        $data =Validator::make($request->all(),[
            'id' => 'required',
        ]);
        if($data -> fails()){
            return  ['resultado'=>false ,  $data ->errors()];
        }
        $ocupacion =Ocupacion::find($request -> id);
        
        if(!$ocupacion){
            return ['resultado'  => true , 'msg' => 'No se encontro la ocupación'];
            
        }
        
        if($ocupacion->delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino la ocupación'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
    
        
    }
    
    public function getOcupacion(Request $request){
        
        $data =Validator::make($request->all(),[
            'id' => 'required',
        ]);
        if($data -> fails()){
            return  ['resultado'=>false ,  $data ->errors()];
        }
        $ocupacion =Ocupacion::find($request -> id);
        
        if(!$ocupacion){
            
            return ['resultado'  => false , 'msg' => 'No se encontro la ocupación'];
            
        }else {
            
            return ['resultado'  => true , 'ocupacion' => $ocupacion];
 
        }
        
     
    
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
}
