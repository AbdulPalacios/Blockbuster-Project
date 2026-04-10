<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\GenerosModel;

class GenerosController extends BaseController
{
    protected $generosModel;

    public function __construct()
    {
        $this->generosModel = new GenerosModel();
    }

    // Mostrar la lista de géneros
    public function index()
    {
        // Traemos todos los géneros
        $data['generos'] = $this->generosModel->findAll();
        return view('Admin/Generos/index', $data);
    }

    // Mostrar el formulario para CREAR
    public function create()
    {
        return view('Admin/Generos/form');
    }

    // Procesar y GUARDAR el nuevo género
    public function store()
    {
        $datosAGuardar = [
            'nombre_genero'      => $this->request->getPost('nombre_genero'),
            'descripcion_genero' => $this->request->getPost('descripcion_genero'),
            'estatus_genero'     => $this->request->getPost('estatus_genero')
        ];

        $this->generosModel->insert($datosAGuardar);
        return redirect()->to('admin/generos')->with('success', 'Género creado correctamente.');
    }

    // Mostrar el formulario para EDITAR con los datos cargados
    public function edit($id = null)
    {
        $data['genero'] = $this->generosModel->find($id);

        if (!$data['genero']) {
            return redirect()->to('admin/generos')->with('error', 'El género no existe.');
        }

        return view('Admin/Generos/form', $data);
    }

    // Procesar y ACTUALIZAR el género
    public function update($id = null)
    {
        $datosAActualizar = [
            'nombre_genero'      => $this->request->getPost('nombre_genero'),
            'descripcion_genero' => $this->request->getPost('descripcion_genero'),
            'estatus_genero'     => $this->request->getPost('estatus_genero')
        ];

        $this->generosModel->update($id, $datosAActualizar);
        return redirect()->to('admin/generos')->with('success', 'Género actualizado correctamente.');
    }

    // ELIMINAR un género
    public function delete($id = null)
    {
        $this->generosModel->delete($id);
        return redirect()->to('admin/generos')->with('success', 'Género eliminado correctamente.');
    }
}