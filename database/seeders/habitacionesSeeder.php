<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class habitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $habitaciones=[
            ['precio_por_noche'=>120,'piso'=>12,'max_personas'=>1,'tiene_cama_bebe'=>1,'tiene_ducha'=>1,'tiene_bano'=>1,'tiene_balcon'=>1],
            ['precio_por_noche'=>126,'piso'=>12,'max_personas'=>2,'tiene_cama_bebe'=>2,'tiene_ducha'=>2,'tiene_bano'=>2,'tiene_balcon'=>2],
            ['precio_por_noche'=>129,'piso'=>12,'max_personas'=>1,'tiene_cama_bebe'=>1,'tiene_ducha'=>1,'tiene_bano'=>2,'tiene_balcon'=>1],
            ['precio_por_noche'=>112,'piso'=>12,'max_personas'=>2,'tiene_cama_bebe'=>1,'tiene_ducha'=>2,'tiene_bano'=>1,'tiene_balcon'=>1],
            ['precio_por_noche'=>32,'piso'=>12,'max_personas'=>1,'tiene_cama_bebe'=>2,'tiene_ducha'=>1,'tiene_bano'=>1,'tiene_balcon'=>2] ,
            ['precio_por_noche'=>52,'piso'=>12,'max_personas'=>1,'tiene_cama_bebe'=>2,'tiene_ducha'=>2,'tiene_bano'=>1,'tiene_balcon'=>2],
            ['precio_por_noche'=>12,'piso'=>12,'max_personas'=>2,'tiene_cama_bebe'=>2,'tiene_ducha'=>1,'tiene_bano'=>2,'tiene_balcon'=>1],
            ['precio_por_noche'=>62,'piso'=>1,'max_personas'=>1,'tiene_cama_bebe'=>2,'tiene_ducha'=>2,'tiene_bano'=>1,'tiene_balcon'=>1],
            ['precio_por_noche'=>72,'piso'=>2,'max_personas'=>2,'tiene_cama_bebe'=>2,'tiene_ducha'=>1,'tiene_bano'=>2,'tiene_balcon'=>2],
            ['precio_por_noche'=>92,'piso'=>72,'max_personas'=>1,'tiene_cama_bebe'=>2,'tiene_ducha'=>1,'tiene_bano'=>1,'tiene_balcon'=>2],
            ['precio_por_noche'=>12,'piso'=>92,'max_personas'=>1,'tiene_cama_bebe'=>1,'tiene_ducha'=>2,'tiene_bano'=>2,'tiene_balcon'=>2],
            ['precio_por_noche'=>42,'piso'=>2,'max_personas'=>2,'tiene_cama_bebe'=>2,'tiene_ducha'=>2,'tiene_bano'=>1,'tiene_balcon'=>1],
            ['precio_por_noche'=>12,'piso'=>1,'max_personas'=>2,'tiene_cama_bebe'=>1,'tiene_ducha'=>2,'tiene_bano'=>1,'tiene_balcon'=>2],
            ['precio_por_noche'=>12,'piso'=>32,'max_personas'=>1,'tiene_cama_bebe'=>1,'tiene_ducha'=>1,'tiene_bano'=>2,'tiene_balcon'=>2],
            ['precio_por_noche'=>42,'piso'=>12,'max_personas'=>1,'tiene_cama_bebe'=>2,'tiene_ducha'=>2,'tiene_bano'=>2,'tiene_balcon'=>1],
            ['precio_por_noche'=>22,'piso'=>92,'max_personas'=>1,'tiene_cama_bebe'=>2,'tiene_ducha'=>2,'tiene_bano'=>1,'tiene_balcon'=>2],
            ['precio_por_noche'=>12,'piso'=>12,'max_personas'=>1,'tiene_cama_bebe'=>2,'tiene_ducha'=>1,'tiene_bano'=>1,'tiene_balcon'=>1],
            ['precio_por_noche'=>42,'piso'=>20,'max_personas'=>2,'tiene_cama_bebe'=>1,'tiene_ducha'=>2,'tiene_bano'=>2,'tiene_balcon'=>2],
            ['precio_por_noche'=>12,'piso'=>62,'max_personas'=>1,'tiene_cama_bebe'=>2,'tiene_ducha'=>2,'tiene_bano'=>2,'tiene_balcon'=>1],
            ['precio_por_noche'=>32,'piso'=>82,'max_personas'=>2,'tiene_cama_bebe'=>2,'tiene_ducha'=>1,'tiene_bano'=>1,'tiene_balcon'=>2],

        ];
        DB::table('habitaciones')->insert($habitaciones);
    }
}
