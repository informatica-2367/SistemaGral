<?php

namespace App\Modules\Clientes\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Cliente extends Authenticatable
{
    use HasFactory;

    protected $table = 'clientes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'numero_de_telefono',
        'edad',
        'sexo',
        'estatus',
        'calle',
        'numero_exterior',
        'numero_interior',
        'colonia',
        'ciudad',
        'estado',
        'codigo_postal',
        'pais',
        'fecha_de_creacion',
        'fecha_de_actualizacion',
    ];

    // Deshabilitar timestamps por defecto (created_at y updated_at de Laravel)
    public $timestamps = false;

    // Formateo de fechas para los campos personalizados
    protected $dates = [
        'fecha_de_creacion',
        'fecha_de_actualizacion',
    ];
}
