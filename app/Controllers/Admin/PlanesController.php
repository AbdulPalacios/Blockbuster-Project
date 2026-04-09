<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PlanesModel;

class PlanesController extends BaseController
{
    protected $planesModel;

    public function __construct()
    {
        $this->planesModel = new PlanesModel();
    }

    public function index()
    {
        $data['planes'] = $this->planesModel->findAll();
        return view('Admin/Planes/index', $data);
    }

    public function create()
    {
        return view('Admin/Planes/form');
    }

    public function store()
    {
        $datosAGuardar = [
            'nombre_plan'          => $this->request->getPost('nombre_plan'),
            'precio_plan'          => $this->request->getPost('precio_plan'),
            'cantidad_limite_plan' => $this->request->getPost('cantidad_limite_plan'),
            'tipo_plan'            => $this->request->getPost('tipo_plan'),
            'estatus_plan'         => $this->request->getPost('estatus_plan')
        ];

        $this->planesModel->insert($datosAGuardar);
        return redirect()->to('admin/planes')->with('success', 'Plan creado exitosamente.');
    }

    public function edit($id = null)
    {
        $data['plan'] = $this->planesModel->find($id);

        if (!$data['plan']) {
            return redirect()->to('admin/planes')->with('error', 'El plan no existe.');
        }

        return view('Admin/Planes/form', $data);
    }

    public function update($id = null)
    {
        $datosAActualizar = [
            'nombre_plan'          => $this->request->getPost('nombre_plan'),
            'precio_plan'          => $this->request->getPost('precio_plan'),
            'cantidad_limite_plan' => $this->request->getPost('cantidad_limite_plan'),
            'tipo_plan'            => $this->request->getPost('tipo_plan'),
            'estatus_plan'         => $this->request->getPost('estatus_plan')
        ];

        $this->planesModel->update($id, $datosAActualizar);
        return redirect()->to('admin/planes')->with('success', 'Plan actualizado correctamente.');
    }

    public function delete($id = null)
    {
        $this->planesModel->delete($id);
        return redirect()->to('admin/planes')->with('success', 'Plan eliminado correctamente.');
    }
}