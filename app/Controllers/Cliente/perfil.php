<?php

namespace App\Controllers\Cliente;

use App\Controllers\BaseController;

class Perfil extends BaseController
{
    public function index()
{
    if (!session()->get('isLoggedIn')) {
        return redirect()->to('/login');
    }

    $db = \Config\Database::connect();

    $plan = $db->query("
        SELECT 
            planes.nombre_plan,
            planes.cantidad_limite_plan,
            planes.tipo_plan,
            usuarios_planes.fecha_registro_plan,
            usuarios_planes.fecha_fin_plan
        FROM usuarios_planes
        INNER JOIN planes ON planes.id_plan = usuarios_planes.id_plan
        WHERE usuarios_planes.id_usuario = 3
        LIMIT 1
    ")->getRow();

 return view('Cliente/perfil', [
    'plan' => $plan
]);
}

    public function actualizar()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $db = \Config\Database::connect();
        $builder = $db->table('usuarios');

        $idUsuario = session()->get('id_usuario');
        $nombre = trim($this->request->getPost('nombre'));
        $email = trim($this->request->getPost('email'));
        $password = $this->request->getPost('password');
        $passwordConfirm = $this->request->getPost('password_confirm');
        $foto = $this->request->getFile('foto_perfil');

        $data = [];

        if ($nombre !== '') {
            $partes = preg_split('/\s+/', $nombre);

            $data['nombre_usuario'] = $partes[0] ?? '';
            $data['ap_usuario'] = $partes[1] ?? '';
            $data['am_usuario'] = $partes[2] ?? '';
        }

        if ($email !== '') {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return redirect()->to('/perfil')->with('error', 'El correo electrónico no es válido.');
            }

            $correoExistente = $db->table('usuarios')
                ->where('email_usuario', $email)
                ->where('id_usuario !=', $idUsuario)
                ->get()
                ->getRow();

            if ($correoExistente) {
                return redirect()->to('/perfil')->with('error', 'Ese correo ya está en uso.');
            }

            $data['email_usuario'] = $email;
        }

        if (!empty($password) || !empty($passwordConfirm)) {
            if ($password !== $passwordConfirm) {
                return redirect()->to('/perfil')->with('error', 'Las contraseñas no coinciden.');
            }

            $data['password_usuario'] = hash('sha256', $password);
        }

        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $nuevoNombre = $foto->getRandomName();
            $foto->move(FCPATH . 'uploads/perfiles', $nuevoNombre);
            $data['imagen_usuario'] = $nuevoNombre;
            session()->set('imagen_usuario', $nuevoNombre);
        }

        if (!empty($data)) {
            $builder->where('id_usuario', $idUsuario)->update($data);
        }

        if ($nombre !== '') {
            session()->set('nombre', $nombre);
        }

        if ($email !== '') {
            session()->set('email', $email);
        }

        return redirect()->to('/perfil')->with('success', 'Perfil actualizado correctamente.');
    }
}