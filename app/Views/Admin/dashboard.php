<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin | Blockbuster</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">
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
                        <a href="<?= base_url('admin/dashboard') ?>">
                            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo Blockbuster">
                        </a>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="<?= base_url('admin/dashboard') ?>">DASHBOARD</a></li>
                                <li>
                                    <a href="#">CATÁLOGOS <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('admin/generos') ?>">Géneros</a></li>
                                        <li><a href="<?= base_url('admin/planes') ?>">Planes</a></li>
                                        <li><a href="<?= base_url('admin/usuarios') ?>">Usuarios</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">REPORTES</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="header__right" style="display: flex; align-items: center; gap: 15px;">
                        <span style="color: white; font-weight: 600; font-size: 14px; white-space: nowrap;">
                            Admin: <?= esc(session()->get('nombre')) ?>
                        </span>
                        <a href="<?= base_url('logout') ?>" style="background: #e53637; color: white; padding: 6px 14px; border-radius: 6px; text-decoration: none; font-size: 15px; font-weight: 600;">
                            SALIR
                        </a>
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
                        <h2>Panel de Administración</h2>
                        <p>Bienvenido, controla todo el contenido desde aquí.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        <div class="row mb-4">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Módulos Principales</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="<?= base_url('admin/generos') ?>">
                                        <div class="product__item__pic set-bg" style="background-color: #1a1e27; display: flex; align-items: center; justify-content: center; border: 2px solid #e53637; border-radius: 5px;">
                                            <i class="fa fa-tags" style="font-size: 60px; color: #e53637;"></i>
                                        </div>
                                    </a>
                                    <div class="product__item__text text-center">
                                        <h5><a href="<?= base_url('admin/generos') ?>">Categorías / Géneros</a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="#">
                                        <div class="product__item__pic set-bg" style="background-color: #1a1e27; display: flex; align-items: center; justify-content: center; border: 2px solid #e53637; border-radius: 5px;">
                                            <i class="fa fa-film" style="font-size: 60px; color: #e53637;"></i>
                                        </div>
                                    </a>
                                    <div class="product__item__text text-center">
                                        <h5><a href="#">Contenido Streaming</a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="#">
                                        <div class="product__item__pic set-bg" style="background-color: #1a1e27; display: flex; align-items: center; justify-content: center; border: 2px solid #e53637; border-radius: 5px;">
                                            <i class="fa fa-users" style="font-size: 60px; color: #e53637;"></i>
                                        </div>
                                    </a>
                                    <div class="product__item__text text-center">
                                        <h5><a href="#">Gestión de Usuarios</a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <a href="#">
                                        <div class="product__item__pic set-bg" style="background-color: #1a1e27; display: flex; align-items: center; justify-content: center; border: 2px solid #e53637; border-radius: 5px;">
                                            <i class="fa fa-credit-card" style="font-size: 60px; color: #e53637;"></i>
                                        </div>
                                    </a>
                                    <div class="product__item__text text-center">
                                        <h5><a href="#">Planes de Suscripción</a></h5>
                                    </div>
                                </div>
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
                        <a href="<?= base_url('admin/dashboard') ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="<?= base_url('admin/dashboard') ?>">DASHBOARD ADMIN</a></li>
                            <li><a href="<?= base_url('/') ?>" target="_blank">IR AL PORTAL PÚBLICO</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>