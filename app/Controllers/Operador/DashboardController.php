<?php

namespace App\Controllers\Operador;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('Operador/dashboard');
    }
}