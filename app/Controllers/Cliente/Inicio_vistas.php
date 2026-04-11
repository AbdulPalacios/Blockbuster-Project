<?php

namespace App\Controllers\Cliente;

use App\Controllers\BaseController;

class Inicio_vistas extends BaseController
{
    public function inicio()
    {
        return view('Cliente/Inicio');
    }

    public function login()
    {
        return view('Cliente/login');
    }

    public function signup()
    {
        return view('Cliente/signup');
    }

    public function categorias()
    {
        return view('Cliente/categorias');
    }
 
public function blog()
{
    $db = \Config\Database::connect();

    $planes = $db->table('planes')
        ->where('estatus_plan', 1)
        ->get()
        ->getResult();

    $planActual = null;

    if (session()->get('isLoggedIn')) {
        $idUsuario = session()->get('id_usuario');

        $planActual = $db->table('usuarios_planes')
            ->select('usuarios_planes.id_plan, planes.nombre_plan')
            ->join('planes', 'planes.id_plan = usuarios_planes.id_plan')
            ->where('usuarios_planes.id_usuario', $idUsuario)
            ->get()
            ->getRow();
    }

    return view('Cliente/blog', [
        'planes' => $planes,
        'planActual' => $planActual
    ]);
}
     public function perfil()
    {
        return view('Cliente/perfil');
    }

}