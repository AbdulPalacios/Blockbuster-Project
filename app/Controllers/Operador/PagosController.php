<?php

namespace App\Controllers\Operador;

use App\Controllers\BaseController;
use App\Models\PagosModel;
use App\Models\UsuariosPlanesModel;
use App\Models\PlanesModel;

class PagosController extends BaseController
{
    public function index()
    {
        $pagosModel = new PagosModel();

        $data['pagos_pendientes'] = $pagosModel
            ->select('pagos.*, usuarios.nombre_usuario, usuarios.ap_usuario, usuarios.email_usuario, planes.nombre_plan')
            ->join('usuarios', 'usuarios.id_usuario = pagos.id_usuario')
            ->join('planes', 'planes.id_plan = pagos.id_plan')
            ->where('pagos.estatus_pago', 0)
            ->findAll();

        return view('Operador/Pagos/index', $data);
    }

    public function aprobar($id_pago, $id_usuario, $id_plan)
    {
        $pagosModel = new PagosModel();
        $usuariosPlanesModel = new UsuariosPlanesModel();
        $planesModel = new PlanesModel();

        $plan = $planesModel->where('id_plan', $id_plan)->first();

        if (!$plan) {
            return redirect()->to('operador/pagos')->with('error', 'El plan no existe.');
        }

        $pagosModel->update($id_pago, ['estatus_pago' => 1]);

        $fechaInicio = date('Y-m-d');
        $fechaFin = $fechaInicio;
        $tipoPlanTexto = 'desconocido';

        switch ((int) $plan->tipo_plan) {
            case 8:
                $fechaFin = date('Y-m-d', strtotime($fechaInicio . ' +7 days'));
                $tipoPlanTexto = 'semanal';
                break;

            case 16:
                $fechaFin = date('Y-m-d', strtotime($fechaInicio . ' +1 month'));
                $tipoPlanTexto = 'mensual';
                break;

            case 32:
                $fechaFin = date('Y-m-d', strtotime($fechaInicio . ' +1 year'));
                $tipoPlanTexto = 'anual';
                break;

            default:
                return redirect()->to('operador/pagos')->with('error', 'El tipo de plan no es válido.');
        }

        $datosSuscripcion = [
            'fecha_registro_plan' => $fechaInicio,
            'fecha_fin_plan'      => $fechaFin,
            'id_usuario'          => $id_usuario,
            'id_plan'             => $id_plan,
            'contenidos_usados'   => 0,
            'fecha_inicio_conteo' => $fechaInicio
        ];

        $usuariosPlanesModel->insert($datosSuscripcion);

        $nombrePlan = $plan->nombre_plan ?? 'Sin nombre';

        return redirect()->to('operador/pagos')->with(
            'success',
            '¡Pago aprobado! El cliente recibió el plan ' . $nombrePlan . ' con duración ' . $tipoPlanTexto . '.'
        );
    }

    public function rechazar($id_pago)
    {
        $pagosModel = new PagosModel();

        $pagosModel->update($id_pago, ['estatus_pago' => -1]);

        return redirect()->to('operador/pagos')->with('error', 'El pago fue rechazado. El cliente no recibió el plan.');
    }
}