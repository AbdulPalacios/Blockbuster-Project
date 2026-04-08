<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class AuthController extends BaseController
{
    public function index()
    {
        return view('login'); 
    }

    public function loginProcess()
    {
        $session = session();
        $usuariosModel = new UsuariosModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $usuario = $usuariosModel->where('email_usuario', $email)->first();

        if ($usuario) {
            if ($usuario->estatus_usuario != 1) {
                $session->setFlashdata('error', 'Tu cuenta se encuentra deshabilitada.');
                return redirect()->to('login');
            }

            $hashedPassword = hash('sha256', $password);

            if ($hashedPassword === $usuario->password_usuario) {
                
                $sesionData = [
                    'id_usuario' => $usuario->id_usuario,
                    'nombre'     => $usuario->nombre_usuario . ' ' . $usuario->ap_usuario,
                    'id_rol'     => $usuario->id_rol,
                    'isLoggedIn' => true
                ];
                $session->set($sesionData);
                if ($usuario->id_rol == 745 || $usuario->id_rol == 125) {
                    return redirect()->to('admin/dashboard'); 
                } else {
                    return redirect()->to('/'); 
                }

            } else {
                $session->setFlashdata('error', 'Contraseña incorrecta.');
                return redirect()->to('login');
            }
        } else {
            $session->setFlashdata('error', 'El correo electrónico no está registrado.');
            return redirect()->to('login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}