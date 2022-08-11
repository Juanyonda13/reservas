<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Huespedes;
use App\Models\Habitaciones;
use App\Models\Reservas;
use Illuminate\Http\Request;

class HuespedesController extends Controller
{
    //
    public function consultas(){
        // select huespedes.nombres ,huespedes.apellidos,huespedes.telefono,huespedes.correo,habitaciones.tiene_bano 
        //                                    FROM huespedes 
        //                                        INNER JOIN reservas on reservas.huesped_id = huespedes.id 
        //                                        INNER JOIN habitaciones on reservas.habitacion_id =habitaciones.id 
        //                                          WHERE habitaciones.tiene_bano=1;
        $dato1=Huespedes::select('huespedes.nombres','huespedes.apellidos','huespedes.telefono','huespedes.correo','habitaciones.tiene_ducha')
                                   ->join('reservas','reservas.huesped_id','=','huespedes.id')
                                   ->join('habitaciones','reservas.habitacion_id','=','habitaciones.id')
                                   ->where('habitaciones.tiene_ducha','=',1)->get();
                                   ;

        // select huespedes.nombres ,huespedes.apellidos,huespedes.telefono,huespedes.correo,habitaciones.tiene_bano 
        //                                    FROM huespedes 
        //                                        INNER JOIN reservas on reservas.huesped_id = huespedes.id 
        //                                        INNER JOIN habitaciones on reservas.habitacion_id =habitaciones.id 
        //                                          WHERE habitaciones.tiene_bano=1;
        $dato2=Huespedes::select('huespedes.nombres','huespedes.apellidos','huespedes.telefono','huespedes.correo','habitaciones.tiene_bano')
                                   ->join('reservas','reservas.huesped_id','=','huespedes.id')
                                   ->join('habitaciones','reservas.habitacion_id','=','habitaciones.id')
                                   ->where('habitaciones.tiene_bano','=',1)->get()
                                   ;

        //    select habitaciones.precio_por_noche 
        //                     FROM habitaciones 
        //                          GROUP by precio_por_noche 
        //                          ORDER by precio_por_noche LIMIT 5;
        $dato3=Habitaciones::select('habitaciones.precio_por_noche')
                                ->groupBy('precio_por_noche')
                                ->orderBy('precio_por_noche')
                                ->limit(5)->get();
        
        // UPDATE habitaciones 
        //      SET precio_por_noche 
        //          =ROUND (precio_por_noche * 0,1+precio_por_noche) 
        //           WHERE max_personas > 3
        // $dato4=Habitaciones::where('max_personas','>',3)
        //                     ->UPDATE('precio_por_noche')
        //                     ->round('precio_por_noche','*','0,1','+','precio_por_noche')
        //                     ->where('max_personas','>',3)
        //                       ->get();
        
        //    SELECT huespedes.nombres,huespedes.apellidos,huespedes.telefono,huespedes.correo,huespedes.direccion,
        //           COUNT( reservas.id )"cantidad de reservas"
        //                  from reservas 
        //                       INNER JOIN huespedes on huespedes.id = reservas.huesped_id 
        //                       GROUP BY huespedes.id;
        $dato5=reservas::select('huespedes.id','huespedes.nombres','huespedes.apellidos','huespedes.telefono','huespedes.correo','huespedes.direccion')
                                ->selectRaw('count(reservas.id)')
                                ->join('huespedes','huespedes.id','=','reservas.huesped_id')
                                ->groupBy('huespedes.id','huespedes.nombres','huespedes.apellidos','huespedes.telefono','huespedes.correo','huespedes.direccion')
                                ->get();
        // select huespedes.nombres, huespedes.apellidos , habitaciones.precio_por_noche
        //                             FROM reservas 
        //                             INNER JOIN huespedes on huespedes.id =reservas.huesped_id 
        //                             INNER JOIN habitaciones on habitaciones.id =reservas.habitacion_id 
        //                             GROUP BY habitaciones.precio_por_noche 
        //                             ORDER BY habitaciones.precio_por_noche DESC 
        //                             LIMIT 1;

        $dato6=reservas::select('huespedes.nombres', 'huespedes.apellidos' , 'habitaciones.precio_por_noche' ,)
                                ->join('huespedes','huespedes.id', '=','reservas.huesped_id' )
                                ->join('habitaciones','habitaciones.id','=','reservas.habitacion_id' )
                                ->groupBy('habitaciones.precio_por_noche','huespedes.nombres', 'huespedes.apellidos')
                                ->orderByDesc('habitaciones.precio_por_noche')
                                ->limit(1)->get();
        return view('consultas',compact('dato1','dato2','dato3','dato5','dato6'));
    }
}
