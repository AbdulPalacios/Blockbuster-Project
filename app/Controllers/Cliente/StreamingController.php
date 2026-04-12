<?php

namespace App\Controllers\Cliente;


use App\Controllers\BaseController;
use App\Models\StreamingModel;
use App\Models\GenerosModel;
use App\Models\UsuariosPlanesModel;
use App\Models\PlanesModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class StreamingController extends BaseController
{
    protected $streamingModel;
    protected $generosModel;
    protected $usuariosPlanesModel;
    protected $planesModel;

    public function __construct()
    {
        $this->streamingModel      = new StreamingModel();
        $this->generosModel        = new GenerosModel();
        $this->usuariosPlanesModel = new UsuariosPlanesModel();
        $this->planesModel         = new PlanesModel();
    }

   public function detalle($id = null)
{
    $session = session();

    if (!$session->get('isLoggedIn')) {
        return redirect()->to('login')->with('error', 'Debes iniciar sesión para ver este contenido.');
    }

    $idUsuario = $session->get('id_usuario');
    $idRol = (int) $session->get('id_rol');

    // 745 = Administrador
    // 125 = Operador
    // 58  = Cliente
    $esAdminUOperador = in_array($idRol, [745, 125], true);

    if (!$esAdminUOperador) {
        $suscripcion = $this->usuariosPlanesModel
            ->where('id_usuario', $idUsuario)
            ->where('fecha_fin_plan >=', date('Y-m-d'))
            ->orderBy('id_usuario_plan', 'DESC')
            ->first();

        if (!$suscripcion) {
            return redirect()->to('blog')->with('error', 'Necesitas una suscripción activa para ver este contenido.');
        }

        $plan = $this->planesModel->where('id_plan', $suscripcion->id_plan)->first();

        if (!$plan || (int)$plan->estatus_plan !== 1) {
            return redirect()->to('blog')->with('error', 'Tu plan no está disponible.');
        }

        $hoy = date('Y-m-d');

        if (empty($suscripcion->fecha_inicio_conteo)) {
            $this->usuariosPlanesModel->update($suscripcion->id_usuario_plan, [
                'fecha_inicio_conteo' => $hoy,
                'contenidos_usados'   => 0
            ]);

            $suscripcion->fecha_inicio_conteo = $hoy;
            $suscripcion->contenidos_usados = 0;
        } else {
            $dias = (strtotime($hoy) - strtotime($suscripcion->fecha_inicio_conteo)) / 86400;

            if ($dias >= 7) {
                $this->usuariosPlanesModel->update($suscripcion->id_usuario_plan, [
                    'fecha_inicio_conteo' => $hoy,
                    'contenidos_usados'   => 0
                ]);

                $suscripcion->fecha_inicio_conteo = $hoy;
                $suscripcion->contenidos_usados = 0;
            }
        }

        $usados = (int)($suscripcion->contenidos_usados ?? 0);
        $limite = (int)($plan->cantidad_limite_plan ?? 0);

        if ($usados >= $limite) {
            return redirect()->to('categorias')->with('error', 'Ya alcanzaste el límite de contenidos disponibles de tu plan esta semana.');
        }

        $this->usuariosPlanesModel->update($suscripcion->id_usuario_plan, [
            'contenidos_usados' => $usados + 1
        ]);

        $restantes = $limite - ($usados + 1);
    } else {
        $suscripcion = null;
        $plan = null;
        $restantes = 'Ilimitado';
    }

   if ($id === null || !is_numeric($id)) {
    throw PageNotFoundException::forPageNotFound('Contenido no encontrado');
}

$streaming = $this->streamingModel->where('id_streaming', $id)->first();

if (!$streaming || (int)$streaming->estatus_streaming !== 1) {
    throw PageNotFoundException::forPageNotFound('Contenido no encontrado');
}

    $genero = null;
    if (!empty($streaming->id_genero)) {
        $genero = $this->generosModel->where('id_genero', $streaming->id_genero)->first();
    }

    $otros = $this->streamingModel
        ->where('estatus_streaming', 1)
        ->where('id_streaming !=', $streaming->id_streaming)
        ->orderBy('id_streaming', 'DESC')
        ->findAll(4);

    $data = [
        'streaming'   => $streaming,
        'genero'      => $genero,
        'otros'       => $otros,
        'plan'        => $plan,
        'suscripcion' => $suscripcion,
        'restantes'   => $restantes
    ];

    return view('Cliente/streaming_detalle', $data);
}
}