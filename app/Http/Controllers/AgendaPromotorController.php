<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\AgendaPromotor;
class AgendaPromotorController extends Controller
{
    //
    
    public function index(){
        
        $agenda = new AgendaPromotor();
        
        return  $agenda->with('cita','promotor') ->get();
    }
    
    public function create(Request $request){
            
        $data =Validator::make($request->all(),[
            'promotorid' => 'required',
            'fecha'     => 'required|date',
            'citaid' => 'required'
   
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        
        if(AgendaPromotor::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego a la agenda'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
        
    }
    
    public function edit(Request $request){
            
        $data =Validator::make($request->all(),[
            'promotorid' => 'required',
            'fecha'     => 'required|date',
            'citaid' => 'required'
   
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        $agenda =AgendaPromotor::findOrfail($request -> id);
        
        if($agenda->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se edito la agenda'];
            
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
        $agenda =AgendaPromotor::find($request -> id);
        
        if(!$agenda){
            return ['resultado'  => true , 'msg' => 'No se encontro la agenda'];
            
        }
        
        if($agenda->delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino la agenda'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
    
        
    }
}
