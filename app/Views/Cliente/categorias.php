<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Catálogo por categorías de Blockbuster">
    <meta name="keywords" content="streaming, blockbuster, categorias, peliculas, series">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorías | Blockbuster</title>

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
        html {
            scroll-behavior: smooth;
        }

        .catalogo-hero {
            padding: 40px 0 10px;
        }

        .catalogo-title {
            color: #ffffff;
            font-family: 'Oswald', sans-serif;
            font-size: 46px;
            letter-spacing: 1px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .catalogo-subtitle {
            color: #b7b7b7;
            font-size: 15px;
            margin-bottom: 25px;
        }

        .categoria-box {
            display: flex;
            justify-content: flex-start;
            margin-bottom: 10px;
        }

        .categoria-select-wrap {
            position: relative;
            width: 340px;
        }

        .categoria-select {
            width: 100%;
            height: 50px;
            background: #111229;
            color: #eaeaf0;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 8px;
            padding: 0 40px 0 14px;
            font-size: 14px;
            font-weight: 600;
            outline: none;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            transition: all 0.2s ease;
        }

        .categoria-select:hover {
            border-color: #e53637;
        }

        .categoria-select:focus {
            border-color: #e53637;
            box-shadow: 0 0 0 2px rgba(229, 54, 55, 0.2);
        }

        .categoria-select option {
            background: #ffffff;
            color: #000000;
        }

        .categoria-select-wrap::after {
            content: "\f107";
            font-family: "FontAwesome";
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #e53637;
            pointer-events: none;
            font-size: 16px;
        }

        .categoria-section {
            scroll-margin-top: 110px;
            margin-bottom: 50px;
        }

        .categoria-vacia,
        .sidebar-empty {
            color: #b7b7b7;
            font-size: 15px;
            margin-top: 10px;
        }

        .contenido-meta {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .contenido-meta li {
            font-size: 12px !important;
            margin-bottom: 4px;
        }

        .product__item__text h5 a {
            line-height: 1.4;
        }

        .product__item__pic {
            position: relative;
            overflow: hidden;
            border-radius: 6px;
        }

        .product__item__pic a {
            display: block;
            width: 100%;
            height: 100%;
        }

        .product__item__pic::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,.45), rgba(0,0,0,.05));
            pointer-events: none;
        }

        .product__item__pic .ep,
        .product__item__pic .view {
            z-index: 2;
        }

        .product__sidebar__view__item {
            border-radius: 8px;
            overflow: hidden;
            min-height: unset;
        }

        .product__sidebar__view__item h5 {
            margin: 0;
        }

        .product__sidebar__view__item h5 a {
            color: #ffffff;
            display: block;
            line-height: 1.4;
        }

        .product__sidebar__comment__item__pic img {
            width: 90px;
            height: 120px;
            object-fit: cover;
            border-radius: 6px;
        }
        .sidebar-link {
    display: block;
    text-decoration: none;
    margin-bottom: 12px;
}

.sidebar-link .product__sidebar__comment__item {
    transition: 0.25s ease;
    border-radius: 8px;
    padding: 8px;
}

.sidebar-link:hover .product__sidebar__comment__item {
    background: rgba(229, 54, 55, 0.10);
    transform: scale(1.02);
}

.sidebar-link .product__sidebar__comment__item__text h5 {
    color: #ffffff;
    margin-bottom: 6px;
}

.sidebar-link .product__sidebar__comment__item__text span {
    color: #b7b7b7;
}

.product__sidebar__view__item,
.product__sidebar__comment__item,
.product__sidebar__categories,
.product__sidebar__view,
.product__sidebar {
    overflow: visible !important;
}


.product__sidebar__view__item h5,
.product__sidebar__view__item h5 a,
.product__sidebar__comment__item__text h5,
.product__sidebar__comment__item__text h5 a {
    line-height: 1.6 !important;
    height: auto !important;
    overflow: visible !important;
}

.sidebar-link .product__sidebar__comment__item__text h5 {
    line-height: 1.6 !important;
}

.product__sidebar ul li,
.product__sidebar li {
    line-height: normal !important;
    overflow: visible !important;
}


h5, a {
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
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
                                <li class="active"><a href="<?= base_url('/') ?>">INICIO</a></li>
                                <li><a href="<?= base_url('categorias') ?>">CATEGORIAS</a></li>
                                <li><a href="<?= base_url('blog') ?>">SUBSCRIPCIONES</a></li>
                                <?php if (session()->get('isLoggedIn')): ?>
                                    <li><a href="<?= base_url('perfil') ?>">PERFIL</a></li>
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

                            <a href="<?= base_url('logout') ?>" style="
                                background: #e53637;
                                color: white;
                                padding: 6px 14px;
                                border-radius: 6px;
                                text-decoration: none;
                                font-size: 15px;
                                font-weight: 600;
                            ">
                                SALIR
                            </a>
                        <?php else: ?>
                            <a href="<?= base_url('login') ?>">
                                <span class="icon_profile"></span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>

    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= base_url('/') ?>"><i class="fa fa-home"></i> Home</a>
                        <a href="<?= base_url('categorias') ?>">Categories</a>
                        <span>Catálogo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="catalogo-hero">
        <div class="container">
            <h1 class="catalogo-title">Blockbuster</h1>
            <p class="catalogo-subtitle">Explora películas y series por categoría.</p>
        </div>
    </section>

    <section class="product-page spad" style="padding-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <?php if (session()->getFlashdata('error')): ?>
    <div class="container" style="margin-top: 20px;">
        <div class="alert alert-danger" style="background:#e53637;border:none;color:#fff;">
            <?= session()->getFlashdata('error') ?>
        </div>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('success')): ?>
    <div class="container" style="margin-top: 20px;">
        <div class="alert alert-success" style="background:#1ed760;border:none;color:#fff;">
            <?= session()->getFlashdata('success') ?>
        </div>
    </div>
<?php endif; ?>
                                        <h4>Catálogo por categorías</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if (!empty($generos)): ?>
                            <?php foreach ($generos as $genero): ?>
                                <div id="genero-<?= $genero->id_genero ?>" class="categoria-section">
                                    <div class="section-title">
                                        <h4><?= esc($genero->nombre_genero) ?></h4>
                                    </div>

                                    <div class="row">
                                        <?php if (!empty($contenidoPorGenero[$genero->id_genero])): ?>
                                            <?php foreach ($contenidoPorGenero[$genero->id_genero] as $item): ?>
                                                <?php
                                                    $rutaPortadaUploads = 'uploads/portadas/' . $item->caratula_streaming;
                                                    $rutaPortadaAssets = 'assets/img/streaming/' . $item->caratula_streaming;

                                                    $portadaUrl = file_exists(FCPATH . $rutaPortadaUploads)
                                                        ? base_url($rutaPortadaUploads)
                                                        : base_url($rutaPortadaAssets);
                                                ?>
                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                    <div class="product__item">
                                                        <div class="product__item__pic set-bg"
                                                             data-setbg="<?= $portadaUrl ?>">
                                                            <a href="<?= base_url('streaming/' . $item->id_streaming) ?>"></a>
                                                            <div class="ep">
                                                                <?= !empty($item->duracion_streaming) ? esc($item->duracion_streaming) : 'N/A' ?>
                                                            </div>
                                                            <div class="view">
                                                                <i class="fa fa-calendar"></i> <?= esc($item->fecha_estreno_streaming) ?>
                                                            </div>
                                                        </div>
                                                        <div class="product__item__text">
                                                            <ul class="contenido-meta">
                                                                <li><?= esc($genero->nombre_genero) ?></li>
                                                                <li><?= !empty($item->temporadas_streaming) && (int)$item->temporadas_streaming > 0 ? esc($item->temporadas_streaming) . ' Temporadas' : 'Película' ?></li>
                                                            </ul>
                                                            <h5>
                                                                <a href="<?= base_url('streaming/' . $item->id_streaming) ?>">
                                                                    <?= esc($item->nombre_streaming) ?>
                                                                </a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <div class="col-12">
                                                <p class="categoria-vacia">No hay contenido disponible en esta categoría.</p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="categoria-vacia">No hay géneros disponibles.</p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Categorías</h5>
                            </div>

                            <?php if (!empty($generos)): ?>
                                <div class="filter__gallery">
                                    <?php foreach ($generos as $g): ?>
                                        <div class="product__sidebar__view__item set-bg"
                                             style="background: linear-gradient(135deg, rgba(229,54,55,0.85), rgba(17,18,41,0.95)); height: auto; padding: 20px;">
                                            <h5>
                                                <a href="#genero-<?= $g->id_genero ?>">
                                                    <?= esc($g->nombre_genero) ?>
                                                </a>
                                            </h5>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php else: ?>
                                <p class="sidebar-empty">No hay categorías disponibles.</p>
                            <?php endif; ?>
                        </div>
<div class="product__sidebar__comment">
    <div class="section-title">
        <h5>Contenido reciente</h5>
    </div>

    <?php
        $contador = 0;
        if (!empty($contenidoPorGenero)):
            foreach ($contenidoPorGenero as $items):
                foreach ($items as $item):
                    if ($contador >= 4) break 2;
                    $contador++;

                    $rutaPortadaUploads = 'uploads/portadas/' . $item->caratula_streaming;
                    $rutaPortadaAssets = 'assets/img/streaming/' . $item->caratula_streaming;

                    $miniaturaUrl = file_exists(FCPATH . $rutaPortadaUploads)
                        ? base_url($rutaPortadaUploads)
                        : base_url($rutaPortadaAssets);
    ?>
        <a href="<?= base_url('streaming/' . $item->id_streaming) ?>" class="sidebar-link">
            <div class="product__sidebar__comment__item">
                <div class="product__sidebar__comment__item__pic">
                    <img src="<?= $miniaturaUrl ?>" alt="<?= esc($item->nombre_streaming) ?>">
                </div>
                <div class="product__sidebar__comment__item__text">
                    <ul><li>Streaming</li></ul>
                    <h5><?= esc($item->nombre_streaming) ?></h5>
                    <span><i class="fa fa-calendar"></i> <?= esc($item->fecha_estreno_streaming) ?></span>
                </div>
            </div>
        </a>
    <?php
                endforeach;
            endforeach;
        endif;
    ?>

    <?php if ($contador === 0): ?>
        <p class="sidebar-empty">No hay contenido disponible.</p>
    <?php endif; ?>
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
                            <li><a href="<?= base_url('/') ?>">INICIO</a></li>
                            <li class="active"><a href="<?= base_url('categorias') ?>">CATEGORIAS</a></li>
                            <li><a href="<?= base_url('blog') ?>">SUBSCRIPCIONES</a></li>
                            <?php if (session()->get('isLoggedIn')): ?>
                                <li><a href="<?= base_url('perfil') ?>">PERFIL</a></li>
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
                <input type="text" id="search-input" placeholder="Search here.....">
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
</body>

</html>