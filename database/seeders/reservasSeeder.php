<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $reservas=[
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9999-12-31 23:59:59','habitacion_id'=>2,'huesped_id'=>17],
            ['inicio_fecha'=>'9992-12-31 23:59:59','fin_fecha'=>'9992-12-31 23:59:59','habitacion_id'=>1,'huesped_id'=>2],
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9992-12-31 23:59:59','habitacion_id'=>3,'huesped_id'=>15],
            ['inicio_fecha'=>'9992-12-31 23:59:59','fin_fecha'=>'9919-12-31 23:59:59','habitacion_id'=>5,'huesped_id'=>4],
            ['inicio_fecha'=>'9919-12-31 23:59:59','fin_fecha'=>'9992-12-31 23:59:59','habitacion_id'=>4,'huesped_id'=>14],
            ['inicio_fecha'=>'9992-12-31 23:59:59','fin_fecha'=>'9919-12-31 23:59:59','habitacion_id'=>7,'huesped_id'=>6],
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9992-12-31 23:59:59','habitacion_id'=>6,'huesped_id'=>7],
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9992-12-31 23:59:59','habitacion_id'=>8,'huesped_id'=>8],
            ['inicio_fecha'=>'9992-12-31 23:59:59','fin_fecha'=>'9999-12-31 23:59:59','habitacion_id'=>10,'huesped_id'=>9],
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9992-12-31 23:59:59','habitacion_id'=>9,'huesped_id'=>10],
            ['inicio_fecha'=>'9992-12-31 23:59:59','fin_fecha'=>'9999-12-31 23:59:59','habitacion_id'=>13,'huesped_id'=>11],
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9919-12-31 23:59:59','habitacion_id'=>11,'huesped_id'=>12],
            ['inicio_fecha'=>'9992-12-31 23:59:59','fin_fecha'=>'9999-12-31 23:59:59','habitacion_id'=>12,'huesped_id'=>13],
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9999-12-31 23:59:59','habitacion_id'=>14,'huesped_id'=>5],
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9999-12-31 23:59:59','habitacion_id'=>18,'huesped_id'=>3],
            ['inicio_fecha'=>'9919-12-31 23:59:59','fin_fecha'=>'9992-12-31 23:59:59','habitacion_id'=>15,'huesped_id'=>16],
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9919-12-31 23:59:59','habitacion_id'=>16,'huesped_id'=>1],
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9992-12-31 23:59:59','habitacion_id'=>17,'huesped_id'=>19],
            ['inicio_fecha'=>'9999-12-31 23:59:59','fin_fecha'=>'9992-12-31 23:59:59','habitacion_id'=>19,'huesped_id'=>18],

        ];
        DB::table('reservas')->insert($reservas);

    }
}
