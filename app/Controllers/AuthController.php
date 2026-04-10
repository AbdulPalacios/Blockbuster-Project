<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class AuthController extends BaseController
{
    public function index()
    {
        // La vista ahora está dentro de la carpeta Cliente
        return view('Cliente/login');
    }

    public function loginProcess()
    {
        $session = session();
        $usuariosModel = new UsuariosModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Modelo orientado a objetos
        $usuario = $usuariosModel->where('email_usuario', $email)->first();

        if (!$usuario) {
            return redirect()->to('login')->with('error', 'El correo electrónico no está registrado.');
        }

        if ($usuario->estatus_usuario != 1) {
            return redirect()->to('login')->with('error', 'Tu cuenta se encuentra deshabilitada.');
        }

        $hashedPassword = hash('sha256', $password);

        if ($hashedPassword !== $usuario->password_usuario) {
            return redirect()->to('login')->with('error', 'Contraseña incorrecta.');
        }

        // Guardamos la foto y el correo que pidió tu equipo
        $sesionData = [
            'id_usuario'     => $usuario->id_usuario,
            'nombre'         => $usuario->nombre_usuario . ' ' . $usuario->ap_usuario,
            'email'          => $usuario->email_usuario,
            'imagen_usuario' => $usuario->imagen_usuario,
            'id_rol'         => $usuario->id_rol,
            'isLoggedIn'     => true
        ];

        $session->set($sesionData);

        // Redirecciones separadas por rol
        if ($usuario->id_rol == 745) {
            return redirect()->to('admin/dashboard');
        } elseif ($usuario->id_rol == 125) {
            return redirect()->to('operador/dashboard');
        } elseif ($usuario->id_rol == 58) {
            return redirect()->to('/')->with('success', 'Sesión iniciada exitosamente');
        } else {
            $session->destroy();
            return redirect()->to('login')->with('error', 'Rol no válido.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function registrarCliente()
    {
        $usuariosModel = new \App\Models\UsuariosModel();

        $email = $this->request->getPost('email_usuario');

        // Comprobar si el correo ya existe
        $existeUsuario = $usuariosModel->where('email_usuario', $email)->first();
        if ($existeUsuario) {
            return redirect()->to('signup')->with('error', 'Este correo electrónico ya está registrado. Intenta iniciar sesión.');
        }

        $datosAGuardar = [
            'nombre_usuario'  => $this->request->getPost('nombre_usuario'),
            'ap_usuario'      => $this->request->getPost('ap_usuario'),
            'email_usuario'   => $email,
            // Encriptamos la contraseña en SHA-256
            'password_usuario'=> hash('sha256', $this->request->getPost('password_usuario')),
            'id_rol'          => 58, // Forzamos el rol 58 (Cliente) para que no se registren como administradores
            'estatus_usuario' => 1   // Lo activamos inmediatamente
        ];

        $usuariosModel->insert($datosAGuardar);

        return redirect()->to('login')->with('success', '¡Cuenta creada exitosamente! Ya puedes iniciar sesión.');
    }
}