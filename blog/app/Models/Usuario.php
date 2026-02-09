<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /**
     * Nombre de la tabla asociada
     */
    protected $table = 'usuarios';

    /**
     * Campos que se pueden llenar masivamente
     */
    protected $fillable = [
        'login',
        'password',
    ];

    /**
     * Campos que deben estar ocultos
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Conversiones de tipos de datos
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}