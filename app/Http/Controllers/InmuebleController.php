<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inmueble;
use Illuminate\Support\Facades\Validator;

class InmuebleController extends Controller
{
    //
    
    //
    public function index(){
    
        $inmueble = new Inmueble();
        
        return  $inmueble->get();
    }
    
       
    public function create(Request $request){
            
        $data =Validator::make($request->all(),[
            'modelo'            =>  'required',
            'valor'             =>  'required'   ,
            'superficieplana'   =>  'required'  ,
            'construccion'      =>  'required'  ,
            'habitaciones'      =>  'required' ,
            'banos'             =>  'required'  ,
            'cochera'           =>  'required'  ,
            'plazas'            =>  'required'  ,
    
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        
        if(Inmueble::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego el inmueble'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
    }
    
        
    public function edit(Request $request){
        
        $data =Validator::make($request->all(),[
            'modelo'            =>  'required',
            'valor'             =>  'required'   ,
            'superficieplana'   =>  'required'  ,
            'construccion'      =>  'required'  ,
            'habitaciones'      =>  'required' ,
            'banos'             =>  'required'  ,
            'cochera'           =>  'required'  ,
            'plazas'            =>  'required'  ,
            'id' =>  'required'
        ]);
        
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        $inmueble =Inmueble::findOrfail($request -> id);
        
        if($inmueble->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se actualizo al inmueble'];
            
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
        $inmueble =Inmueble::find($request -> id);
        
        if(!$inmueble){
            return ['resultado'  => true , 'msg' => 'No se encontro el inmueble'];
            
        }
        
        if($inmueble->delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino el inmueble'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
    
        
    }
    
    
    public function getInmueble(Request $request){
        
        $inmueble =Inmueble::find($request -> id);

        
        return  $inmueble;
    }
    
    
    
    
    
 
}


