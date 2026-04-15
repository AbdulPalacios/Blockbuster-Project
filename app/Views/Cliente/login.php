<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión | Blockbuster</title>

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
                                        <li><a href="<?= base_url('signup') ?>">Registrarse</a></li>
                                        <li><a href="<?= base_url('login') ?>">Iniciar Sesión</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url('blog') ?>">SUSCRIPCIONES</a></li>
                              
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="<?= base_url('login') ?>"><span class="icon_profile"></span></a>
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
                        <h2>Blockbuster</h2>
                        <p>Bienvenido</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>INGRESA A TU CUENTA</h3>

                        <form action="<?= base_url('auth/loginProcess') ?>" method="post">
                            <div class="input__item">
                                <input type="email" name="email" placeholder="Correo Electrónico" required>
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" name="password" placeholder="Contraseña" required>
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn">Ingresar</button>
                        </form>
                        <a href="#" class="forget_pass">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>¿No tienes una cuenta?</h3>
                        <a href="<?= base_url('signup') ?>" class="primary-btn">¡ Regístrate Ahora !</a>
                    </div>
                </div>
            </div>

            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>o</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Inicia sesión con Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Inicia sesión con Google</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Inicia sesión con Twitter</a></li>
                            </ul>
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
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                   
                </div>
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