<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\TipoCita ; 

class TipoCitaController extends Controller
{
    //
    public function index(){
        
        $tipoCita = new TipoCita();
        
        return  $tipoCita->get();
    }
    
    public function create(Request $request){
            
        $data =Validator::make($request->all(),[
            'nombre' => 'required|max:50',
        ]);
        
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        
        if(TipoCita::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego el tipo de cita'];
            
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
        $tipoCita =TipoCita::findOrfail($request -> id);
        
        if($tipoCita->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se edito el tipo de cita'];
            
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
        $tipoCita =TipoCita::find($request -> id);
        
        if(!$tipoCita){
            return ['resultado'  => true , 'msg' => 'No se encontro la ocupación'];
            
        }
        
        if($tipoCita->delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino la ocupación'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
    
        
    }
}
