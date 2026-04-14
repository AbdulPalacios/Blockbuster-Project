<?php

namespace App\Controllers\Operador;

use App\Controllers\BaseController;

class PerfilController extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $idUsuario = session()->get('id_usuario');
        $data['operador'] = $db->table('usuarios')
                               ->where('id_usuario', $idUsuario)
                               ->get()
                               ->getRow();

        return view('Operador/Perfil/index', $data);
    }

    public function actualizar()
    {
        $db = \Config\Database::connect();
        $idUsuario = session()->get('id_usuario');
        
        $nombre = trim($this->request->getPost('nombre'));
        $email  = trim($this->request->getPost('email'));
        $password = $this->request->getPost('password');
        
        $data = [];

        if ($nombre !== '') {
            $partes = preg_split('/\s+/', $nombre);
            $data['nombre_usuario'] = $partes[0] ?? '';
            $data['ap_usuario']     = $partes[1] ?? '';
            $data['am_usuario']     = $partes[2] ?? '';
        }
        
        if ($email !== '') {
            $data['email_usuario'] = $email;
        }

        if (!empty($password)) {
            $data['password_usuario'] = hash('sha256', $password);
        }

        $foto = $this->request->getFile('foto_perfil');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $nuevoNombre = $foto->getRandomName();
            $foto->move(FCPATH . 'uploads/perfiles', $nuevoNombre);
            
            $data['imagen_usuario'] = $nuevoNombre;
            session()->set('imagen_usuario', $nuevoNombre);
        }

        if (!empty($data)) {
            $db->table('usuarios')->where('id_usuario', $idUsuario)->update($data);
        }

        if ($nombre !== '') {
            $nombreCompleto = trim(($data['nombre_usuario'] ?? '') . ' ' . ($data['ap_usuario'] ?? ''));
            session()->set('nombre', $nombreCompleto);
        }
        if ($email !== '') {
            session()->set('email', $email);
        }

        return redirect()->to('operador/perfil')->with('success', 'Perfil y foto actualizados.');
    }
}