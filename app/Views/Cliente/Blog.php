<?php helper('url'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Blockbuster</title>

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
                                <li><a href="<?= base_url('/') ?>">INICIO</a></li>
                                <li>
                                    <a href="<?= base_url('categorias') ?>">CATEGORIA <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                       
                                        <li><a href="#">Comedia</a></li>
                                        <li><a href="#">Accion</a></li>
                                        <li><a href="#">Amor</a></li>
                                        <li><a href="<?= base_url('signup') ?>">Sign Up</a></li>
                                        <li><a href="<?= base_url('login') ?>">Login</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="<?= base_url('blog') ?>">SUBSCRIPCIONES</a></li>
                                <li><a href="#">CONTACTO</a></li>
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

    <section class="normal-breadcrumb set-bg" data-setbg="<?= base_url('assets/img/normal-breadcrumb.jpg') ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Our Blog</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-1.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Yuri Kuma Arashi Viverra Tortor Pharetra</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-4.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Bok no Hero Academia Season 4 – 18</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-5.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-7.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Housekishou Richard shi no Nazo Kantei Season 08 - 20</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-10.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-11.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Building a Better LiA Drilling Down</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-2.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-3.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Building a Better LiA Drilling Down</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-6.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Yuri Kuma Arashi Viverra Tortor Pharetra</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-8.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Bok no Hero Academia Season 4 – 18</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item small__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-9.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Fate/Stay Night: Untimated Blade World</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog__item set-bg" data-setbg="<?= base_url('assets/img/blog/blog-12.jpg') ?>">
                                <div class="blog__item__text">
                                    <p><span class="icon_calendar"></span> 01 March 2020</p>
                                    <h4><a href="#">Yuri Kuma Arashi Viverra Tortor Pharetra</a></h4>
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
                            <li><a href="<?= base_url('/') ?>">Homepage</a></li>
                            <li><a href="<?= base_url('categorias') ?>">Categories</a></li>
                            <li class="active"><a href="<?= base_url('blog') ?>">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p>
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
                        This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
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