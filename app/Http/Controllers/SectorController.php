<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Sector;


class SectorController extends Controller
{
    //
    
    
    public function index(){
        
        $sector = new Sector();
        
        return  $sector-> with('sector') ->get();
    }
    
    public function create(Request $request){
            
        $data =Validator::make($request->all(),[
            'nombreSector' => 'required|max:50',
    
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        
        if(Sector::create($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se agrego el sector'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
        
    }
    
    public function edit(Request $request){
            
        $data =Validator::make($request->all(),[
            'nombreSector' => 'required|max:50',
            'id' => 'required',
            
    
        ]);
        if($data -> fails()){
             return  ['resultado'=>false ,  $data ->errors()];
        }
        $sector =Sector::findOrfail($request -> id);
        
        if($sector->update($request->all())){
            
            return ['resultado'  => true , 'msg' => 'Se edito el sector'];
            
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
        $sector =Sector::find($request -> id);
        
        if(!$sector){
            return ['resultado'  => true , 'msg' => 'No se encontro el sector'];
            
        }
        
        if($sector->delete( )){
            
            return ['resultado'  => true , 'msg' => 'Se elimino el sector'];
            
        }else{
            
            return ['resultado'  => false , 'msg' => 'Se encontro un error'];
            
        }
    
        
    }
    
    public function getSector(Request $request){
        
        $data =Validator::make($request->all(),[
            'id' => 'required',
        ]);
        if($data -> fails()){
            return  ['resultado'=>false ,  $data ->errors()];
        }
        $sector =Sector::find($request -> id);
        
        if(!$sector){
            
            return ['resultado'  => false , 'msg' => 'No se encontro la ocupación'];
            
        }else {
            
            return ['resultado'  => true , 'ocupacion' => $sector];
 
        }
        
    }
    
    
    
    
    
    
    
    
    
    
    
}
