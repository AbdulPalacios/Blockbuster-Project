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
        .profile-section {
            padding: 90px 0;
            background: linear-gradient(180deg, #0b0c2a 0%, #12153d 100%);
            min-height: 100vh;
        }

        .profile-card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 24px;
            padding: 35px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.35);
            backdrop-filter: blur(8px);
        }

        .profile-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .profile-user {
            display: flex;
            align-items: center;
            gap: 22px;
            flex-wrap: wrap;
        }

        .profile-avatar-wrap {
            position: relative;
            width: 120px;
            height: 120px;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            background: linear-gradient(135deg, #e53637, #ff6b6b);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 40px;
            font-weight: 700;
            box-shadow: 0 8px 20px rgba(229, 54, 55, 0.35);
            border: 4px solid rgba(255,255,255,0.10);
        }

        .profile-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .avatar-edit-btn {
            position: absolute;
            right: 4px;
            bottom: 4px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            border: none;
            background: #e53637;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 18px rgba(0,0,0,.25);
            cursor: pointer;
        }

        .profile-name {
            color: #ffffff;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 8px;
            line-height: 1.2;
        }

        .profile-role {
            display: inline-block;
            background: #e53637;
            color: #ffffff;
            font-size: 12px;
            font-weight: 700;
            padding: 7px 16px;
            border-radius: 999px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .edit-main-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.14);
            color: #fff;
            padding: 11px 16px;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: .3s;
        }

        .edit-main-btn:hover {
            background: rgba(255,255,255,0.07);
        }

        .profile-info-box {
            background: rgba(255,255,255,0.03);
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 18px;
            border: 1px solid rgba(255,255,255,0.06);
        }

        .profile-label {
            color: #b7b7b7;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 7px;
        }

        .profile-value {
            color: #ffffff;
            font-size: 18px;
            font-weight: 700;
            word-break: break-word;
        }

        .profile-actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 24px;
        }

        .profile-btn {
            display: inline-block;
            padding: 12px 22px;
            border-radius: 12px;
            font-weight: 700;
            text-decoration: none;
            transition: .3s;
            border: none;
        }

        .profile-btn-primary {
            background: #e53637;
            color: #ffffff;
        }

        .profile-btn-primary:hover {
            background: #ff4d4f;
            color: #ffffff;
        }

        .profile-btn-secondary {
            background: transparent;
            border: 1px solid rgba(255,255,255,0.18);
            color: #ffffff;
        }

        .profile-btn-secondary:hover {
            background: rgba(255,255,255,0.08);
            color: #ffffff;
        }

        .profile-edit-form {
            display: none;
            margin-top: 10px;
        }

        .profile-edit-form.active {
            display: block;
        }

        .profile-input {
            width: 100%;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.10);
            color: #fff;
            border-radius: 12px;
            padding: 14px 16px;
            margin-bottom: 14px;
        }

        .profile-input::placeholder {
            color: #b7b7b7;
        }

        .profile-note {
            color: #b7b7b7;
            font-size: 13px;
            margin-top: 8px;
        }

        .hidden-file {
            display: none;
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

    <section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('assets/img/normal-breadcrumb.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Mi Perfil</h2>
                        <p>Consulta y actualiza la información de tu cuenta</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="profile-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="profile-card">
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
                        ?>

                        <div class="profile-top">
                            <div class="profile-user">
                                <div class="profile-avatar-wrap">
                                    <div class="profile-avatar">
                                        <?php if (!empty($avatar)): ?>
                                            <img src="<?= base_url('uploads/perfiles/' . $avatar) ?>" alt="Foto de perfil">
                                        <?php else: ?>
                                            <?= $iniciales ?: 'U' ?>
                                        <?php endif; ?>
                                    </div>

                                    <label for="foto_perfil" class="avatar-edit-btn" title="Cambiar foto">
                                        <i class="fa fa-pencil"></i>
                                    </label>
                                </div>

                                <div>
                                    <h2 class="profile-name"><?= esc($nombreCompleto) ?></h2>
                                    <div class="profile-role"><?= esc($rolTexto) ?></div>
                                </div>
                            </div>

                            <button type="button" class="edit-main-btn" onclick="toggleEditForm()">
                                <i class="fa fa-pencil"></i> Editar perfil
                            </button>
                        </div>

                        <div class="profile-info-box">
                            <div class="profile-label">Nombre completo</div>
                            <div class="profile-value"><?= esc($nombreCompleto) ?></div>
                        </div>

                        <div class="profile-info-box">
                        <div class="profile-label">Correo electrónico</div>
                             <div class="profile-value">
                                   <?= esc(session()->get('email')) ?>
                          </div>
                                    </div>

                        <div class="profile-info-box">
                            <div class="profile-label">Estado de sesión</div>
                            <div class="profile-value">
                                <?= session()->get('isLoggedIn') ? 'Sesión activa' : 'Sin sesión' ?>
                            </div>
                        </div>

                        <form id="editProfileForm" class="profile-edit-form" action="<?= base_url('perfil/actualizar') ?>" method="post" enctype="multipart/form-data">
                            <div class="profile-info-box">
                                <div class="profile-label">Editar nombre</div>
                                <input type="text" name="nombre" class="profile-input" value="<?= esc($nombreCompleto) ?>" placeholder="Escribe tu nombre">
                            </div>
                            <div class="profile-info-box">
                                 <div class="profile-label">Editar correo electrónico</div>
                                  <input type="email" name="email" class="profile-input" value="<?= esc(session()->get('email')) ?>" placeholder="Escribe tu correo">
                            </div>

                            <div class="profile-info-box">
                                <div class="profile-label">Cambiar foto</div>
                                <input type="file" name="foto_perfil" id="foto_perfil" class="profile-input hidden-file" accept="image/*">
                                <input type="text" id="foto_nombre" class="profile-input" placeholder="Selecciona una imagen" readonly>
                            </div>

                            <div class="profile-info-box">
                                <div class="profile-label">Nueva contraseña</div>
                                <input type="password" name="password" class="profile-input" placeholder="Nueva contraseña">
                                <input type="password" name="password_confirm" class="profile-input" placeholder="Confirmar nueva contraseña">
                                <div class="profile-note">Déjalo en blanco si no deseas cambiar la contraseña.</div>
                            </div>

                            <div class="profile-actions">
                                <button type="submit" class="profile-btn profile-btn-primary">Guardar cambios</button>
                                <button type="button" class="profile-btn profile-btn-secondary" onclick="toggleEditForm()">Cancelar</button>
                            </div>
                        </form>

                        <div class="profile-actions">
                            <a href="<?= base_url('/') ?>" class="profile-btn profile-btn-primary">Volver al inicio</a>
                            <a href="<?= base_url('logout') ?>" class="profile-btn profile-btn-secondary">Cerrar sesión</a>
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
            const form = document.getElementById('editProfileForm');
            form.classList.toggle('active');
        }

        document.getElementById('foto_perfil').addEventListener('change', function () {
            const nombre = this.files.length ? this.files[0].name : '';
            document.getElementById('foto_nombre').value = nombre;
        });
    </script>
</body>

</html>