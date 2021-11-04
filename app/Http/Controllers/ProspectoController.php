<?php

namespace App\Http\Controllers;


use App\Models\Prospecto;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ProspectoController extends Controller
{
    public function index(){
        
        $prospecto = new Prospecto();
        
        return  $prospecto->with('promotor')->get();
    }
    
    public function getProspecto(Request $request){
        
        $prospecto =Prospecto::with('promotor')->find($request -> id);

        
        return  $prospecto;
    }
    
    
    
    public function create(Request $request){
        
        $data =Validator::make($request->all(),[
            'nombre' => 'required|max:50',
            'apellido_p' => 'required|max:50',
            'apellido_m' => 'required|max:50',
            'genero'         => 'required|max:1',
            'estadoCivil'         => 'required|max:1',
            'nss'         => 'required|min:10',
            'curp'         => 'required',
            'tipoCredito'         => 'required',
            'fecha_nacimiento'         => 'required',
            'numtelefono'         => 'required|max:10',
            'fecha_captura'         => 'required',
            'anticipo'         => 'required',
            'promotorid'         => 'required',
            
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        
        if(Prospecto::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego al prospecto'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
    }
    
    
    public function edit(Request $request){
        
        $data =Validator::make($request->all(),[
            'nombre' => 'required|max:50',
            'apellido_p' => 'required|max:50',
            'apellido_m' => 'required|max:50',
            'genero'         => 'required|max:1',
            'estadoCivil'         => 'required|max:1',
            'nss'         => 'required|min:10',
            'curp'         => 'required',
            'tipoCredito'         => 'required',
            'fecha_nacimiento'         => 'required',
            'numtelefono'         => 'required|max:10',
            'fecha_captura'         => 'required',
            'anticipo'         => 'required',
            'promotorid'         => 'required',
            
        ]);
        
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        $prospecto =Prospecto::findOrfail($request -> id);
        
        if($prospecto->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se actualizo al prospecto'];
            
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
        
        $prospecto =Prospecto::find($request -> id);
        
        if(!$prospecto){
            return ['resultado'  => false , 'msg' => 'El prospecto no existe'];
            
        }
        
        if( $prospecto-> delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino al prospecto'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
        
    }
}
