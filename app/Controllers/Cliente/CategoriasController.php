<?php

namespace App\Controllers\Cliente;

use App\Controllers\BaseController;
use App\Models\GenerosModel;
use App\Models\StreamingModel;

class CategoriasController extends BaseController
{
    protected $generosModel;
    protected $streamingModel;

    public function __construct()
    {
        $this->generosModel = new GenerosModel();
        $this->streamingModel = new StreamingModel();
    }

    public function index()
    {
        $generos = $this->generosModel
            ->where('estatus_genero', 1)
            ->orderBy('nombre_genero', 'ASC')
            ->findAll();

        $streaming = $this->streamingModel
            ->where('estatus_streaming', 1)
            ->orderBy('nombre_streaming', 'ASC')
            ->findAll();

        $contenidoPorGenero = [];

        foreach ($generos as $genero) {
            $contenidoPorGenero[$genero->id_genero] = [];
        }

        foreach ($streaming as $item) {
            if (isset($contenidoPorGenero[$item->id_genero])) {
                $contenidoPorGenero[$item->id_genero][] = $item;
            }
        }

        $data['generos'] = $generos;
        $data['contenidoPorGenero'] = $contenidoPorGenero;

        return view('Cliente/categorias', $data);
    }
}