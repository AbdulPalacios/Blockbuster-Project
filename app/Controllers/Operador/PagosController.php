<?php

namespace App\Controllers\Operador;

use App\Controllers\BaseController;
use App\Models\PagosModel;     
use App\Models\UsuariosModel;

class PagosController extends BaseController
{
    public function index()
    {
        $pagosModel = new \App\Models\PagosModel();

        $data['pagos_pendientes'] = $pagosModel->select('pagos.*, usuarios.nombre_usuario, usuarios.ap_usuario, usuarios.email_usuario, planes.nombre_plan')
                                               ->join('usuarios', 'usuarios.id_usuario = pagos.id_usuario')
                                               ->join('planes', 'planes.id_plan = pagos.id_plan')
                                               ->where('pagos.estatus_pago', 0) 
                                               ->findAll();

        return view('Operador/Pagos/index', $data);
    }

   public function aprobar($id_pago, $id_usuario, $id_plan)
    {
        $pagosModel = new \App\Models\PagosModel();
        $usuariosPlanesModel = new \App\Models\UsuariosPlanesModel();
        $planesModel = new \App\Models\PlanesModel(); 

        $plan = $planesModel->find($id_plan);
        $cantidadSemanas = $plan->tipo_plan; 

        $pagosModel->update($id_pago, ['estatus_pago' => 1]);

        $fechaInicio = date('Y-m-d H:i:s');
        $fechaFin    = date('Y-m-d H:i:s', strtotime("+$cantidadSemanas weeks")); 

        $datosSuscripcion = [
            'fecha_registro_plan' => $fechaInicio,
            'fecha_fin_plan'      => $fechaFin,
            'id_usuario'          => $id_usuario,
            'id_plan'             => $id_plan
        ];

        $usuariosPlanesModel->insert($datosSuscripcion);

        return redirect()->to('operador/pagos')->with('success', "¡Pago aprobado! El cliente tiene $cantidadSemanas semanas de servicio activo.");
    }

    public function rechazar($id_pago)
    {
        $pagosModel = new PagosModel();
        
        // Lo rechazamos
        $pagosModel->update($id_pago, ['estatus_pago' => -1]);

        return redirect()->to('operador/pagos')->with('error', 'El pago fue rechazado. El cliente no recibió el plan.');
    }
}