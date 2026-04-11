<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Operador | Blockbuster</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/elegant-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body style="background-color: #0b0c2a;">
    <header class="header" style="background: #1a1e27;">
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
                                <li class="active"><a href="<?= base_url('operador/dashboard') ?>">DASHBOARD</a></li>
                                <li><a href="#">OPERACIONES <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('operador/clientes') ?>">Validar Clientes</a></li>
                                        <li><a href="<?= base_url('operador/pagos') ?>">Aprobar Pagos</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('/') ?>" target="_blank">VER PORTAL</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right" style="display: flex; align-items: center; gap: 15px;">
                        <span style="color: #f39c12; font-weight: 600; font-size: 14px; white-space: nowrap;">
                            <i class="fa fa-user"></i> <?= esc(session()->get('nombre')) ?>
                        </span>
                        <a href="<?= base_url('logout') ?>" style="background: #e53637; color: white; padding: 6px 14px; border-radius: 6px; text-decoration: none; font-size: 15px; font-weight: 600;">SALIR</a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    <section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('assets/img/normal-breadcrumb.jpg') ?>" style="padding: 50px 0;">
        <div class="container text-center">
            <div class="normal__breadcrumb__text">
                <h2>Panel de Captura</h2>
                <p>Bienvenido, Operador. Gestiona el catálogo de streaming.</p>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card" style="background-color: #1a1e27; border: 1px solid #333; border-radius: 10px;">
                        <div class="card-body text-center p-5">
                            <i class="fa fa-users fa-3x mb-3" style="color: #3498db;"></i>
                            <h3 style="color: white; font-family: 'Oswald';">Validación de Clientes</h3>
                            <p style="color: #b7b7b7;">Revisa y activa las cuentas de nuevos registros.</p>
                            <a href="<?= base_url('operador/clientes') ?>" class="btn btn-primary mt-2" style="background-color: #3498db; border: none;">Validar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="card" style="background-color: #1a1e27; border: 1px solid #333; border-radius: 10px;">
                        <div class="card-body text-center p-5">
                            <i class="fa fa-money fa-3x mb-3" style="color: #1ed760;"></i>
                            <h3 style="color: white; font-family: 'Oswald';">Simulaciones de Pago</h3>
                            <p style="color: #b7b7b7;">Aprueba pagos y asigna planes a los clientes.</p>
                            <a href="<?= base_url('operador/pagos') ?>" class="btn btn-success mt-2" style="background-color: #1ed760; border: none;">Revisar Pagos</a>
                        </div>
                    </div>
                </div>
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
    <script src="<?= base_url('assets/js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>