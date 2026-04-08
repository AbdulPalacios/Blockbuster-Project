<?php

namespace App\Controllers\Cliente;

use App\Controllers\BaseController;

class Inicio_vistas extends BaseController
{
    public function inicio()
    {
        return view('Cliente/inicio');
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
        return view('Cliente/blog');
    }
}