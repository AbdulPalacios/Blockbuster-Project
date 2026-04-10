<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo Streaming | Admin Blockbuster</title>
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
                                        <li><a href="<?= base_url('admin/streaming') ?>">Streaming</a></li>
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
                <h2>Catálogo de Streaming</h2>
                <p>Administra las películas, series y sus portadas.</p>
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
                        <h4>Lista de Contenido</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 text-right">
                    <a href="<?= base_url('admin/streaming/crear') ?>" class="btn" style="background: transparent; border: 2px solid #e53637; color: white; font-weight: bold; padding: 8px 20px; border-radius: 4px;">
                        <i class="fa fa-film"></i> Nuevo Título
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-dark table-hover align-middle" style="background-color: #1a1e27;">
                    <thead style="background-color: #e53637;">
                        <tr>
                            <th>Portada</th><th>Título</th><th>Clasificación</th><th>Temporadas / Duración</th><th>Estatus</th><th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($streaming as $s): ?>
                        <tr>
                            <td>
                                <?php if(!empty($s->caratula_streaming)): ?>
                                    <img src="<?= base_url('uploads/portadas/'.$s->caratula_streaming) ?>" alt="Portada" style="width: 50px; height: 75px; object-fit: cover; border-radius: 4px;">
                                <?php else: ?>
                                    <div style="width: 50px; height: 75px; background: #333; border-radius: 4px; display:flex; align-items:center; justify-content:center;"><i class="fa fa-image" style="color:#555;"></i></div>
                                <?php endif; ?>
                            </td>
                            <td><strong><?= $s->nombre_streaming ?></strong><br><small style="color: #b7b7b7;"><?= $s->fecha_estreno_streaming ?></small></td>
                            <td><span class="badge badge-warning" style="color: #000;"><?= $s->clasificacion_streaming ?></span></td>
                            <td><?= $s->temporadas_streaming > 0 ? $s->temporadas_streaming . ' Temp.' : $s->duracion_streaming ?></td>
                            <td><?= $s->estatus_streaming == 1 ? '<span class="badge" style="background-color: #1ed760;">Público</span>' : '<span class="badge badge-secondary">Oculto</span>' ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/streaming/editar/'.$s->id_streaming) ?>" class="btn btn-sm btn-warning" style="color: #000; font-weight: bold;"><i class="fa fa-edit"></i></a>
                                <a href="<?= base_url('admin/streaming/eliminar/'.$s->id_streaming) ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Deseas eliminar este título?');"><i class="fa fa-trash"></i></a>
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