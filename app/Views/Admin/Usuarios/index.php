<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuarios | Admin Blockbuster</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/elegant-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?= base_url('admin/dashboard') ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="<?= base_url('admin/dashboard') ?>">DASHBOARD</a></li>
                                <li class="active"><a href="#">CATÁLOGOS <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('admin/generos') ?>">Géneros</a></li>
                                        <li><a href="<?= base_url('admin/planes') ?>">Planes</a></li>
                                        <li><a href="<?= base_url('admin/usuarios') ?>">Usuarios</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('/') ?>" target="_blank">VER PORTAL</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right" style="display: flex; align-items: center; gap: 15px;">
                        <span style="color: white; font-weight: 600; font-size: 14px; white-space: nowrap;">
                            <?= esc(session()->get('nombre')) ?>
                        </span>
                        <a href="<?= base_url('logout') ?>" style="background: #e53637; color: white; padding: 6px 14px; border-radius: 6px; text-decoration: none; font-size: 15px; font-weight: 600;">SALIR</a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    <section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('assets/img/normal-breadcrumb.jpg') ?>">
        <div class="container text-center">
            <div class="normal__breadcrumb__text">
                <h2>Gestión de Usuarios</h2>
                <p>Administra al personal y a los clientes registrados.</p>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
            <?php if(session()->getFlashdata('success')): ?>
                <div class="alert alert-success" style="background-color: #1ed760; color: white; border: none;"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>

            <div class="row mb-4 align-items-center">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="section-title mb-0">
                        <h4>Directorio de Usuarios</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-right">
                    <a href="<?= base_url('admin/usuarios/crear') ?>" class="btn" style="background: transparent; border: 2px solid #e53637; color: white; font-weight: bold; padding: 8px 20px; border-radius: 4px;">
                        <i class="fa fa-user-plus"></i> Nuevo Usuario
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-dark table-hover" style="background-color: #1a1e27;">
                    <thead style="background-color: #e53637;">
                        <tr>
                            <th>ID</th><th>Nombre Completo</th><th>Email</th><th>Rol</th><th>Estatus</th><th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($usuarios as $u): ?>
                        <tr>
                            <td><?= $u->id_usuario ?></td>
                            <td><strong><?= $u->nombre_usuario . ' ' . $u->ap_usuario ?></strong></td>
                            <td style="color: #b7b7b7;"><?= $u->email_usuario ?></td>
                            <td>
                                <?php 
                                    if($u->id_rol == 745) echo '<span style="color: #e53637; font-weight: bold;">Administrador</span>';
                                    elseif($u->id_rol == 125) echo '<span style="color: #f39c12; font-weight: bold;">Operador</span>';
                                    elseif($u->id_rol == 58) echo '<span style="color: #3498db; font-weight: bold;">Cliente</span>';
                                    else echo 'Desconocido';
                                ?>
                            </td>
                            <td><?= $u->estatus_usuario == 1 ? '<span class="badge" style="background-color: #1ed760;">Activo</span>' : '<span class="badge badge-secondary">Inactivo</span>' ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/usuarios/editar/'.$u->id_usuario) ?>" class="btn btn-sm btn-warning" style="color: #000; font-weight: bold;"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('admin/usuarios/eliminar/'.$u->id_usuario) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Deseas eliminar este usuario?');"><i class="fa fa-trash"></i></a>
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
            <p style="color: #b7b7b7;">&copy; <?= date('Y') ?> Admin Blockbuster. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>