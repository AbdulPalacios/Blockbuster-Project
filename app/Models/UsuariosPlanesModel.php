<?php

namespace App\Models;
use CodeIgniter\Model;

class UsuariosPlanesModel extends Model
{
    protected $table            = 'usuarios_planes';
    protected $primaryKey       = 'id_usuario_plan';
    protected $returnType       = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields    = [
        'fecha_registro_plan', 'fecha_fin_plan', 'id_usuario', 'id_plan'
    ];
}