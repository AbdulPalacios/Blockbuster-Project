<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validar Clientes | Operador Blockbuster</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
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
                <h2>Validación de Clientes</h2>
                <p>Aprueba o bloquea el acceso de los clientes registrados.</p>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-lg-12">
                    <div class="section-title mb-0">
                        <h4>Lista de Clientes (Rol 58)</h4>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-dark table-hover" style="background-color: #1a1e27;">
                    <thead style="background-color: #e53637;">
                        <tr>
                            <th>ID</th><th>Nombre Cliente</th><th>Email</th><th>Estatus Actual</th><th class="text-center">Acción Operativa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($clientes as $c): ?>
                        <tr>
                            <td><?= $c->id_usuario ?></td>
                            <td><strong><?= $c->nombre_usuario . ' ' . $c->ap_usuario ?></strong></td>
                            <td style="color: #b7b7b7;"><?= $c->email_usuario ?></td>
                            <td>
                                <?php if($c->estatus_usuario == 1): ?>
                                    <span class="badge" style="background-color: #1ed760;">Activo / Validado</span>
                                <?php else: ?>
                                    <span class="badge badge-warning" style="color: #000;">Pendiente / Bloqueado</span>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <?php if($c->estatus_usuario != 1): ?>
                                    <a href="<?= base_url('operador/clientes/validar/'.$c->id_usuario.'/1') ?>" class="btn btn-sm btn-success" style="background-color: #1ed760; color: #000; font-weight: bold; border:none;"><i class="fa fa-check"></i> Aprobar</a>
                                <?php else: ?>
                                    <a href="<?= base_url('operador/clientes/validar/'.$c->id_usuario.'/-1') ?>" class="btn btn-sm btn-danger" style="background-color: #e53637; font-weight: bold; border:none;" onclick="return confirm('¿Bloquear a este cliente?');"><i class="fa fa-ban"></i> Suspender</a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container text-center">
            <p style="color: #b7b7b7;">&copy; <?= date('Y') ?> Blockbuster Operaciones.</p>
        </div>
    </footer>

    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true, position: 'top-end', showConfirmButton: false, timer: 3000, timerProgressBar: true,
            background: '#1a1e27', color: '#ffffff', iconColor: '#1ed760'
        });
        <?php if(session()->getFlashdata('success')): ?>
            Toast.fire({ icon: 'success', title: '<?= session()->getFlashdata('success') ?>' });
        <?php endif; ?>
    </script>
</body>
</html>