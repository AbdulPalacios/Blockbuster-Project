<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aprobar Pagos | Operador Blockbuster</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?= base_url('operador/dashboard') ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="<?= base_url('operador/dashboard') ?>">DASHBOARD</a></li>
                                <li class="active"><a href="#">OPERACIONES <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('operador/clientes') ?>">Validar Clientes</a></li>
                                        <li><a href="<?= base_url('operador/pagos') ?>">Aprobar Pagos</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right" style="display: flex; align-items: center; gap: 15px;">
                        <span style="color: #f39c12; font-weight: 600; font-size: 14px; white-space: nowrap;">
                            <i class="fa fa-user"></i> <?= esc(session()->get('nombre')) ?>
                        </span>
                        <a href="<?= base_url('logout') ?>" style="background: #e53637; color: white; padding: 6px 14px; border-radius: 6px; text-decoration: none;">SALIR</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('assets/img/normal-breadcrumb.jpg') ?>">
        <div class="container text-center">
            <div class="normal__breadcrumb__text">
                <h2>Verificación de Pagos</h2>
                <p>Revisa las transferencias y asigna los planes a los clientes.</p>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-lg-12">
                    <div class="section-title mb-0">
                        <h4>Pagos Pendientes de Aprobación</h4>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-dark table-hover align-middle" style="background-color: #1a1e27;">
                    <thead style="background-color: #e53637;">
                        <tr>
                            <th>Fecha y Folio</th>
                            <th>Cliente</th>
                            <th>Plan Solicitado</th>
                            <th>Detalles del Pago</th>
                            <th class="text-center">Dictamen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($pagos_pendientes)): ?>
                            <tr><td colspan="5" class="text-center" style="color: #b7b7b7;">No hay pagos pendientes de revisión. ¡Buen trabajo!</td></tr>
                        <?php else: ?>
                            <?php foreach($pagos_pendientes as $pago): ?>
                            <tr>
                                <td>
                                    <strong><?= date('d/m/Y', strtotime($pago->fecha_registro_pago)) ?></strong><br>
                                    <span style="color: #b7b7b7; font-size: 12px;">#<?= $pago->id_pago ?></span>
                                </td>
                                <td>
                                    <strong><?= $pago->nombre_usuario . ' ' . $pago->ap_usuario ?></strong><br>
                                    <small style="color: #b7b7b7;"><?= $pago->email_usuario ?></small>
                                </td>
                                <td><span class="badge" style="background-color: #3498db;"><?= $pago->nombre_plan ?></span></td>
                                <td>
                                    <span style="color: #1ed760; font-weight: bold; font-size: 16px;">$<?= number_format($pago->monto_pago, 2) ?></span><br>
                                    <small style="color: #b7b7b7;"><i class="fa fa-credit-card"></i> **** <?= substr($pago->tarjeta_pago, -4) ?></small>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('operador/pagos/aprobar/'.$pago->id_pago.'/'.$pago->id_usuario.'/'.$pago->id_plan) ?>" 
                                       class="btn btn-sm btn-success" style="background-color: #1ed760; color: #000; font-weight: bold; border:none;" 
                                       onclick="return confirm('¿Confirmas que recibiste el pago de $<?= number_format($pago->monto_pago, 2) ?>?');">
                                       <i class="fa fa-check"></i> Aprobar
                                    </a>

                                    <a href="<?= base_url('operador/pagos/rechazar/'.$pago->id_pago) ?>" 
                                       class="btn btn-sm btn-danger ml-2" style="background-color: #e53637; border:none;" 
                                       onclick="return confirm('¿Estás seguro de rechazar este pago?');">
                                       <i class="fa fa-times"></i> Rechazar
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "3000",
            "preventDuplicates": true
        };
        <?php if(session()->getFlashdata('success')): ?>
            toastr.success('<?= session()->getFlashdata('success') ?>', '¡Éxito!');
        <?php endif; ?>
        <?php if(session()->getFlashdata('error')): ?>
            toastr.error('<?= session()->getFlashdata('error') ?>', 'Error');
        <?php endif; ?>
    </script>
</body>
</html>