<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\EtapasDesarrollo ; 


class EtapaDesarrolloController extends Controller
{
    //
    
    public function index(){
        
        $etapaDes = new EtapasDesarrollo();
        
        return  $etapaDes->with('promotor','sector')->get();
    }
    
    
    public function create(Request $request){
            
        $data =Validator::make($request->all(),[
            'numero_etapa' => 'required',
            'campo'        => 'required',
            'estado_etapa' => 'required',
            'sectorid'     => 'required',
            'numero_casas' => 'required',
            'promotorid'   => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin'    => 'required',
        ]);
        
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        
        if(EtapasDesarrollo::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego el estado desarrollo'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
    }
    
    
    public function edit(Request $request){
        
        $data =Validator::make($request->all(),[
            'numero_etapa' => 'required',
            'campo'        => 'required',
            'estado_etapa' => 'required',
            'sectorid'     => 'required',
            'numero_casas' => 'required',
            'promotorid'   => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin'    => 'required',
            'id'    => 'required',
            
            
        ]);
        
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        $eDesarrollo =EtapasDesarrollo::findOrfail($request -> id);
        
        if($eDesarrollo->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se actualizo la etapa en desarrollo'];
            
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
        
        $eDesarrollo =EtapasDesarrollo::find($request -> id);
        
        if(!$eDesarrollo){
            return ['resultado'  => false , 'msg' => 'La etapa no existe'];
            
        }
        
        if( $eDesarrollo-> delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino la etapa'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
        
    }
}
