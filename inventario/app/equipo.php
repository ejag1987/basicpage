<?php

namespace inventario;

use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    protected  $table = 'equipo';

    protected $primaryKey = 'id_equipo';

    public $timestamps= true;


}
