<?php

namespace App\Controllers\Operador;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;

class ClientesController extends BaseController
{
    protected $usuariosModel;

    public function __construct()
    {
        $this->usuariosModel = new UsuariosModel();
    }

    public function index()
    {
        // Traemos SOLO a los usuarios que son Clientes (id_rol = 58)
        $data['clientes'] = $this->usuariosModel->where('id_rol', 58)->findAll();
        return view('Operador/Clientes/index', $data);
    }

    public function validar($id_usuario, $nuevo_estatus)
    {
        // Cambiamos el estatus (1 = Activo, -1 = Pendiente/Bloqueado)
        $this->usuariosModel->update($id_usuario, ['estatus_usuario' => $nuevo_estatus]);
        
        $mensaje = ($nuevo_estatus == 1) ? 'Cliente validado y activado correctamente.' : 'Cuenta de cliente bloqueada/suspendida.';
        return redirect()->to('operador/clientes')->with('success', $mensaje);
    }
}