<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Promotor;
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
            ]
        );


    }
}
