<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";
    protected $fillable = ['nombre', 'apellido', 'edad', 'matricula', 'correo', 'pass', 'tipousuario'];
    protected $hidden = ['id'];
    public function obtenerUsuario()
    {
        return usuario::all();

    }

    public function obtenerUsuarioPorId($id)
    {
        return usuario::find($id);
    }

}
