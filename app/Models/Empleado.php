<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido1', 'apellido2', 'rol', 'fecha_nacimiento', 'dni', 'email', 'oficina_id'];

    public function oficina() {
        return $this->belongsTo(Oficina::class);
    }
}
