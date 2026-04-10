<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Perfil de usuario Blockbuster">
    <meta name="keywords" content="perfil, blockbuster, usuario">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Perfil | Blockbuster</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/plyr.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">

    <style>
    :root {
        --bb-blue: #0038a8;
        --bb-blue-dark: #001b4d;
        --bb-blue-deep: #020b1f;
        --bb-yellow: #ffd23f;
        --bb-yellow-strong: #ffcc00;
        --bb-white: #ffffff;
        --bb-text: #dbe7ff;
        --bb-muted: #93a4c9;
        --bb-card: rgba(10, 20, 45, 0.82);
        --bb-border: rgba(255, 255, 255, 0.10);
        --bb-shadow: 0 20px 60px rgba(0, 0, 0, 0.45);
    }

    .profile-section {
    position: relative;
    padding: 80px 0;
    min-height: 100vh;
    background: #0b0c2a;
}

    .profile-section::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
            linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        background-size: 30px 30px;
        opacity: 0.12;
        pointer-events: none;
    }

    .profile-shell {
        max-width: 1450px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .profile-main-card {
        width: 100%;
        background: linear-gradient(145deg, rgba(7, 18, 43, 0.92), rgba(6, 12, 28, 0.96));
        border: 1px solid var(--bb-border);
        border-radius: 28px;
        overflow: hidden;
        box-shadow: var(--bb-shadow);
        backdrop-filter: blur(12px);
    }

    .profile-banner {
        position: relative;
        min-height: 220px;
        padding: 36px 40px 30px;
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 20px;
        background:
            linear-gradient(120deg, rgba(0, 56, 168, 0.88), rgba(0, 27, 77, 0.82)),
            url('<?= base_url('assets/img/normal-breadcrumb.jpg') ?>') center/cover no-repeat;
    }

    .profile-banner::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(2, 8, 22, 0.80) 0%, rgba(2, 8, 22, 0.35) 55%, rgba(2, 8, 22, 0.70) 100%);
    }

    .profile-banner-content,
    .profile-banner-actions {
        position: relative;
        z-index: 2;
    }

    .profile-banner-kicker {
        display: inline-block;
        color: var(--bb-yellow);
        font-size: 13px;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .profile-banner-title {
        color: var(--bb-white);
        font-size: 40px;
        line-height: 1.1;
        font-weight: 900;
        margin: 0 0 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .profile-banner-subtitle {
        color: #d9e6ff;
        font-size: 16px;
        max-width: 520px;
        margin: 0;
    }

    .profile-layout {
        padding: 24px 34px 34px;
        margin-top: 0;
        position: relative;
        z-index: 3;
    }

    .profile-top-grid {
        display: grid;
        grid-template-columns: 320px 1fr;
        gap: 24px;
        align-items: start;
    }

    .profile-user-panel,
    .profile-info-panel,
    .profile-slider-panel,
    .profile-edit-panel {
        background: var(--bb-card);
        border: 1px solid var(--bb-border);
        border-radius: 24px;
        box-shadow: 0 18px 40px rgba(0, 0, 0, 0.28);
        backdrop-filter: blur(10px);
    }

    .profile-user-panel {
        padding: 26px 22px;
        text-align: center;
    }

    .profile-avatar-wrap {
        position: relative;
        width: 140px;
        height: 140px;
        margin: 0 auto 18px;
    }

    .profile-avatar-ring {
        position: absolute;
        inset: -6px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--bb-yellow), #ff9d00, var(--bb-blue));
        filter: blur(0.2px);
    }

    .profile-avatar {
        position: relative;
        width: 140px;
        height: 140px;
        border-radius: 50%;
        overflow: hidden;
        background: linear-gradient(135deg, #0b2a66, #07142f);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--bb-white);
        font-size: 44px;
        font-weight: 900;
        border: 5px solid rgba(255,255,255,0.08);
        box-shadow: 0 0 30px rgba(255, 210, 63, 0.25);
    }

    .profile-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .avatar-edit-btn {
        position: absolute;
        right: 2px;
        bottom: 6px;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: none;
        background: linear-gradient(135deg, var(--bb-yellow), #ffb800);
        color: #111;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        box-shadow: 0 10px 22px rgba(0,0,0,.35);
        cursor: pointer;
        transition: .25s ease;
        z-index: 4;
    }

    .avatar-edit-btn:hover {
        transform: scale(1.08);
    }

    .profile-name {
        color: var(--bb-white);
        font-size: 30px;
        font-weight: 900;
        line-height: 1.15;
        margin-bottom: 8px;
    }

    .profile-role {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 8px 18px;
        border-radius: 999px;
        background: linear-gradient(135deg, var(--bb-yellow), #ffb300);
        color: #111;
        font-size: 12px;
        font-weight: 900;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        margin-bottom: 12px;
        box-shadow: 0 10px 18px rgba(255, 204, 0, 0.20);
    }

    .profile-user-meta {
        color: var(--bb-muted);
        font-size: 14px;
        margin-bottom: 22px;
    }

    .profile-side-buttons {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .profile-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 13px 18px;
        border-radius: 14px;
        font-weight: 800;
        text-decoration: none;
        border: none;
        transition: .25s ease;
        cursor: pointer;
    }

    .profile-btn-primary {
        background: linear-gradient(135deg, var(--bb-yellow), #ffb300);
        color: #111;
        box-shadow: 0 10px 24px rgba(255, 204, 0, 0.20);
    }

    .profile-btn-primary:hover {
        transform: translateY(-2px);
        color: #111;
    }

    .profile-btn-secondary {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.12);
        color: var(--bb-white);
    }

    .profile-btn-secondary:hover {
        background: rgba(255,255,255,0.08);
        color: var(--bb-white);
        transform: translateY(-2px);
    }

    .profile-info-panel {
        padding: 26px;
    }

    .profile-info-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 14px;
        flex-wrap: wrap;
        margin-bottom: 22px;
    }

    .panel-title {
        color: var(--bb-white);
        font-size: 24px;
        font-weight: 900;
        margin: 0;
    }

    .panel-subtitle {
        color: var(--bb-muted);
        font-size: 14px;
        margin-top: 4px;
    }

    .edit-main-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg, var(--bb-blue), #1b59d1);
        color: #fff;
        padding: 12px 18px;
        border-radius: 14px;
        font-weight: 800;
        border: 1px solid rgba(255,255,255,0.10);
        box-shadow: 0 12px 24px rgba(0, 56, 168, 0.25);
        cursor: pointer;
        transition: .25s ease;
    }

    .edit-main-btn:hover {
        transform: translateY(-2px);
    }

    .profile-stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        margin-bottom: 18px;
    }

    .stat-card {
        position: relative;
        overflow: hidden;
        background: linear-gradient(145deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02));
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 18px;
        padding: 18px;
        min-height: 130px;
        transition: all 0.35s ease;
    }

    .stat-card::before {
        content: "";
        position: absolute;
        top: -20px;
        right: -20px;
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: rgba(255, 210, 63, 0.08);
    }

    .stat-card-link {
        display: block;
        text-decoration: none;
        color: inherit;
        cursor: pointer;
    }

    .stat-card-link::after {
        content: "";
        position: absolute;
        inset: 0;
        border-radius: 18px;
        background: radial-gradient(circle at top left, rgba(255,210,63,0.16), transparent 42%);
        opacity: 0;
        transition: 0.35s ease;
        pointer-events: none;
    }

    .stat-card-link:hover {
        text-decoration: none;
        color: inherit;
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 25px 40px rgba(0,0,0,0.45);
        border-color: rgba(255, 210, 63, 0.6);
    }

    .stat-card-link:hover::after {
        opacity: 1;
    }

    .stat-card-link:hover .stat-icon {
        transform: scale(1.10) rotate(5deg);
        box-shadow: 0 14px 26px rgba(255, 204, 0, 0.28);
    }

   .stat-card-link .stat-label {
    color: var(--bb-muted);
}

.stat-card-link .stat-value {
    color: var(--bb-white);
}

.stat-card-link .stat-sub {
    color: #b8c7eb;
}

    .stat-icon {
        width: 44px;
        height: 44px;
        border-radius: 14px;
        background: linear-gradient(135deg, var(--bb-yellow), #ffb300);
        color: #111;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        margin-bottom: 16px;
        box-shadow: 0 10px 20px rgba(255, 204, 0, 0.18);
        transition: 0.3s ease;
    }

    .stat-label {
        color: var(--bb-muted);
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1.1px;
        margin-bottom: 6px;
        font-weight: 700;
    }

    .stat-value {
        color: var(--bb-white);
        font-size: 24px;
        font-weight: 900;
        line-height: 1.1;
    }

    .stat-sub {
        color: #b8c7eb;
        font-size: 13px;
        margin-top: 6px;
    }

    .profile-info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }

    .profile-info-box {
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.06);
        border-radius: 18px;
        padding: 18px;
        min-height: 96px;
    }

    .profile-label {
        color: var(--bb-muted);
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
        font-weight: 700;
    }

    .profile-value {
        color: var(--bb-white);
        font-size: 18px;
        font-weight: 800;
        word-break: break-word;
        line-height: 1.35;
    }

    .profile-value.status-active {
        color: var(--bb-yellow);
    }

    .profile-slider-panel {
        margin-top: 24px;
        padding: 26px;
    }

    .slider-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 14px;
        flex-wrap: wrap;
        margin-bottom: 18px;
    }

    .slider-title {
        color: var(--bb-white);
        font-size: 24px;
        font-weight: 900;
        margin: 0;
    }

    .slider-subtitle {
        color: var(--bb-muted);
        font-size: 14px;
        margin-top: 4px;
    }

    .movie-row {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 16px;
    }

    .movie-card {
        position: relative;
        overflow: hidden;
        border-radius: 18px;
        min-height: 230px;
        background: linear-gradient(180deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02));
        border: 1px solid rgba(255,255,255,0.08);
        transition: .28s ease;
    }

    .movie-card:hover {
        transform: translateY(-6px) scale(1.02);
        box-shadow: 0 20px 30px rgba(0,0,0,.35);
    }

    .movie-poster {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        filter: saturate(1.08);
    }

    .movie-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(0,0,0,0.12) 15%, rgba(0,0,0,0.82) 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 16px;
    }

    .movie-progress {
        width: 100%;
        height: 6px;
        background: rgba(255,255,255,0.16);
        border-radius: 999px;
        overflow: hidden;
        margin-bottom: 12px;
    }

    .movie-progress span {
        display: block;
        height: 100%;
        border-radius: 999px;
        background: linear-gradient(90deg, var(--bb-yellow), #ffb300);
    }

    .movie-title {
        color: var(--bb-white);
        font-size: 16px;
        font-weight: 800;
        line-height: 1.25;
        margin-bottom: 4px;
    }

    .movie-meta {
        color: #d6e3ff;
        font-size: 13px;
    }

    .profile-edit-panel {
        display: none;
        margin-top: 24px;
        padding: 26px;
    }

    .profile-edit-panel.active {
        display: block;
    }

    .edit-panel-title {
        color: var(--bb-white);
        font-size: 24px;
        font-weight: 900;
        margin-bottom: 6px;
    }

    .edit-panel-subtitle {
        color: var(--bb-muted);
        font-size: 14px;
        margin-bottom: 22px;
    }

    .profile-form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 16px;
    }

    .profile-form-group.full-width {
        grid-column: 1 / -1;
    }

    .profile-input {
        width: 100%;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.10);
        color: #fff;
        border-radius: 14px;
        padding: 15px 16px;
        outline: none;
        transition: .25s ease;
    }

    .profile-input:focus {
        border-color: rgba(255, 210, 63, 0.65);
        box-shadow: 0 0 0 3px rgba(255, 210, 63, 0.12);
    }

    .profile-input::placeholder {
        color: #a0b2db;
    }

    .profile-note {
        color: var(--bb-muted);
        font-size: 13px;
        margin-top: 8px;
    }

    .hidden-file {
        display: none;
    }

    .profile-actions {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
        margin-top: 22px;
    }

    .header__right .logout-btn {
        background: #e53637;
        color: white;
        padding: 6px 14px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 15px;
        font-weight: 600;
    }

    .header__right .logout-btn:hover {
        color: white;
        background: #ff4d4f;
    }

    @media (max-width: 1199px) {
        .profile-stats {
            grid-template-columns: repeat(2, 1fr);
        }

        .movie-row {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }

    @media (max-width: 991px) {
        .profile-top-grid {
            grid-template-columns: 1fr;
        }

        .profile-stats,
        .profile-info-grid,
        .profile-form-grid {
            grid-template-columns: 1fr;
        }

        .movie-row {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .profile-banner {
            padding: 30px 24px;
            min-height: auto;
        }

        .profile-layout {
            padding: 18px 18px 24px;
            margin-top: 0;
        }
    }

    @media (max-width: 767px) {
        .profile-stats {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 575px) {
        .profile-banner-title {
            font-size: 28px;
        }

        .panel-title,
        .slider-title,
        .edit-panel-title {
            font-size: 22px;
        }

        .profile-name {
            font-size: 26px;
        }

        .movie-row {
            grid-template-columns: 1fr;
        }

        .profile-banner {
            min-height: 190px;
        }
    }
</style>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?= base_url('/') ?>">
                            <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="<?= base_url('/') ?>">INICIO</a></li>
                                <li>
                                    <a href="<?= base_url('categorias') ?>">CATEGORIAS <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="#">Comedia</a></li>
                                        <li><a href="#">Acción</a></li>
                                        <li><a href="#">Amor</a></li>

                                        <?php if (!session()->get('isLoggedIn')): ?>
                                            <li><a href="<?= base_url('signup') ?>">Registrarse</a></li>
                                            <li><a href="<?= base_url('login') ?>">Iniciar Sesión</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('blog') ?>">SUSCRIPCIONES</a></li>

                                <?php if (session()->get('isLoggedIn')): ?>
                                    <li class="active"><a href="<?= base_url('perfil') ?>">PERFIL</a></li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="header__right" style="display: flex; align-items: center; gap: 15px;">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>

                        <?php if (session()->get('isLoggedIn')): ?>
                            <span style="color: white; font-weight: 600; font-size: 14px; white-space: nowrap;">
                                <?= esc(session()->get('nombre')) ?>
                            </span>

                            <a href="<?= base_url('logout') ?>" class="logout-btn">
                                SALIR
                            </a>
                        <?php else: ?>
                            <a href="<?= base_url('login') ?>">
                                <span class="icon_profile"></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    
<section class="profile-section">
    <div class="container profile-shell">
        <?php
            $nombreCompleto = session()->get('nombre') ?? 'Usuario';
            $partes = explode(' ', trim($nombreCompleto));
            $iniciales = '';

            if (isset($partes[0][0])) $iniciales .= strtoupper($partes[0][0]);
            if (isset($partes[1][0])) $iniciales .= strtoupper($partes[1][0]);

            $rol = session()->get('id_rol');
            $rolTexto = 'Usuario';

            if ($rol == 745) {
                $rolTexto = 'Administrador';
            } elseif ($rol == 125) {
                $rolTexto = 'Operador';
            } elseif ($rol == 58) {
                $rolTexto = 'Cliente';
            }

            $avatar = session()->get('imagen_usuario');
            $email = session()->get('email') ?? 'correo@ejemplo.com';
            $estadoSesion = session()->get('isLoggedIn') ? 'Sesión activa' : 'Sin sesión';
            $nombrePlan = $plan->nombre_plan ?? 'Sin plan';
            $fechaRegistroPlan = $plan->fecha_registro_plan ?? 'No disponible';
            $fechaFinPlan = $plan->fecha_fin_plan ?? 'No disponible';
            $cantidadLimitePlan = $plan->cantidad_limite_plan ?? 'No definido';

            $tipoPlanTexto = 'No definido';
            if (isset($plan->tipo_plan)) {
                if ((int)$plan->tipo_plan === 8) {
            $tipoPlanTexto = 'Semanal';
                } elseif ((int)$plan->tipo_plan === 16) {
            $tipoPlanTexto = 'Mensual';
                } elseif ((int)$plan->tipo_plan === 32) {
            $tipoPlanTexto = 'Anual';
            }
        }
    ?>

        <div class="profile-main-card">
            <div class="profile-banner">
                <div class="profile-banner-content">
                    <span class="profile-banner-kicker">Blockbuster</span>
                    <h2 class="profile-banner-title">Mi Perfil</h2>
                    <p class="profile-banner-subtitle">
                        Administra tu cuenta, consulta tus datos.
                    </p>
                </div>

              
            </div>

            <div class="profile-layout">
                <div class="profile-top-grid">
                    <div class="profile-user-panel">
                        <div class="profile-avatar-wrap">
                            <div class="profile-avatar-ring"></div>

                            <div class="profile-avatar">
                                <?php if (!empty($avatar)): ?>
                                    <img src="<?= base_url('uploads/perfiles/' . $avatar) ?>" alt="Foto de perfil">
                                <?php else: ?>
                                    <?= $iniciales ?: 'U' ?>
                                <?php endif; ?>
                            </div>

                            <label for="foto_perfil" class="avatar-edit-btn" title="Cambiar foto">
                                <i class="fa fa-camera"></i>
                            </label>
                        </div>

                        <h3 class="profile-name"><?= esc($nombreCompleto) ?></h3>
                        <div class="profile-role"><?= esc($rolTexto) ?></div>
                        <div class="profile-user-meta">
                            Miembro activo de Blockbuster
                        </div>

                        <div class="profile-side-buttons">
                            <a href="<?= base_url('/') ?>" class="profile-btn profile-btn-primary">
                                <i class="fa fa-home"></i> Volver al inicio
                            </a>

                            <a href="<?= base_url('logout') ?>" class="profile-btn profile-btn-secondary">
                                <i class="fa fa-sign-out"></i> Cerrar sesión
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="profile-info-panel">
                            <div class="profile-info-header">
                                <div>
                                    <h3 class="panel-title">Panel de cuenta</h3>
                                    <div class="panel-subtitle">Resumen visual de tu perfil dentro de la plataforma</div>
                                </div>

                                <button type="button" class="edit-main-btn" onclick="toggleEditForm()">
                                    <i class="fa fa-pencil"></i> Editar datos
                                </button>
                            </div>
<div class="profile-stats">
    <a href="<?= base_url('blog') ?>" class="stat-card stat-card-link">
    <div class="stat-icon">
        <i class="fa fa-diamond"></i>
    </div>
    <div class="stat-label">Plan actual</div>
    <div class="stat-value"><?= esc($nombrePlan ?? 'Sin plan') ?></div>
    <div class="stat-sub">Toca para mejorar tu plan</div>
</a>

    <div class="stat-card">
        <div class="stat-icon">
            <i class="fa fa-calendar"></i>
        </div>
        <div class="stat-label">Fecha de registro</div>
        <div class="stat-value"><?= esc($fechaRegistroPlan ?? 'No disponible') ?></div>
        <div class="stat-sub">Inicio del plan</div>
    </div>

    <div class="stat-card">
        <div class="stat-icon">
            <i class="fa fa-clock-o"></i>
        </div>
        <div class="stat-label">Fecha de fin</div>
        <div class="stat-value"><?= esc($fechaFinPlan ?? 'No disponible') ?></div>
        <div class="stat-sub">Vencimiento del plan</div>
    </div>

    <div class="stat-card">
        <div class="stat-icon">
            <i class="fa fa-list-ol"></i>
        </div>
        <div class="stat-label">Límite del plan</div>
        <div class="stat-value"><?= esc($cantidadLimitePlan ?? 'No definido') ?></div>
        <div class="stat-sub">Cantidad permitida</div>
    </div>

    <div class="stat-card">
        <div class="stat-icon">
            <i class="fa fa-tag"></i>
        </div>
        <div class="stat-label">Tipo de plan</div>
        <div class="stat-value"><?= esc($tipoPlanTexto ?? 'No definido') ?></div>
        <div class="stat-sub">Frecuencia del plan</div>
    </div>
</div>

                            <div class="profile-info-grid">
                                <div class="profile-info-box">
                                    <div class="profile-label">Nombre completo</div>
                                    <div class="profile-value"><?= esc($nombreCompleto) ?></div>
                                </div>

                                <div class="profile-info-box">
                                    <div class="profile-label">Correo electrónico</div>
                                    <div class="profile-value"><?= esc($email) ?></div>
                                </div>

                                <div class="profile-info-box">
                                    <div class="profile-label">Rol de cuenta</div>
                                    <div class="profile-value"><?= esc($rolTexto) ?></div>
                                </div>

                                <div class="profile-info-box">
                                    <div class="profile-label">Estado de sesión</div>
                                    <div class="profile-value status-active"><?= esc($estadoSesion) ?></div>
                                </div>
                            </div>
                        </div>

                    
                        <div id="editProfilePanel" class="profile-edit-panel">
                            <h3 class="edit-panel-title">Editar perfil</h3>
                            <div class="edit-panel-subtitle">
                                Actualiza tu información, cambia tu foto y modifica tu contraseña desde este panel.
                            </div>

                            <form action="<?= base_url('perfil/actualizar') ?>" method="post" enctype="multipart/form-data">
                                <div class="profile-form-grid">
                                    <div class="profile-form-group">
                                        <div class="profile-label">Nombre completo</div>
                                        <input type="text" name="nombre" class="profile-input" value="<?= esc($nombreCompleto) ?>" placeholder="Escribe tu nombre">
                                    </div>

                                    <div class="profile-form-group">
                                        <div class="profile-label">Correo electrónico</div>
                                        <input type="email" name="email" class="profile-input" value="<?= esc($email) ?>" placeholder="Escribe tu correo">
                                    </div>

                                    <div class="profile-form-group full-width">
                                        <div class="profile-label">Cambiar foto</div>
                                        <input type="file" name="foto_perfil" id="foto_perfil" class="profile-input hidden-file" accept="image/*">
                                        <input type="text" id="foto_nombre" class="profile-input" placeholder="Selecciona una imagen" readonly>
                                        <div class="profile-note">Haz clic en el ícono de cámara o aquí para elegir una imagen.</div>
                                    </div>

                                    <div class="profile-form-group">
                                        <div class="profile-label">Nueva contraseña</div>
                                        <input type="password" name="password" class="profile-input" placeholder="Nueva contraseña">
                                    </div>

                                    <div class="profile-form-group">
                                        <div class="profile-label">Confirmar contraseña</div>
                                        <input type="password" name="password_confirm" class="profile-input" placeholder="Confirmar nueva contraseña">
                                    </div>
                                </div>

                                <div class="profile-note">
                                    Déjalo en blanco si no deseas cambiar la contraseña.
                                </div>

                                <div class="profile-actions">
                                    <button type="submit" class="profile-btn profile-btn-primary" style="width:auto;">
                                        <i class="fa fa-save"></i> Guardar cambios
                                    </button>

                                    <button type="button" class="profile-btn profile-btn-secondary" style="width:auto;" onclick="toggleEditForm()">
                                        <i class="fa fa-times"></i> Cancelar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="<?= base_url('/') ?>">
                            <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li><a href="<?= base_url('/') ?>">Inicio</a></li>
                            <li><a href="<?= base_url('categorias') ?>">Categorías</a></li>
                            <li><a href="<?= base_url('blog') ?>">Suscripciones</a></li>

                            <?php if (session()->get('isLoggedIn')): ?>
                                <li class="active"><a href="<?= base_url('perfil') ?>">Perfil</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3"></div>
            </div>
        </div>
    </footer>

    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Buscar aquí.....">
            </form>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/player.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/mixitup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.slicknav.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
<script>
    function toggleEditForm() {
        const panel = document.getElementById('editProfilePanel');
        if (panel) {
            panel.classList.toggle('active');
        }
    }

    const fotoPerfilInput = document.getElementById('foto_perfil');
    const fotoNombreInput = document.getElementById('foto_nombre');

    if (fotoPerfilInput) {
        fotoPerfilInput.addEventListener('change', function () {
            const nombre = this.files.length ? this.files[0].name : '';
            if (fotoNombreInput) {
                fotoNombreInput.value = nombre;
            }
        });
    }

    const avatarBtn = document.querySelector('.avatar-edit-btn');
    if (avatarBtn && fotoPerfilInput) {
        avatarBtn.addEventListener('click', function () {
            fotoPerfilInput.click();
        });
    }

    if (fotoNombreInput && fotoPerfilInput) {
        fotoNombreInput.addEventListener('click', function () {
            fotoPerfilInput.click();
        });
    }
</script>
</body>

</html>