<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Blockbuster Streaming">
    <meta name="keywords" content="peliculas, series, blockbuster, streaming">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio | Blockbuster</title>

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
        .product__item__pic,
        .product__sidebar__view__item {
            position: relative;
        }

        .product__item__pic > a,
        .product__sidebar__view__item > a {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            display: block;
            z-index: 2;
        }

        .product__item__pic .ep,
        .product__item__pic .view,
        .product__sidebar__view__item .ep,
        .product__sidebar__view__item .view,
        .product__sidebar__view__item h5 {
            position: relative;
            z-index: 3;
        }
    </style>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php
    function renderStreamingCards($items)
    {
        if (empty($items)) {
            echo '<div class="col-12"><p style="color:#b7b7b7;">No hay contenido disponible.</p></div>';
            return;
        }

        foreach ($items as $item) {
            $img = !empty($item->caratula_streaming)
                ? base_url('uploads/portadas/' . $item->caratula_streaming)
                : base_url('assets/img/trending/trend-1.jpg');

            $tipo = ((int)$item->temporadas_streaming > 0) ? 'Serie' : 'Película';
            $extra = ((int)$item->temporadas_streaming > 0)
                ? $item->temporadas_streaming . ' Temp.'
                : (!empty($item->duracion_streaming) ? $item->duracion_streaming : 'Sin duración');

            $genero = !empty($item->nombre_genero) ? $item->nombre_genero : 'Sin género';

            echo '
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="' . $img . '">
                        <a href="' . base_url('streaming/' . $item->id_streaming) . '"></a>
                        <div class="ep">' . esc($extra) . '</div>
                        <div class="view"><i class="fa fa-calendar"></i> ' . esc($item->fecha_estreno_streaming) . '</div>
                    </div>
                    <div class="product__item__text">
                        <ul>
                            <li>' . esc($genero) . '</li>
                            <li>' . esc($tipo) . '</li>
                        </ul>
                        <h5>
                            <a href="' . base_url('streaming/' . $item->id_streaming) . '">
                                ' . esc($item->nombre_streaming) . '
                            </a>
                        </h5>
                    </div>
                </div>
            </div>';
        }
    }
    ?>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?= base_url('/') ?>">
                            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Blockbuster">
                        </a>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="<?= base_url('/') ?>">INICIO</a></li>

                                <li>
                                    <a href="<?= base_url('categorias') ?>">CATEGORIAS <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <?php if (!session()->get('isLoggedIn')): ?>
                                            <li><a href="<?= base_url('signup') ?>">Sign Up</a></li>
                                            <li><a href="<?= base_url('login') ?>">Login</a></li>
                                        <?php else: ?>
                                            <li><a href="<?= base_url('perfil') ?>">Hola, <?= esc(session()->get('nombre')) ?></a></li>
                                            <li><a href="<?= base_url('logout') ?>">Cerrar sesión</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </li>

                                <li><a href="<?= base_url('blog') ?>">SUBSCRIPCIONES</a></li>

                                <?php if (session()->get('isLoggedIn')): ?>
                                    <li><a href="<?= base_url('perfil') ?>">PERFIL</a></li>
                                <?php endif; ?>

                                <?php if (session()->get('id_rol') == 745): ?>
                                    <li>
                                        <a href="<?= base_url('admin/dashboard') ?>" style="font-weight: 800;">
                                            VOLVER AL ADMIN
                                        </a>
                                    </li>
                                <?php elseif (session()->get('id_rol') == 125): ?>
                                    <li>
                                        <a href="<?= base_url('operador/dashboard') ?>" style="font-weight: 800;">
                                            VOLVER AL PANEL
                                        </a>
                                    </li>
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
            </div>

            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <?php if (!empty($hero)): ?>
                    <?php foreach ($hero as $item): ?>
                        <?php
                        $img = !empty($item->caratula_streaming)
                            ? base_url('uploads/portadas/' . $item->caratula_streaming)
                            : base_url('assets/img/hero/hero-1.jpg');

                        $desc = !empty($item->descripcion_streaming)
                            ? mb_strimwidth(strip_tags($item->descripcion_streaming), 0, 120, '...')
                            : 'Disfruta este título disponible en Blockbuster.';

                        $genero = !empty($item->nombre_genero) ? $item->nombre_genero : 'Catálogo';
                        ?>
                        <div class="hero__items set-bg" data-setbg="<?= $img ?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="hero__text">
                                        <div class="label"><?= esc($genero) ?></div>
                                        <h2><?= esc($item->nombre_streaming) ?></h2>
                                        <p><?= esc($desc) ?></p>
                                        <a href="<?= base_url('streaming/' . $item->id_streaming) ?>">
                                            <span>Ver ahora</span> <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="hero__items set-bg" data-setbg="<?= base_url('assets/img/hero/hero-1.jpg') ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">
                                    <div class="label">Blockbuster</div>
                                    <h2>Bienvenido a Blockbuster</h2>
                                    <p>Muy pronto encontrarás aquí el mejor catálogo de películas y series.</p>
                                    <a href="<?= base_url('categorias') ?>">
                                        <span>Explorar catálogo</span> <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="<?= base_url('categorias') ?>" class="primary-btn">Ver todo <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php renderStreamingCards($trending ?? []); ?>
                        </div>
                    </div>

                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Series Populares</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="<?= base_url('categorias') ?>" class="primary-btn">Ver todo <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php renderStreamingCards($popular ?? []); ?>
                        </div>
                    </div>

                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recién Agregado</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="<?= base_url('categorias') ?>" class="primary-btn">Ver todo <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php renderStreamingCards($recent ?? []); ?>
                        </div>
                    </div>

                    <div class="live__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Películas</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="<?= base_url('categorias') ?>" class="primary-btn">Ver todo <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php renderStreamingCards($live ?? []); ?>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">

                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top títulos</h5>
                            </div>

                            <div class="filter__gallery">
                                <?php if (!empty($topViews)): ?>
                                    <?php foreach ($topViews as $item): ?>
                                        <?php
                                        $img = !empty($item->caratula_streaming)
                                            ? base_url('uploads/portadas/' . $item->caratula_streaming)
                                            : base_url('assets/img/sidebar/tv-1.jpg');

                                        $extra = ((int)$item->temporadas_streaming > 0)
                                            ? $item->temporadas_streaming . ' Temp.'
                                            : (!empty($item->duracion_streaming) ? $item->duracion_streaming : 'Sin duración');
                                        ?>
                                        <div class="product__sidebar__view__item set-bg" data-setbg="<?= $img ?>">
                                            <a href="<?= base_url('streaming/' . $item->id_streaming) ?>"></a>
                                            <div class="ep"><?= esc($extra) ?></div>
                                            <div class="view"><i class="fa fa-calendar"></i> <?= esc($item->fecha_estreno_streaming) ?></div>
                                            <h5>
                                                <a href="<?= base_url('streaming/' . $item->id_streaming) ?>">
                                                    <?= esc($item->nombre_streaming) ?>
                                                </a>
                                            </h5>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p style="color:#b7b7b7;">No hay títulos disponibles.</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="product__sidebar__comment">
                            <div class="section-title">
                                <h5>Últimos agregados</h5>
                            </div>

                            <?php if (!empty($sidebarRecent)): ?>
                                <?php foreach ($sidebarRecent as $item): ?>
                                    <?php
                                    $img = !empty($item->caratula_streaming)
                                        ? base_url('uploads/portadas/' . $item->caratula_streaming)
                                        : base_url('assets/img/sidebar/comment-1.jpg');

                                    $tipo = ((int)$item->temporadas_streaming > 0) ? 'Serie' : 'Película';
                                    $genero = !empty($item->nombre_genero) ? $item->nombre_genero : 'Sin género';
                                    ?>
                                    <div class="product__sidebar__comment__item">
                                        <div class="product__sidebar__comment__item__pic">
                                            <img src="<?= $img ?>" alt="<?= esc($item->nombre_streaming) ?>">
                                        </div>
                                        <div class="product__sidebar__comment__item__text">
                                            <ul>
                                                <li><?= esc($genero) ?></li>
                                                <li><?= esc($tipo) ?></li>
                                            </ul>
                                            <h5>
                                                <a href="<?= base_url('streaming/' . $item->id_streaming) ?>">
                                                    <?= esc($item->nombre_streaming) ?>
                                                </a>
                                            </h5>
                                            <span><i class="fa fa-calendar"></i> <?= esc($item->fecha_estreno_streaming) ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p style="color:#b7b7b7;">No hay títulos agregados aún.</p>
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
                        <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt="Blockbuster"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="<?= base_url('/') ?>">INICIO</a></li>
                            <li><a href="<?= base_url('categorias') ?>">CATEGORIAS</a></li>
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
                <input type="text" id="search-input" placeholder="Buscar...">
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