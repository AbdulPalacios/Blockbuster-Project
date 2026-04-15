<?php helper('url'); ?>

<?php
    $rutaPortadaUploads = 'uploads/portadas/' . $streaming->caratula_streaming;
    $rutaPortadaAssets = 'assets/img/streaming/' . $streaming->caratula_streaming;

    $portadaUrl = file_exists(FCPATH . $rutaPortadaUploads)
        ? base_url($rutaPortadaUploads)
        : base_url($rutaPortadaAssets);

    $youtubeEmbed = '';
    if (!empty($streaming->trailer_streaming)) {
        if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([^&]+)/', $streaming->trailer_streaming, $matches)) {
            $youtubeEmbed = 'https://www.youtube.com/embed/' . $matches[1];
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Detalle de contenido streaming">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($streaming->nombre_streaming) ?> | Blockbuster</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/elegant-icons.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        html {
            scroll-behavior: smooth;
        }

        .detalle-hero {
            position: relative;
            padding: 80px 0 60px;
            background:
                linear-gradient(90deg, rgba(10,11,30,0.97) 0%, rgba(10,11,30,0.88) 45%, rgba(10,11,30,0.70) 100%),
                url('<?= $portadaUrl ?>') center center / cover no-repeat;
        }

        .detalle-poster {
            width: 100%;
            border-radius: 14px;
            box-shadow: 0 18px 40px rgba(0,0,0,0.35);
            cursor: pointer;
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .detalle-poster:hover {
            transform: translateY(-4px);
            box-shadow: 0 24px 50px rgba(0,0,0,0.45);
        }

        .detalle-titulo {
            color: #fff;
            font-family: 'Oswald', sans-serif;
            font-size: 48px;
            line-height: 1.1;
            margin-bottom: 18px;
            text-transform: uppercase;
        }

        .detalle-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .detalle-meta span {
            background: rgba(255,255,255,0.08);
            color: #fff;
            border: 1px solid rgba(255,255,255,0.08);
            padding: 8px 12px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 700;
        }

        .detalle-sinopsis {
            color: #d7d7d7;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        .detalle-actions {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn-trailer,
        .btn-volver {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: none;
            text-decoration: none;
            padding: 13px 22px;
            border-radius: 10px;
            font-weight: 800;
            transition: all .25s ease;
        }

        .btn-trailer {
            background: #e53637;
            color: #fff;
        }

        .btn-trailer:hover {
            background: #ff4748;
            color: #fff;
        }

        .btn-volver {
            background: rgba(255,255,255,0.08);
            color: #fff;
        }

        .btn-volver:hover {
            background: rgba(255,255,255,0.16);
            color: #fff;
        }

        .detalle-info {
            padding: 50px 0 20px;
        }

        .detalle-card {
            background: #111229;
            border-radius: 14px;
            padding: 26px;
            border: 1px solid rgba(255,255,255,0.06);
            margin-bottom: 30px;
        }

        .detalle-card h4 {
            color: #fff;
            font-family: 'Oswald', sans-serif;
            margin-bottom: 20px;
            letter-spacing: .8px;
        }

        .detalle-dato {
            color: #cfcfcf;
            margin-bottom: 12px;
            line-height: 1.7;
        }

        .detalle-dato strong {
            color: #fff;
        }

        .trailer-box {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 18px 40px rgba(0,0,0,0.35);
        }

        .trailer-box iframe,
        .trailer-box video {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .otros-item {
            display: flex;
            gap: 14px;
            margin-bottom: 18px;
            align-items: center;
        }

        .otros-item img {
            width: 85px;
            height: 110px;
            object-fit: cover;
            border-radius: 8px;
        }

        .otros-item h6 {
            margin: 0 0 6px;
            line-height: 1.4;
        }

        .otros-item h6 a {
            color: #fff;
        }

        .otros-item span {
            color: #b7b7b7;
            font-size: 13px;
        }
        .otros-link {
    text-decoration: none;
    display: block;
    margin-bottom: 15px;
}

.otros-item {
    display: flex;
    gap: 12px;
    align-items: center;
    padding: 10px;
    border-radius: 8px;
    transition: 0.3s;
}

.otros-item:hover {
    background: rgba(229, 54, 55, 0.1);
    transform: scale(1.02);
}

.otros-item img {
    width: 70px;
    height: 100px;
    object-fit: cover;
    border-radius: 6px;
}

.otros-item h6 {
    margin: 0;
    color: white;
}

.otros-item span {
    font-size: 13px;
    color: #b7b7b7;
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
                            <a href="<?= base_url('logout') ?>" style="background:#e53637;color:#fff;padding:6px 14px;border-radius:6px;text-decoration:none;font-size:15px;font-weight:600;">
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

    <section class="detalle-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-5">
                    <a href="#trailer">
                        <img src="<?= $portadaUrl ?>" alt="<?= esc($streaming->nombre_streaming) ?>" class="detalle-poster">
                    </a>
                </div>
                <div class="col-lg-8 col-md-7">
                    <h1 class="detalle-titulo"><?= esc($streaming->nombre_streaming) ?></h1>

                    <div class="detalle-meta">
                        <?php if (!empty($genero)): ?>
                            <span><?= esc($genero->nombre_genero) ?></span>
                        <?php endif; ?>

                        <?php if (!empty($streaming->clasificacion_streaming)): ?>
                            <span>Clasificación: <?= esc($streaming->clasificacion_streaming) ?></span>
                        <?php endif; ?>

                        <?php if (!empty($streaming->fecha_estreno_streaming)): ?>
                            <span>Estreno: <?= esc($streaming->fecha_estreno_streaming) ?></span>
                        <?php endif; ?>

                        <?php if (!empty($streaming->duracion_streaming)): ?>
                            <span>Duración: <?= esc($streaming->duracion_streaming) ?></span>
                        <?php elseif (!empty($streaming->temporadas_streaming)): ?>
                            <span><?= esc($streaming->temporadas_streaming) ?> temporadas</span>
                        <?php endif; ?>
                    </div>

                    <p class="detalle-sinopsis">
                        <?= !empty($streaming->sipnosis_streaming) ? esc($streaming->sipnosis_streaming) : 'Sin sinopsis disponible.' ?>
                    </p>

                    <div class="detalle-actions">
                        <?php if (!empty($streaming->trailer_streaming)): ?>
                            <a href="#trailer" class="btn-trailer">
                                <i class="fa fa-play"></i> Ver Pelicula
                            </a>
                        <?php endif; ?>

                        <a href="<?= base_url('categorias') ?>" class="btn-volver">
                            <i class="fa fa-arrow-left"></i> Volver a categorías
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="detalle-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="detalle-card" id="trailer">
                      

                        <?php if (!empty($youtubeEmbed)): ?>
                            <div class="trailer-box">
                                <iframe
                                    src="<?= esc($youtubeEmbed) ?>"
                                    title="Trailer de <?= esc($streaming->nombre_streaming) ?>"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        <?php elseif (!empty($streaming->trailer_streaming)): ?>
                            <div class="trailer-box">
                                <video controls>
                                    <source src="<?= esc($streaming->trailer_streaming) ?>" type="video/mp4">
                                    Tu navegador no soporta video.
                                </video>
                            </div>
                        <?php else: ?>
                            <p class="detalle-dato">No hay tráiler disponible.</p>
                        <?php endif; ?>
                    </div>

                    <div class="detalle-card">
                        <h4>Información</h4>
                        
                        <p class="detalle-dato">
                              <strong>Contenidos restantes esta semana:</strong> <?= esc($restantes) ?>
                        </p>

                        <p class="detalle-dato">
                            <strong>Título:</strong> <?= esc($streaming->nombre_streaming) ?>
                        </p>

                        <p class="detalle-dato">
                            <strong>Género:</strong> <?= !empty($genero) ? esc($genero->nombre_genero) : 'No definido' ?>
                        </p>

                        <p class="detalle-dato">
                            <strong>Clasificación:</strong> <?= !empty($streaming->clasificacion_streaming) ? esc($streaming->clasificacion_streaming) : 'No definida' ?>
                        </p>

                        <p class="detalle-dato">
                            <strong>Fecha de lanzamiento:</strong> <?= !empty($streaming->fecha_lanzamiento_streaming) ? esc($streaming->fecha_lanzamiento_streaming) : 'No definida' ?>
                        </p>

                        <p class="detalle-dato">
                            <strong>Fecha de estreno:</strong> <?= !empty($streaming->fecha_estreno_streaming) ? esc($streaming->fecha_estreno_streaming) : 'No definida' ?>
                        </p>

                        <p class="detalle-dato">
                            <strong>Duración:</strong> <?= !empty($streaming->duracion_streaming) ? esc($streaming->duracion_streaming) : 'No definida' ?>
                        </p>

                        <p class="detalle-dato">
                            <strong>Temporadas:</strong> <?= isset($streaming->temporadas_streaming) ? esc($streaming->temporadas_streaming) : 'No aplica' ?>
                        </p>

                        <p class="detalle-dato">
                            <strong>Sinopsis:</strong> <?= !empty($streaming->sipnosis_streaming) ? esc($streaming->sipnosis_streaming) : 'Sin sinopsis disponible.' ?>
                        </p>
                    </div>
                </div>

           <div class="col-lg-4">
    <div class="detalle-card">
        <h4>También te puede interesar</h4>

        <?php if (!empty($otros)): ?>
            <?php foreach ($otros as $otro): ?>
                <?php
                    $rutaOtroUploads = 'uploads/portadas/' . $otro->caratula_streaming;
                    $rutaOtroAssets = 'assets/img/streaming/' . $otro->caratula_streaming;

                    $otroPoster = file_exists(FCPATH . $rutaOtroUploads)
                        ? base_url($rutaOtroUploads)
                        : base_url($rutaOtroAssets);
                ?>

               
                <a href="<?= base_url('streaming/' . $otro->id_streaming) ?>" class="otros-link">
                    <div class="otros-item">
                        <img src="<?= $otroPoster ?>" alt="<?= esc($otro->nombre_streaming) ?>">
                        <div>
                            <h6><?= esc($otro->nombre_streaming) ?></h6>
                            <span><?= esc($otro->fecha_estreno_streaming) ?></span>
                        </div>
                    </div>
                </a>

            <?php endforeach; ?>
        <?php else: ?>
            <p class="detalle-dato">No hay más contenido disponible.</p>
        <?php endif; ?>
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
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
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