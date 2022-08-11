<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitaciones extends Model
{
    use HasFactory;
    public function scopeBuscarpora(){
        $this->select('id','id_reservas')->join('reservas','on','reservas.huesped_id','=','habitaciones.habitaciones_id');
    }
}
