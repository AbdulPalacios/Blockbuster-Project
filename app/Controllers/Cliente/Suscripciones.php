<?php

namespace App\Controllers\Cliente;

use App\Controllers\BaseController;

class Suscripciones extends BaseController
{
    public function solicitarCambio()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $db = \Config\Database::connect();

        $idUsuario = session()->get('id_usuario');
        $idPlan = trim((string) $this->request->getPost('id_plan_solicitado'));
        $nombreTarjeta = trim((string) $this->request->getPost('nombre_tarjeta'));
        $numeroTarjeta = trim((string) $this->request->getPost('numero_tarjeta'));
        $vencimientoTarjeta = trim((string) $this->request->getPost('vencimiento_tarjeta'));
        $cvvTarjeta = trim((string) $this->request->getPost('cvv_tarjeta'));

        if ($idUsuario === null || empty($idPlan)) {
            return redirect()->to('/blog')->with('error', 'No se recibió correctamente la solicitud del plan.');
        }

        if (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $nombreTarjeta)) {
            return redirect()->to('/blog')->with('error', 'El nombre del titular no es válido.');
        }

        if (!preg_match('/^\d{4}-\d{4}-\d{4}-\d{4}$/', $numeroTarjeta)) {
            return redirect()->to('/blog')->with('error', 'El número de tarjeta no es válido.');
        }

        if (!preg_match('/^(0[1-9]|1[0-2])\/\d{2}$/', $vencimientoTarjeta)) {
            return redirect()->to('/blog')->with('error', 'La fecha de vencimiento no es válida.');
        }

        if (!preg_match('/^\d{3}$/', $cvvTarjeta)) {
            return redirect()->to('/blog')->with('error', 'El CVV no es válido.');
        }

        $plan = $db->table('planes')
            ->where('id_plan', $idPlan)
            ->where('estatus_plan', 1)
            ->get()
            ->getRow();

        if (!$plan) {
            return redirect()->to('/blog')->with('error', 'El plan seleccionado no existe o no está activo.');
        }

        $ultimos4 = substr(preg_replace('/\D/', '', $numeroTarjeta), -4);
        $tarjetaMask = 'XXXX-XXXX-XXXX-' . $ultimos4;

        $db->table('pagos')->insert([
            'fecha_registro_pago' => date('Y-m-d'),
            'estatus_pago'        => 0,
            'monto_pago'          => $plan->precio_plan,
            'tarjeta_pago'        => $tarjetaMask,
            'id_usuario'          => $idUsuario,
            'id_plan'             => $idPlan
        ]);

        return redirect()->to('/blog')->with('success', 'Tu solicitud fue enviada al operador correctamente.');
    }
}