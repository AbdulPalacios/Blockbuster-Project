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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<style>
    .normal-breadcrumb {
        position: relative;
        height: 320px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
        overflow: hidden;
        background-size: cover;
        background-position: center 35%;
        background-repeat: no-repeat;
    }

    .normal-breadcrumb::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to bottom,
            rgba(0,0,0,0.78) 0%,
            rgba(0,0,0,0.48) 40%,
            rgba(0,0,0,0.88) 100%
        );
    }

    .normal-breadcrumb::after {
        content: "";
        position: absolute;
        inset: 0;
        background: radial-gradient(
            circle at center,
            rgba(255,255,255,0.08),
            transparent 60%
        );
    }

    .normal-breadcrumb .container,
    .normal-breadcrumb .normal__breadcrumb__text {
        position: relative;
        z-index: 2;
    }

    .normal-breadcrumb h2 {
        font-size: 54px;
        font-weight: 700;
        margin-bottom: 12px;
        text-shadow: 0 10px 30px rgba(0,0,0,0.9);
    }

    .normal-breadcrumb p {
        font-size: 19px;
        opacity: 0.92;
        text-shadow: 0 5px 20px rgba(0,0,0,0.8);
        margin-bottom: 0;
    }

    .product.spad {
        padding-top: 70px;
        padding-bottom: 90px;
        background: linear-gradient(180deg, #05081b 0%, #070b22 100%);
    }

    .section-title h4 {
        position: relative;
        color: #fff;
        font-size: 34px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 0;
        padding-left: 20px;
    }

    .section-title h4::before {
        content: "";
        position: absolute;
        left: 0;
        top: 6px;
        width: 5px;
        height: 34px;
        border-radius: 20px;
        background: linear-gradient(180deg, #ff6262, #e53637);
        box-shadow: 0 0 16px rgba(229, 54, 55, 0.5);
    }

    .streaming-toolbar {
        margin-bottom: 28px;
    }

    .streaming-btn-new {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, rgba(229,54,55,0.12), rgba(229,54,55,0.04));
        border: 1px solid rgba(229, 54, 55, 0.7);
        color: #fff;
        font-weight: 800;
        padding: 12px 22px;
        border-radius: 14px;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 10px 25px rgba(0,0,0,0.22);
    }

    .streaming-btn-new:hover {
        color: #fff;
        transform: translateY(-3px);
        background: linear-gradient(135deg, rgba(229,54,55,0.22), rgba(229,54,55,0.08));
        box-shadow: 0 18px 28px rgba(0,0,0,0.28), 0 0 18px rgba(229,54,55,0.16);
    }

    .streaming-alert {
        background: linear-gradient(135deg, #1ed760, #18b84f);
        color: #fff;
        border: none;
        border-radius: 14px;
        padding: 14px 18px;
        box-shadow: 0 10px 24px rgba(0,0,0,0.22);
        margin-bottom: 24px;
    }

    .streaming-table-wrap {
        background: linear-gradient(180deg, rgba(18, 24, 47, 0.98) 0%, rgba(12, 16, 33, 0.98) 100%);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.35);
        animation: fadeUp 0.7s ease;
    }

    .streaming-table {
        margin-bottom: 0;
        color: #fff;
        background: transparent;
    }

    .streaming-table thead th {
        background: linear-gradient(90deg, #e53637 0%, #ff4d4d 100%);
        color: #fff;
        border: none !important;
        padding: 18px 14px;
        font-size: 15px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        vertical-align: middle;
    }

    .streaming-table tbody tr {
        background: transparent;
        transition: all 0.28s ease;
        animation: fadeUp 0.6s ease;
    }

    .streaming-table tbody tr:hover {
        background: rgba(255, 255, 255, 0.04);
        transform: scale(1.003);
        box-shadow: inset 4px 0 0 #e53637;
    }

    .streaming-table tbody td {
        padding: 18px 14px;
        vertical-align: middle;
        border-top: 1px solid rgba(255,255,255,0.09) !important;
        background: transparent !important;
    }

    .streaming-poster {
        width: 62px;
        height: 88px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 10px 18px rgba(0,0,0,0.3);
        border: 1px solid rgba(255,255,255,0.08);
        transition: transform 0.28s ease, box-shadow 0.28s ease;
    }

    .streaming-table tbody tr:hover .streaming-poster {
        transform: scale(1.06);
        box-shadow: 0 14px 24px rgba(0,0,0,0.36);
    }

    .streaming-poster-empty {
        width: 62px;
        height: 88px;
        background: linear-gradient(145deg, #232838, #161b2d);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #5a647e;
        border: 1px solid rgba(255,255,255,0.06);
    }

    .streaming-title {
        font-size: 19px;
        font-weight: 800;
        color: #fff;
        margin-bottom: 4px;
        line-height: 1.3;
    }

    .streaming-date {
        color: #9aa6c4;
        font-size: 13px;
        font-weight: 600;
    }

    .streaming-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 5px 10px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 800;
        line-height: 1;
        white-space: nowrap;
    }

    .streaming-badge-class {
        background: #ffc107;
        color: #111;
        box-shadow: 0 0 0 1px rgba(255,193,7,0.18);
    }

    .streaming-badge-public {
        background: #1ed760;
        color: #fff;
        box-shadow: 0 0 0 1px rgba(30,215,96,0.18);
    }

    .streaming-badge-hidden {
        background: #6c757d;
        color: #fff;
    }

    .streaming-meta {
        color: #d9e2ff;
        font-weight: 700;
        font-size: 15px;
    }

    .streaming-actions {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        flex-wrap: wrap;
    }

    .streaming-action-btn {
        width: 38px;
        height: 38px;
        border: none;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.25s ease;
        font-size: 15px;
    }

    .streaming-action-btn.edit {
        background: #ffc107;
        color: #111;
        box-shadow: 0 8px 18px rgba(255,193,7,0.22);
    }

    .streaming-action-btn.delete {
        background: #e53637;
        color: #fff;
        box-shadow: 0 8px 18px rgba(229,54,55,0.22);
    }

    .streaming-action-btn:hover {
        transform: translateY(-2px) scale(1.06);
    }

    .streaming-empty {
        text-align: center;
        padding: 60px 20px;
        color: #a9b5d3;
    }

    .streaming-empty i {
        font-size: 48px;
        color: #e53637;
        margin-bottom: 14px;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(18px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 991px) {
        .normal-breadcrumb {
            height: 280px;
        }

        .normal-breadcrumb h2 {
            font-size: 42px;
        }

        .section-title h4 {
            font-size: 28px;
        }

        .streaming-btn-new {
            margin-top: 18px;
        }
    }

    @media (max-width: 767px) {
        .normal-breadcrumb {
            height: 240px;
        }

        .normal-breadcrumb h2 {
            font-size: 34px;
        }

        .normal-breadcrumb p {
            font-size: 16px;
        }

        .streaming-title {
            font-size: 16px;
        }

        .streaming-table thead th,
        .streaming-table tbody td {
            padding: 14px 10px;
        }

        .streaming-poster,
        .streaming-poster-empty {
            width: 54px;
            height: 78px;
        }
    }
</style>
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
                                <li><a href="<?= base_url('admin/dashboard') ?>">INICIO</a></li>
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
                           Administrador: <?= esc(session()->get('nombre')) ?>
                        </span>
                        <a href="<?= base_url('logout') ?>" style="background: #e53637; color: white; padding: 6px 14px; border-radius: 6px; text-decoration: none; font-size: 15px; font-weight: 600;">SALIR</a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    <section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('assets/img/123.jpg') ?>">
        <div class="container text-center">
            <div class="normal__breadcrumb__text">
                <h2>Catálogo de Streaming</h2>
                <p>Administra las películas, series y sus portadas.</p>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
           

<div class="row mb-4 align-items-center streaming-toolbar">
    <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="section-title mb-0">
            <h4>Lista de Contenido</h4>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 text-right">
        <a href="<?= base_url('admin/streaming/crear') ?>" class="streaming-btn-new">
            <i class="fa fa-film"></i> Nuevo Título
        </a>
    </div>
</div>

<div class="streaming-table-wrap">
    <div class="table-responsive">
        <table class="table streaming-table align-middle">
            <thead>
                <tr>
                    <th>Portada</th>
                    <th>Título</th>
                    <th>Clasificación</th>
                    <th>Temporadas / Duración</th>
                    <th>Estatus</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($streaming)): ?>
                    <?php foreach($streaming as $s): ?>
                    <tr>
                        <td>
                            <?php if(!empty($s->caratula_streaming)): ?>
                                <img src="<?= base_url('uploads/portadas/'.$s->caratula_streaming) ?>" alt="Portada" class="streaming-poster">
                            <?php else: ?>
                                <div class="streaming-poster-empty">
                                    <i class="fa fa-image"></i>
                                </div>
                            <?php endif; ?>
                        </td>

                        <td>
                            <div class="streaming-title"><?= esc($s->nombre_streaming) ?></div>
                            <div class="streaming-date"><?= esc($s->fecha_estreno_streaming) ?></div>
                        </td>

                        <td>
                            <span class="streaming-badge streaming-badge-class">
                                <?= esc($s->clasificacion_streaming) ?>
                            </span>
                        </td>

                        <td>
                            <span class="streaming-meta">
                                <?= $s->temporadas_streaming > 0 ? esc($s->temporadas_streaming . ' Temp.') : esc($s->duracion_streaming) ?>
                            </span>
                        </td>

                        <td>
                            <?php if($s->estatus_streaming == 1): ?>
                                <span class="streaming-badge streaming-badge-public">Público</span>
                            <?php else: ?>
                                <span class="streaming-badge streaming-badge-hidden">Oculto</span>
                            <?php endif; ?>
                        </td>

                        <td class="text-center">
                            <div class="streaming-actions">
                                <a href="<?= base_url('admin/streaming/editar/'.$s->id_streaming) ?>" class="streaming-action-btn edit" title="Editar">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="<?= base_url('admin/streaming/eliminar/'.$s->id_streaming) ?>" class="streaming-action-btn delete" title="Eliminar" onclick="return confirm('¿Deseas eliminar este título?');">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">
                            <div class="streaming-empty">
                                <i class="fa fa-film"></i>
                                <h5 style="color:#fff; font-weight:800; margin-bottom:8px;">No hay contenido registrado</h5>
                                <p style="margin:0;">Empieza agregando tu primer título al catálogo.</p>
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
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