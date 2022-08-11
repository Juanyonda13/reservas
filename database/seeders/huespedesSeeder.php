<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class huespedesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $huespedes=[
            ['nombres'=>"ricardo",'apellidos'=>"ordoñes",'telefono'=>07123,'correo'=>"ricardo.@gmail.com",'direccion'=>"calle4",'ciudad'=>'bogota','pais'=>'colombia'],
            ['nombres'=>"perez",'apellidos'=>"yonda",'telefono'=>123215,'correo'=>"perez.@gmail.com",'direccion'=>"calle2",'ciudad'=>'popayan','pais'=>'colombia'],
            ['nombres'=>"federico",'apellidos'=>"nose",'telefono'=>1782301,'correo'=>"federico.@gmail.com",'direccion'=>"calle6",'ciudad'=>'bogota','pais'=>'colombia'],
            ['nombres'=>"juan",'apellidos'=>"perez",'telefono'=>123,'correo'=>"juan.@gmail.com",'direccion'=>"calle1",'ciudad'=>'popayan','pais'=>'colombia'],
            ['nombres'=>"perez",'apellidos'=>"yonda",'telefono'=>123215,'correo'=>"perez.@gmail.com",'direccion'=>"calle2",'ciudad'=>'popayan','pais'=>'colombia'],
            ['nombres'=>"andres",'apellidos'=>"ordoñes",'telefono'=>07123,'correo'=>"andres.@gmail.com",'direccion'=>"calle4",'ciudad'=>'bogota','pais'=>'colombia'],
            ['nombres'=>"anny",'apellidos'=>"nose",'telefono'=>1782301,'correo'=>"anny.@gmail.com",'direccion'=>"calle6",'ciudad'=>'bogota','pais'=>'colombia'],
            ['nombres'=>"carlos",'apellidos'=>"ordoñes",'telefono'=>07123,'correo'=>"andres.@gmail.com",'direccion'=>"calle4",'ciudad'=>'bogota','pais'=>'colombia'],
            ['nombres'=>"perez",'apellidos'=>"yonda",'telefono'=>123215,'correo'=>"perez.@gmail.com",'direccion'=>"calle2",'ciudad'=>'popayan','pais'=>'colombia'],
            ['nombres'=>"luna",'apellidos'=>"nose",'telefono'=>1782301,'correo'=>"anny.@gmail.com",'direccion'=>"calle6",'ciudad'=>'bogota','pais'=>'colombia'],
            ['nombres'=>"juliana",'apellidos'=>"ordoñes",'telefono'=>07123,'correo'=>"andres.@gmail.com",'direccion'=>"calle4",'ciudad'=>'bogota','pais'=>'colombia'],
            ['nombres'=>"juan",'apellidos'=>"perez",'telefono'=>123,'correo'=>"juan.@gmail.com",'direccion'=>"calle1",'ciudad'=>'popayan','pais'=>'colombia'],
            ['nombres'=>"daniela",'apellidos'=>"yonda",'telefono'=>123215,'correo'=>"daniela.@gmail.com",'direccion'=>"calle2",'ciudad'=>'popayan','pais'=>'colombia'],
            ['nombres'=>"perez",'apellidos'=>"yonda",'telefono'=>123215,'correo'=>"perez.@gmail.com",'direccion'=>"calle2",'ciudad'=>'popayan','pais'=>'colombia'],
            ['nombres'=>"mendez",'apellidos'=>"ordoñes",'telefono'=>07123,'correo'=>"mendez.@gmail.com",'direccion'=>"calle4",'ciudad'=>'bogota','pais'=>'colombia'],
            ['nombres'=>"juan",'apellidos'=>"perez",'telefono'=>123,'correo'=>"juan.@gmail.com",'direccion'=>"calle1",'ciudad'=>'popayan','pais'=>'colombia'],
            ['nombres'=>"anny",'apellidos'=>"nose",'telefono'=>1782301,'correo'=>"anny.@gmail.com",'direccion'=>"calle6",'ciudad'=>'bogota','pais'=>'colombia'],
            ['nombres'=>"julio",'apellidos'=>"perez",'telefono'=>123,'correo'=>"julio.@gmail.com",'direccion'=>"calle1",'ciudad'=>'popayan','pais'=>'colombia'],
            ['nombres'=>"messi",'apellidos'=>"ordoñes",'telefono'=>07123,'correo'=>"messi.@gmail.com",'direccion'=>"calle4",'ciudad'=>'bogota','pais'=>'colombia'],
            ['nombres'=>"jesus",'apellidos'=>"yonda",'telefono'=>123215,'correo'=>"jesus.@gmail.com",'direccion'=>"calle2",'ciudad'=>'popayan','pais'=>'colombia'],
            
        ];
        DB::table('huespedes')->insert($huespedes);
    }
}
