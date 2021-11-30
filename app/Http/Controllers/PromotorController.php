<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Promotor;


class PromotorController extends Controller
{
    //
    
    public function index(){
        
        $promotor = new Promotor();
        
        return  $promotor->with('ocupacionData')->get();
    }
    
    public function getPromotor(Request $request){
        
        $promotor =Promotor::with('ocupacionData')->find($request -> id);
        
        return  $promotor ;
    }
    
    public function create(Request $request){
        
        $data =Validator::make($request->all(),[
            'nombre' => 'required|max:50',
            'apellido_p' => 'required|max:50',
            'apellido_m' => 'required|max:50',
            'numempleado' => 'required|max:10|min:10|unique:promotores',
            'email'         => 'email',
            'password'         => 'required|min:8',
            'curp'         => 'required',
            'rfc'         => 'required',
            'nss'         => 'required|min:10',
            'fecha_nacimiento'         => 'required',
            'genero'         => 'required|max:1',
            'numtelefono'         => 'required|max:10',
            'ocupacion'         => 'required',
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        
        if(Promotor::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego al promotor'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
    }
    
    
    public function edit(Request $request){
     
        $promotor =Promotor::findOrfail($request -> id);
        
        if($promotor->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se actualizo al promotor'];
            
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
        
        $promotor =Promotor::find($request -> id);
        
        if(!$promotor){
            return ['resultado'  => false , 'msg' => 'El promotor no existe'];
            
        }
        
        if( $promotor-> delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino al promotor'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
    }
    
    public function login (Request $request){
        
        $promotor = Promotor::where('email', '=' , $request -> email) -> where ('password' , '=' , $request ->pass)->first();
        
        
        if($promotor){
            return ['resultado' => true , 'msg' => 'Se inicio sesion correctamente' , 'promotor' => $promotor ];
        }
        
        return ['resultado' => false , 'msg' => 'Error de autentificacion' ];
 
        
    }
    
    
    
}
