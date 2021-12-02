<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\CitaProspecto;

class CitaProspectoController extends Controller
{
    //
    
    public function index(Request $request){
         
        if($request->prospectoid)
        $citas =CitaProspecto::where('prospectoid' ,'=', $request->prospectoid)->with('promotor','cliente','inmueble')->get();
        else if ($request -> promotorid)
        $citas =CitaProspecto::where('promotorid' ,'=', $request->promotorid)->with('promotor','cliente','inmueble')->get();
        
        return $citas ;
    }
    
    
       
    public function create(Request $request){
            
        $data =Validator::make($request->all(),[
            'prospectoid' => 'required|max:50',
            'promotorid'   => 'required' ,
            'inmuebleid'  => 'required' ,
            'fecha_solicitada' => 'required|date',
            'hora' => 'required|string' 
   
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        
        $cita = CitaProspecto::where('promotorid' , '=', $request -> promotorid)
        ->where('hora', '=' , $request-> hora)
        ->where('fecha_solicitada' , '=' , $request->fecha_solicitada)->first();
        
        if($cita){
            return ['resultado'  => false , 'msg' => 'Fecha y hora no disponibles,intente cambiar la hora'];
            
        }
        
        if(CitaProspecto::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego la cita'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
    }
    
    
    public function edit(Request $request){
            
        $data =Validator::make($request->all(),[
            'prospectoid' => 'required|max:50',
            'promotorid'   => 'required' ,
            'inmuebleid'  => 'required' ,
            'fecha_solicitada' => 'required|date',
            'tipocita' => 'required|numeric' ,
            'id' => 'required'
    
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        $cita =CitaProspecto::findOrfail($request -> id);
        
        if($cita->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se edito la cita'];
            
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
        $cita =CitaProspecto::find($request -> id);
        
        if(!$cita){
            return ['resultado'  => true , 'msg' => 'No se encontro la cita'];
            
        }
        
        if($cita->delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino la cita'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
    
        
    }
}
