<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id_usuario';
    protected $returnType       = 'object';
    protected $useAutoIncrement = true;

    // Aquí van TODAS las columnas de la tabla (excepto el ID autoincrementable)
    protected $allowedFields    = [
        'estatus_usuario', 
        'nombre_usuario', 
        'ap_usuario', 
        'am_usuario', 
        'sexo_usuario', 
        'email_usuario', 
        'password_usuario', 
        'imagen_usuario', 
        'id_rol'
    ];
}