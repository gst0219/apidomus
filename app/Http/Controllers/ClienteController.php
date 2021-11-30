<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Cliente ; 

class ClienteController extends Controller
{
    //
    
    public function index(){
        
        $clientes = new Cliente();
        
        return  $clientes->with('promotor','prospecto')->get();
    }
    
    public function create(Request $request){
        
        $data =Validator::make($request->all(), [
            'nombre'           => 'required',
            'apellido_p'       => 'required',
            'apellido_m'       => 'required',
            'estadoCivil'      => 'required',
            'nss'              => 'required',
            'curp'             => 'required',
            'tipoCredito'      => 'required',
            'fecha_nacimiento' => 'required',
            'num_telefono'     => 'required',
            'usuario'          => 'required|unique:clientes',
            'password'          => 'required' 
        ]); 
        
        if($data->fails()){
            return  ['resultado'=>false ,'msg'=>$data ->errors()];
       }
        
        if(Cliente::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego el cliente'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
    }
    
    
    public function edit(Request $request){
        
        $data =Validator::make($request->all(),[
            'nombre'           => 'required',
            'apellido_p'       => 'required',
            'apellido_m'       => 'required',
            'genero'           => 'required',
            'estadoCivil'      => 'required',
            'nss'              => 'required',
            'curp'             => 'required',
            'tipoCredito'      => 'required',
            'fecha_nacimiento' => 'required',
            'num_telefono'     => 'required',
            'fecha_captura'    => 'required',
            'anticipo'         => 'required',
            'genero'           => 'required',
            'promotorid'       => 'required',
            'prospectoid'     => 'required' ,
            'id'              => 'required',
            'usuario'       => 'required',
            'password'     => 'required' 
            
        ]);
        
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        $cliente =Cliente::findOrfail($request -> id);
        
        if($cliente->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se actualizo el cliente'];
            
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
        
        $cliente =Cliente::find($request -> id);
        
        if(!$cliente){
            return ['resultado'  => false , 'msg' => 'El cliente no existe'];
            
        }
        
        if( $cliente-> delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino el cliente'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
        
    }
    
    public function login ( Request $request){
        
    
        $cliente = Cliente::where('usuario', '=' , $request->usuario )-> where('password' , '=' , $request ->password)-> first();
        
        if($cliente){
            return ['resultado'  => true , 'msg' => 'Se inicio sesión' , 'usuario' => $cliente->id ];
            
        }
        return ['resultado'  => false , 'msg' => 'Error de autenticacion'  ];
        
        
        
    }
    
    
}
