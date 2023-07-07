<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conexion extends Model
{
    use HasFactory;

    protected $table = "conexions";
    protected $primarykey ="id";
    protected $fillable =["Nombre","N_Telefono","Correo_Electronico","Empresa","Observacion"];
}
