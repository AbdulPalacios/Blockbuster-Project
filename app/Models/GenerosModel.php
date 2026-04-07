<?php

namespace App\Models;
use CodeIgniter\Model;

class GenerosModel extends Model
{
    protected $table            = 'generos';
    protected $primaryKey       = 'id_genero';
    protected $returnType       = 'object';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['estatus_genero', 'nombre_genero', 'descripcion_genero'];
}