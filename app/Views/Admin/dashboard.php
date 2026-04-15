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
        rgba(0,0,0,0.75) 0%,
        rgba(0,0,0,0.5) 40%,
        rgba(0,0,0,0.85) 100%
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
.normal-breadcrumb .breadcrumb__text {
    position: relative;
    z-index: 2;
}


.normal-breadcrumb h2 {
    font-size: 40px;
    font-weight: 700;
    text-shadow: 0 10px 30px rgba(0,0,0,0.9);
}

.normal-breadcrumb p {
    font-size: 18px;
    opacity: 0.9;
    text-shadow: 0 5px 20px rgba(0,0,0,0.8);
}
.product.spad {
    padding-top: 70px;
    padding-bottom: 90px;
    background: linear-gradient(180deg, #060816 0%, #090d23 100%);
}

.section-title h4 {
    position: relative;
    color: #fff;
    font-size: 34px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 10px;
    padding-left: 18px;
}

.section-title h4::before {
    content: "";
    position: absolute;
    left: 0;
    top: 6px;
    width: 5px;
    height: 34px;
    border-radius: 10px;
    background: linear-gradient(180deg, #ff4d4d, #e53637);
    box-shadow: 0 0 15px rgba(229, 54, 55, 0.55);
}

.product__item {
    margin-bottom: 35px;
}

.dashboard-card-link {
    text-decoration: none;
    display: block;
}

.dashboard-card {
    position: relative;
    height: 420px;
    border-radius: 22px;
    overflow: hidden;
    background: linear-gradient(145deg, rgba(22, 28, 52, 0.98), rgba(10, 13, 30, 0.98));
    border: 1px solid rgba(229, 54, 55, 0.45);
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.35);
    transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
}

.dashboard-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(229, 54, 55, 0.10), rgba(255, 255, 255, 0.02));
    opacity: 0;
    transition: opacity 0.35s ease;
}

.dashboard-card::after {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    top: -60px;
    right: -60px;
    border-radius: 50%;
    background: rgba(229, 54, 55, 0.12);
    filter: blur(20px);
    transition: all 0.35s ease;
}

.dashboard-card:hover {
    transform: translateY(-12px) scale(1.02);
    border-color: rgba(229, 54, 55, 0.95);
    box-shadow: 0 28px 55px rgba(0, 0, 0, 0.45), 0 0 20px rgba(229, 54, 55, 0.18);
}

.dashboard-card:hover::before {
    opacity: 1;
}

.dashboard-card:hover::after {
    transform: scale(1.15);
    opacity: 1;
}

.dashboard-card-body {
    position: relative;
    z-index: 2;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 28px 24px;
    text-align: center;
}

.dashboard-icon-wrap {
    width: 110px;
    height: 110px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: radial-gradient(circle, rgba(229, 54, 55, 0.18), rgba(229, 54, 55, 0.05));
    border: 1px solid rgba(229, 54, 55, 0.30);
    margin-bottom: 24px;
    box-shadow: 0 0 25px rgba(229, 54, 55, 0.12);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.dashboard-card:hover .dashboard-icon-wrap {
    transform: scale(1.08) rotate(4deg);
    box-shadow: 0 0 30px rgba(229, 54, 55, 0.22);
}

.dashboard-icon-wrap i {
    font-size: 52px;
    color: #ff4d4d;
    transition: transform 0.35s ease, color 0.35s ease;
}

.dashboard-card:hover .dashboard-icon-wrap i {
    transform: scale(1.08);
    color: #ff6a6a;
}

.dashboard-card h5 {
    margin: 0 0 10px;
    font-size: 26px;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.3;
}

.dashboard-card p {
    margin: 0;
    font-size: 14px;
    line-height: 1.7;
    color: #b9c0d3;
    max-width: 230px;
}

.dashboard-card-badge {
    position: absolute;
    top: 18px;
    right: 18px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #fff;
    background: rgba(229, 54, 55, 0.16);
    border: 1px solid rgba(229, 54, 55, 0.35);
    padding: 6px 10px;
    border-radius: 999px;
}

@keyframes floatIcon {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-6px); }
    100% { transform: translateY(0px); }
}

.dashboard-icon-wrap i {
    animation: floatIcon 2.8s ease-in-out infinite;
}

@media (max-width: 991px) {
    .dashboard-card {
        height: 290px;
    }

    .dashboard-card h5 {
        font-size: 22px;
    }
}

@media (max-width: 767px) {
    .section-title h4 {
        font-size: 28px;
    }

    .dashboard-card {
        height: 270px;
    }

    .dashboard-icon-wrap {
        width: 90px;
        height: 90px;
    }

    .dashboard-icon-wrap i {
        font-size: 42px;
    }
}
.normal-breadcrumb .normal__breadcrumb__text {
    position: relative;
    z-index: 2;
}
</style>
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
                                <li class="active"><a href="<?= base_url('admin/dashboard') ?>">INICIO</a></li>
                                <li>
                                    <a href="#">CATÁLOGOS <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url('admin/generos') ?>">Géneros</a></li>
                                        <li><a href="<?= base_url('admin/planes') ?>">Planes</a></li>
                                        <li><a href="<?= base_url('admin/usuarios') ?>">Usuarios</a></li>
                                        <li><a href="<?= base_url('admin/streaming') ?>">Streaming</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url('admin/perfil'); ?>">PERFIL</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="header__right" style="display: flex; align-items: center; justify-content: flex-end; gap: 15px;">
                        
                        <a href="<?= base_url('admin/perfil') ?>" style="display: flex; align-items: center; gap: 10px; text-decoration: none;">
                            
                            <?php $fotoAdmin = session()->get('imagen_usuario') ? base_url('uploads/perfiles/'.session()->get('imagen_usuario')) : base_url('assets/img/default-avatar.png'); ?>
                            
                            <img src="<?= $fotoAdmin ?>" alt="Avatar" style="width: 35px; height: 35px; border-radius: 50%; object-fit: cover; border: 2px solid #e53637;">
                            
                            <span style="color: white; font-weight: 600; font-size: 14px; white-space: nowrap;">
                                <?= esc(session()->get('nombre')) ?>
                            </span>
                            
                        </a>

                        <a href="<?= base_url('logout') ?>" style="background: #e53637; color: white; padding: 6px 14px; border-radius: 6px; text-decoration: none; font-size: 15px; font-weight: 600;">
                            SALIR
                        </a>
                        
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    <section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('assets/img/123.jpg') ?>">
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
    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="<?= base_url('admin/generos') ?>" class="dashboard-card-link">
            <div class="dashboard-card">
                <span class="dashboard-card-badge">Módulo</span>
                <div class="dashboard-card-body">
                    <div class="dashboard-icon-wrap">
                        <i class="fa fa-tags"></i>
                    </div>
                    <h5>Categorías / Géneros</h5>
                    <p>Administra y organiza las categorías del catálogo de contenido.</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="<?= base_url('admin/streaming') ?>" class="dashboard-card-link">
            <div class="dashboard-card">
                <span class="dashboard-card-badge">Módulo</span>
                <div class="dashboard-card-body">
                    <div class="dashboard-icon-wrap">
                        <i class="fa fa-film"></i>
                    </div>
                    <h5>Contenido Streaming</h5>
                    <p>Gestiona películas, series, portadas, trailers y detalles del contenido.</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="<?= base_url('admin/usuarios') ?>" class="dashboard-card-link">
            <div class="dashboard-card">
                <span class="dashboard-card-badge">Módulo</span>
                <div class="dashboard-card-body">
                    <div class="dashboard-icon-wrap">
                        <i class="fa fa-users"></i>
                    </div>
                    <h5>Gestión de Usuarios</h5>
                    <p>Consulta, organiza y administra los usuarios registrados en la plataforma.</p>
                </div>
            </div>
        </a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <a href="<?= base_url('admin/planes') ?>" class="dashboard-card-link">
            <div class="dashboard-card">
                <span class="dashboard-card-badge">Módulo</span>
                <div class="dashboard-card-body">
                    <div class="dashboard-icon-wrap">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <h5>Planes de Suscripción</h5>
                    <p>Configura precios, beneficios y duración de cada plan disponible.</p>
                </div>
            </div>
        </a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "4000",
            "preventDuplicates": true
        };
        
        // Atrapa el mensaje de éxito del Login o de otras redirecciones
        <?php if(session()->getFlashdata('success')): ?>
            toastr.success('<?= session()->getFlashdata('success') ?>');
        <?php endif; ?>

        <?php if(session()->getFlashdata('error')): ?>
            toastr.error('<?= session()->getFlashdata('error') ?>');
        <?php endif; ?>
    </script>
</body>
</html>