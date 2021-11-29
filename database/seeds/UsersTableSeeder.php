<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Promotor;
use App\Models\Prospecto;
use App\Models\Sector;
use App\Models\Cliente;
use App\Models\Ocupacion;
use App\Models\Inmueble;
use App\Models\TipoCita;
use App\Models\EtapasDesarrollo;
use App\Models\CitaProspecto;
use App\Models\Apartado;






class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        User::create([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin123@gmail.com',
            'password' => '123',

        ]);

        /****************************************************
                        Promotor Seed
        ****************************************************/
        Promotor::truncate();
        Promotor::create(
            [
                'id'                =>  1,
                'nombre'            =>'admin',
                'apellido_p'        =>'ap_p' ,
                'apellido_m'        =>'ap_m'  ,
                'numempleado'       =>1111111111  ,
                'email'             =>'admin@gmail.com'  ,
                'password'          =>'1234'  ,
                'curp'              =>'ADM24124221'  ,
                'rfc'               =>'ADMQWEEQQWW'  ,
                'nss'               =>'21412421214'  ,
                'foto'              =>''  ,
                'fecha_nacimiento'  =>'2000-10-21'  ,
                'genero'            =>'M'  ,
                'num_telefono'      =>6548741254  ,
                'ocupacion'         =>2   
                
            ]
        );
        
        
        
        /****************************************************
                        Prospecto Seed
        ****************************************************/
        Prospecto::truncate();
        Prospecto::create(
            [
                'id'                =>  1,
                'nombre'            =>'admin',
                'apellido_p'        =>'ap_p' ,
                'apellido_m'        =>'ap_m'  ,
                'genero'            =>1  ,
                'estadoCivil'       =>'s'  ,
                'nss'               =>'45645611'  ,
                'curp'              =>'PROM24124221'  ,
                'tipoCredito'       =>'tipocredito'  ,
                'fecha_nacimiento'  =>'2000-10-21'  ,
                'genero'            =>'M'  ,
                'num_telefono'      =>6548741254  ,
                'fecha_captura'     =>'2000-10-21'  ,
                'anticipo'          => 1,
                'promotorid'        => 1
            ]
        );
        
        /****************************************************
                        Sector Seed
        ****************************************************/
        Sector::truncate();
        Sector::create(
            [
                'id'                =>  1,
                'nombreSector'      =>'Villas',
            ]
        );
        
        
        /****************************************************
                        Prospecto Seed
        ****************************************************/
        Cliente::truncate();
        Cliente::create(
            [
                'id'                =>  1,
                'nombre'            =>'admin',
                'apellido_p'        =>'ap_p' ,
                'apellido_m'        =>'ap_m'  ,
                'genero'            =>1  ,
                'estadoCivil'       =>'s'  ,
                'nss'               =>'45645611'  ,
                'curp'              =>'PROM24124221'  ,
                'tipoCredito'       =>'tipocredito'  ,
                'fecha_nacimiento'  =>'2000-10-21'  ,
                'num_telefono'      =>6548741254  ,
                'fecha_captura'      =>'2000-10-21'  ,
                'anticipo'           => 1,
                'genero'            =>'M'  ,
                'promotorid'        => 1,
                'prospectoid'       => 1
                
            ]
        );
        
        
        /****************************************************
                        Ocupacion Seed
        ****************************************************/
        Ocupacion::truncate();
        Ocupacion::create(
            [
                'id'                =>  1,
                'nombre'            =>'Ingeniero',
                
            ]
        );
        
        
        /****************************************************
                        Inmueble Seed
        ****************************************************/
        Inmueble::truncate();
        Inmueble::create(
            [
                'id'                =>  1,
                'modelo'            =>'admin',
                'valor'        => 1000.23 ,
                'superficieplana'        =>1 ,
                'construccion'            =>2  ,
                'habitaciones'       =>2   ,
                'banos'               =>1  ,
                'cochera'              =>1 ,
                'plazas'       =>2 ,
            ]
        );
        
        /****************************************************
                        TipoCita Seed
        ****************************************************/
        TipoCita::truncate();
        TipoCita::create(
            [
                'id'                =>  1,
                'nombre'            =>'rapida',
            ]
        );
        
        
        /****************************************************
                        TipoCita Seed
        ****************************************************/
        TipoCita::truncate();
        TipoCita::create(
            [
                'id'                =>  1,
                'nombre'            =>'rapida',
            ]
        );
        
        
        /****************************************************
                        EtapasDesarrollo Seed
        ****************************************************/
        EtapasDesarrollo::truncate();
        EtapasDesarrollo::create(
            [
                'id'                =>  1,
                'numero_etapa'            =>1,
                'campo'            =>'campo',
                'estado_etapa'            =>2,
                'sectorid'            =>1,
                'numero_casas'            =>3,
                'promotorid'            =>1,
                'fecha_inicio'   => now(),
                'fecha_fin'     => now(),
                
            ]
        );

        
        /****************************************************
                        CitaProspecto Seed
        ****************************************************/
        CitaProspecto::truncate();
        CitaProspecto::create(
            [
                'id'                =>  1,
                'prospectoid'            =>1,
                'promotorid'            =>1,
                'inmuebleid'            =>1,
                'fecha_solicitada'            =>now(),
                'tipocita'            =>1,
               
                
            ]
        );
        
                
        /****************************************************
                        Apartado Seed
        ****************************************************/
        Apartado::truncate();
        Apartado::create(
            [
                'id'                =>  1,
                'clienteid'                =>  1,
                'fecha'            =>now(),
               
                
            ]
        );

    }
}
 