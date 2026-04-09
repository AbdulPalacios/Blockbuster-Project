<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime | Template</title>

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
                                <li>
                                    <a href="<?= base_url('categorias') ?>">CATEGORIAS <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="#">Comedia</a></li>
                                        <li><a href="#">Acción</a></li>
                                        <li><a href="#">Amor</a></li>

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
                <div class="hero__items set-bg" data-setbg="<?= base_url('assets/img/hero/hero-1.jpg') ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="<?= base_url('assets/img/hero/hero-1.jpg') ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="<?= base_url('assets/img/hero/hero-1.jpg') ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Adventure</div>
                                <h2>Fate / Stay Night: Unlimited Blade Works</h2>
                                <p>After 30 days of travel across the world...</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/trending/trend-1.jpg') ?>">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/trending/trend-2.jpg') ?>">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Gintama Movie 2: Kanketsu-hen - Yorozuya yo Eien</a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/trending/trend-3.jpg') ?>">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Shingeki no Kyojin Season 3 Part 2</a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/trending/trend-4.jpg') ?>">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Fullmetal Alchemist: Brotherhood</a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/trending/trend-5.jpg') ?>">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Shiratorizawa Gakuen Koukou</a></h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/trending/trend-6.jpg') ?>">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Active</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Code Geass: Hangyaku no Lelouch R2</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/popular/popular-1.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Sen to Chihiro no Kamikakushi</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/popular/popular-2.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/popular/popular-3.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/popular/popular-4.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Rurouni Kenshin: Meiji Kenkaku Romantan</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/popular/popular-5.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Mushishi Zoku Shou 2nd Season</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/popular/popular-6.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Monogatari Series: Second Season</a></h5></div></div></div>
                        </div>
                    </div>

                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recently Added Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/recent/recent-1.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Great Teacher Onizuka</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/recent/recent-2.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Fate/stay night Movie: Heaven's Feel - II. Lost</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/recent/recent-3.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Mushishi Zoku Shou: Suzu no Shizuku</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/recent/recent-4.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Fate/Zero 2nd Season</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/recent/recent-5.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Kizumonogatari II: Nekket su-hen</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/recent/recent-6.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5></div></div></div>
                        </div>
                    </div>

                    <div class="live__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Live Action</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/live/live-1.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Shouwa Genroku Rakugo Shinjuu</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/live/live-2.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Mushishi Zoku Shou 2nd Season</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/live/live-3.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Mushishi Zoku Shou: Suzu no Shizuku</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/live/live-4.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/live/live-5.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Fate/stay night Movie: Heaven's Feel - II. Lost</a></h5></div></div></div>
                            <div class="col-lg-4 col-md-6 col-sm-6"><div class="product__item"><div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/img/live/live-6.jpg') ?>"><div class="ep">18 / 18</div><div class="comment"><i class="fa fa-comments"></i> 11</div><div class="view"><i class="fa fa-eye"></i> 9141</div></div><div class="product__item__text"><ul><li>Active</li><li>Movie</li></ul><h5><a href="#">Kizumonogatari II: Nekketsu-hen</a></h5></div></div></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years" data-setbg="<?= base_url('assets/img/sidebar/tv-1.jpg') ?>">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="#">Boruto: Naruto next generations</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix month week" data-setbg="<?= base_url('assets/img/sidebar/tv-2.jpg') ?>">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix week years" data-setbg="<?= base_url('assets/img/sidebar/tv-3.jpg') ?>">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="#">Sword art online alicization war of underworld</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix years month" data-setbg="<?= base_url('assets/img/sidebar/tv-4.jpg') ?>">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="#">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix day" data-setbg="<?= base_url('assets/img/sidebar/tv-5.jpg') ?>">
                                    <div class="ep">18 / ?</div>
                                    <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    <h5><a href="#">Fate stay night unlimited blade works</a></h5>
                                </div>
                            </div>
                        </div>

                        <div class="product__sidebar__comment">
                            <div class="section-title">
                                <h5>New Comment</h5>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="<?= base_url('assets/img/sidebar/comment-1.jpg') ?>" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Active</li>
                                        <li>Movie</li>
                                    </ul>
                                    <h5><a href="#">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                                </div>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="<?= base_url('assets/img/sidebar/comment-2.jpg') ?>" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Active</li>
                                        <li>Movie</li>
                                    </ul>
                                    <h5><a href="#">Shirogane Tamashii hen Kouhan sen</a></h5>
                                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                                </div>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="<?= base_url('assets/img/sidebar/comment-3.jpg') ?>" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Active</li>
                                        <li>Movie</li>
                                    </ul>
                                    <h5><a href="#">Kizumonogatari III: Reiket su-hen</a></h5>
                                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                                </div>
                            </div>
                            <div class="product__sidebar__comment__item">
                                <div class="product__sidebar__comment__item__pic">
                                    <img src="<?= base_url('assets/img/sidebar/comment-4.jpg') ?>" alt="">
                                </div>
                                <div class="product__sidebar__comment__item__text">
                                    <ul>
                                        <li>Active</li>
                                        <li>Movie</li>
                                    </ul>
                                    <h5><a href="#">Monogatari Series: Second Season</a></h5>
                                    <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
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
                        <a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="<?= base_url('/') ?>">INICIO</a></li>
                            <li><a href="<?= base_url('categorias') ?>">CATEGORIAS</a></li>
                            <li><a href="<?= BASE_URL('blog') ?>">SUBSCRIPCIONES</a></li>
                           <?php if (session()->get('isLoggedIn')): ?> 
                            <li><a href="<?= base_url('perfil') ?>">PERFIL</a></li>
                            <?php endif; ?>
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