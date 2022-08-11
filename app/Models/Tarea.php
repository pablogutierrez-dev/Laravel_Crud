<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tareas'; //con esto podemos relacionar el model con la migracion si hacemos un cambio de nombre en esta ultima.
    protected $fillable = [ //aqui ponemos los campos que queremos que se rellenen obligatoriamente.
        'nombre',
        'descripcion',
        'finalizada',
        'fecha_limite',
        'urgencia',
    ];

    protected $dates = ['fecha_limite']; //poner 'fecha_limite' en formato carbon.

    public const URGENCIAS = ['No es urgente', 'Urgente', 'Muy Urgente'];

    public function urgencia() {

        return self::URGENCIAS[ $this->urgencia ];
    }

    public function estaFinalizada() {
        
        return $this->finalizada == 1 ? 'Si' : 'No';
    }
}
