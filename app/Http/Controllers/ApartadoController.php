<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Apartado;
class ApartadoController extends Controller
{
    //
    
    public function index(){
        
        $apartado = new Apartado();
        
        return  $apartado->with('cliente') ->get();
    }
    
    public function create(Request $request){
            
        $data =Validator::make($request->all(),[
            'clienteid' => 'required',
            'fecha'     => 'required|date'
   
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        
        if(Apartado::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego el apartado'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
    }
    
     
    public function edit(Request $request){
            
        $data =Validator::make($request->all(),[
            'clienteid' => 'required',
            'fecha'     => 'required|date'
   
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        $apartado =Apartado::findOrfail($request -> id);
        
        if($apartado->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se edito el apartado'];
            
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
        $apartado =Apartado::find($request -> id);
        
        if(!$apartado){
            return ['resultado'  => true , 'msg' => 'No se encontro el apartado'];
            
        }
        
        if($apartado->delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino el apartado'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
    
        
    }
    
}
