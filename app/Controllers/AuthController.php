<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('Cliente/login');
    }
public function loginProcess()
{
    $session = session();
    $db = \Config\Database::connect();
    $db->initialize();

    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    $builder = $db->table('usuarios');
    $usuario = $builder->where('email_usuario', $email)->get()->getRow();

    if (!$usuario) {
        return redirect()->to('/login')->with('error', 'El correo electrónico no está registrado.');
    }

    if ($usuario->estatus_usuario != 1) {
        return redirect()->to('/login')->with('error', 'Tu cuenta se encuentra deshabilitada.');
    }

    $hashedPassword = hash('sha256', $password);

    if ($hashedPassword !== $usuario->password_usuario) {
        return redirect()->to('/login')->with('error', 'Contraseña incorrecta.');
    }

    $sesionData = [
        'id_usuario' => $usuario->id_usuario,
        'nombre'     => $usuario->nombre_usuario . ' ' . $usuario->ap_usuario,
        'email'      => $usuario->email_usuario,
        'imagen_usuario' => $usuario->imagen_usuario,
        'id_rol'     => $usuario->id_rol,
        'isLoggedIn' => true
    ];

    $session->set($sesionData);

    if ($usuario->id_rol == 745) {
        return redirect()->to('/admin/dashboard');
    } elseif ($usuario->id_rol == 125) {
        return redirect()->to('/operador/dashboard');
    } elseif ($usuario->id_rol == 58) {
       return redirect()->to('/')->with('success', 'Sesión iniciada exitosamente');
    } else {
        $session->destroy();
        return redirect()->to('/login')->with('error', 'Rol no válido.');
    }
}
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}