<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;

class UsuariosController extends BaseController
{
    protected $usuariosModel;

    public function __construct()
    {
        $this->usuariosModel = new UsuariosModel();
    }

    public function index()
    {
        $data['usuarios'] = $this->usuariosModel->findAll();
        return view('Admin/Usuarios/index', $data);
    }

    public function create()
    {
        return view('Admin/Usuarios/form');
    }

    public function store()
    {
        $datosAGuardar = [
            'nombre_usuario'  => $this->request->getPost('nombre_usuario'),
            'ap_usuario'      => $this->request->getPost('ap_usuario'),
            'email_usuario'   => $this->request->getPost('email_usuario'),
            // ¡AQUÍ ESTÁ LA MAGIA! Encriptamos directamente lo que viene del formulario
            'password_usuario'=> hash('sha256', $this->request->getPost('password_usuario')),
            'id_rol'          => $this->request->getPost('id_rol'),
            'estatus_usuario' => $this->request->getPost('estatus_usuario')
        ];

        $this->usuariosModel->insert($datosAGuardar);
        return redirect()->to('admin/usuarios')->with('success', 'Usuario registrado exitosamente.');
    }

    public function edit($id = null)
    {
        $data['usuario'] = $this->usuariosModel->find($id);

        if (!$data['usuario']) {
            return redirect()->to('admin/usuarios')->with('error', 'El usuario no existe.');
        }

        return view('Admin/Usuarios/form', $data);
    }

    public function update($id = null)
    {
        $datosAActualizar = [
            'nombre_usuario'  => $this->request->getPost('nombre_usuario'),
            'ap_usuario'      => $this->request->getPost('ap_usuario'),
            'email_usuario'   => $this->request->getPost('email_usuario'),
            'id_rol'          => $this->request->getPost('id_rol'),
            'estatus_usuario' => $this->request->getPost('estatus_usuario')
        ];

        // Lógica inteligente: Si el administrador escribió una nueva contraseña, la encriptamos y la actualizamos.
        // Si dejó el campo vacío, NO tocamos la contraseña actual.
        $nuevaPassword = $this->request->getPost('password_usuario');
        if (!empty($nuevaPassword)) {
            $datosAActualizar['password_usuario'] = hash('sha256', $nuevaPassword);
        }

        $this->usuariosModel->update($id, $datosAActualizar);
        return redirect()->to('admin/usuarios')->with('success', 'Usuario actualizado correctamente.');
    }

    public function delete($id = null)
    {
        $this->usuariosModel->delete($id);
        return redirect()->to('admin/usuarios')->with('success', 'Usuario eliminado de la plataforma.');
    }
}