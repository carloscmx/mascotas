<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Themes Industry">
    <!-- description -->
    <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
    <!-- Page Title -->
    <title>Boxni</title>
    <!-- Favicon -->

    <link href="<?= base_url("resources/boxni/studio/img/favicon.ico") ?>" rel="icon">
    <!-- Bundle -->
    <link href="<?= base_url("resources/boxni/vendor/css/bundle.min.css") ?>" rel=" stylesheet">
    <!-- Plugin Css -->
    <link href="<?= base_url("resources/boxni/vendor/css/LineIcons.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("resources/boxni/vendor/css/revolution-settings.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("resources/boxni/vendor/css/jquery.fancybox.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("resources/boxni/vendor/css/owl.carousel.min.css") ?>" rel="stylesheet">
    <link href="<?= base_url("resources/boxni/vendor/css/cubeportfolio.min.css") ?>" rel="stylesheet">
    <!-- Style Sheet -->
    <link href="<?= base_url("resources/boxni/studio/css/style.css") ?>" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

    <!-- Preloader -->
    <div class="preloader">
        <div class="centrize full-width">
            <div class="vertical-center">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <!--Header Start-->
    <header>

        <!--Navigation-->
        <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
            <div class="container">
                <a href="#home" title="Logo" class="logo scroll">
                    <!--Logo Default-->

                    <img src="<?= base_url("resources/boxni/studio/img/logo.png") ?>" alt="logo" class="logo-dark">
                </a>

                <!--Nav Links-->
                <div class="collapse navbar-collapse" id="megaone">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link active scroll" href="#home">Inicio</a>
                        <a class="nav-link scroll" href="#about">Nosotros</a>
                        <!--                     <a class="nav-link scroll" href="#team">Team</a> -->
                        <a class="nav-link scroll" href="#portfolio">Servicios</a>
                        <a class="nav-link scroll" href="#client">Testimonios</a>
                        <!--                     <a class="nav-link scroll" href="#blog">Blog</a> -->
                        <a class="nav-link scroll" href="#contact">Contacto</a>
                    </div>
                </div>

                <!--Side Menu Button-->
                <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>

            </div>
        </nav>

        <!--Side Nav-->
        <div class="side-menu hidden">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#home">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#about">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#portfolio">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#client">Testimonio</a>
                        </li>
                        <!--                     <li class="nav-item">
                        <a class="nav-link scroll" href="#blog">Blog</a>
                    </li> -->
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contact">Contacto</a>
                        </li>
                    </ul>
                </nav>

                <div class="side-footer text-white w-100">
                    <ul class="social-icons-simple">
                        <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                        <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                    </ul>
                    <p class="text-white">&copy; 2020 MegaOne. Made With Love by Themesindustry</p>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!-- End side menu -->

    </header>
    <!--Header End-->

    <!--Home Start-->
    <section id="home" class="home-banner">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-6">
                    <!-- Box Area -->
                    <div class="heading-box">
                        <h2>Registro Médico Universal para tus <span class="main-color">Mascotas</span></h2>
                        <p>Con <span class="main-color"><b>BOXNI</b></span> podrás tener a tu alcance el registro completo del historial médico de tus mascotas. <br>
                            Si eres veterinario podrás acceder a esta información de manera rápida en un solo lugar. <br><b>COMPLETAMENTE GRATIS</b></p>
                        <a href="<?= base_url("registro") ?>" class="btn btn-large btn-rounded btn-purple mr-2 mt-2">Registrarme</a>
                        <a href="<?= base_url("login") ?>" class="btn btn-large btn-rounded btn-transparent-black mt-2">Iniciar Sesión</a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="slider-right">
                        <svg class="slider-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 700 700">
                            <g>
                                <path data-depth="0.05" id="shape-1" fill="#00dbff" d="M355.43 45.1C398 31.19 442.59 29 484 39.88c55.11 14.5 117.25 54.91 134.57 160.78 0 0 18.6 99.41-12.78 232 0 0-38.65 142.61-90.66 192 0 0-59 61.95-148.78 59.18 0 0-42.15 0-102.34-27.17 0 0-184-88.78-240.17-199S11 211.81 150.69 135.43C241.1 86 314.73 58.41 355.43 45.1z" opacity=".25" />
                                <path data-depth="0.07" id="shape-2" fill="#00dbff" d="M105.78 387.15c-15.76-38.08-21-79.83-14.15-120.46C100.79 212.61 133 148.14 228 116.38c0 0 89-32 211.88-21.76 0 0 132.5 15.66 181.18 57.51 0 0 60.65 46.59 64.69 131.66 0 0 3.11 39.73-17.22 100.45 0 0-67.27 186.43-163.35 255.44S282.55 687.58 202.89 567c-51.57-78-82.04-143.42-97.11-179.85z" opacity=".25" />
                                <path data-depth="0.09" id="shape-3" fill="#00dbff" d="M112.59 129.56c18.72-39.73 47.85-73.83 84.82-97.56 49.2-31.55 123.12-52.4 216.29-.29 0 0 89.1 47.22 169.11 151.43 0 0 82.67 115.68 84.6 184.07 0 0 6.77 81.22-57.4 145.42 0 0-29.09 30.94-91.54 58.46 0 0-195.21 80.68-318.52 54.43S2.54 484.38 40.43 335.12C65 238.51 94.68 167.58 112.59 129.56z" opacity=".25" />
                                <path id="shape-4" d="M129.39 153.77C146.74 117 173.73 85.35 208 63.38c45.59-29.25 114.09-48.57 200.42-.28 0 0 82.56 43.75 156.7 140.31 0 0 76.61 107.2 78.4 170.57 0 0 6.27 75.26-53.19 134.75 0 0-27 28.67-84.82 54.17 0 0-180.89 74.76-295.15 50.43S27.41 482.55 62.52 344.24c22.74-89.52 50.27-155.24 66.87-190.47z" opacity="0" />
                                <clipPath id="shape-img">
                                    <use xlink:href="#shape-4" style="overflow:visible;" />
                                </clipPath>
                            </g>
                            <!--Change Image path here-->
                            <image data-depth="0.1" clip-path="url(#shape-img)" height="100%" width="100%" xlink:href="<?= base_url("resources/boxni/studio/img/slider-img.jpg") ?>
" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Home End-->

    <!--About Star-->
    <section id="about">
        <div class="container">
            <div class="row dot-box">

                <!-- Heading Area-->
                <div class="col-lg-6 order-lg-2">
                    <div class="heading-area pl-lg-4 p-0">
                        <h2 class="title">¿Quíenes Somos?</h2>
                        <p class="paragraph">Somos un grupo de emprendedores, amantes de los animales que busca soluciones de valor para quien lo necesite. <br><br>
                            <b>Visión</b> Contar con el sistema número 1 que logre brindar soluciones unificadas a todos los dueños de mascotas y veterinarias. <br>
                            <b>Misión:</b> Lograr centralizar el historial médico en una sola plataforma que brinde certeza y agilidad para médicos y dueños.</b>
                        <h6 class="sub-title main-color">Nuestros Valores</h6>
                        <!--List-->
                        <ul class="about-list">
                            <li><i class="lni-check-mark-circle a-icon"></i> Confianza y Responsabilidad</li>
                            <li><i class="lni-check-mark-circle a-icon"></i> Respeto</li>
                            <li><i class="lni-check-mark-circle a-icon"></i> Cercanía y Compromiso</li>
                            <li><i class="lni-check-mark-circle a-icon"></i> Excelencia y Profesionalismo</li>
                        </ul>
                    </div>
                </div>

                <!-- Features Box-->
                <div class="col-lg-6">
                    <!--About Image-->
                    <div class="about-image">

                        <img src=" <?= base_url("resources/boxni/studio/img/about-img.png") ?>" alt="about-img">
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--About End-->

    <!--Parallax Start-->
    <section class="parallax bg-img1">
        <div class="bg-overlay bg-main opacity-7"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="parallax-box text-white">
                        <i class="fas fa-dog"></i>
                        <h2 class="count">2800</h2>
                        <h5>Mascotas Felices</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="parallax-box text-white">
                        <i class="fas fa-user-md"></i>
                        <h2 class="count">125</h2>
                        <h5>Médicos Unidos</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="parallax-box text-white">
                        <i class="far fa-calendar-check"></i>
                        <h2 class="count">5500</h2>
                        <h5>Citas Programadas</h5>
                    </div>
                </div>
                <!--             <div class="col-lg-3 col-sm-6">
                <div class="parallax-box text-white">
                    <i class="fas fa-syringe"></i>
                    <h2 class="count">1700</h2>
                    <h5>Vacunas Aplicadas</h5>
                </div>
            </div> -->
            </div>
        </div>
    </section>
    <!--Parallax End-->

    <!--Team Start
<section id="team">
    <div class="container">
        <div class="row align-items-lg-end">
            <div class="col-lg-6">
                <div class="heading-area pr-lg-5">
                    <h6 class="sub-title main-color">Let's Meet To Our Experts</h6>
                    <h2 class="title">We Have Creative & Innovative Team </h2>
                    <p class="paragraph">There are many variations of passages of Lorem Ipsum available be the majority have suffered alteration in some form.
                </div>
            </div>
            <div class="col-lg-6">

                <ul class="services-skill text-left">

                    <li class="progress-item">
                        <h6>App Design<span class="float-right"><b class="count">80</b>%</span></h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></span>
                        </div>
                    </li>

                    <li class="progress-item">
                        <h6>Development<span class="float-right"><b class="count">80</b>%</span></h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></span>
                        </div>
                    </li>

                    <li class="progress-item">
                        <h6>Web Design<span class="float-right"><b class="count">75</b>%</span></h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></span>
                        </div>
                    </li>

                    <li class="progress-item">
                        <h6>UI / UX Design<span class="float-right"><b class="count">75</b>%</span></h6>
                        <div class="progress">
                            <span class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mt-lg-5 pt-lg-5">
            <div class="col-lg-4 col-md-6">
               <div class="team-item">
                   <img src="studio/img/team-img-1.jpg" alt="team">
                   <div class="team-detail">
                       <h5 class="m-0">David Manager</h5>
                       <p class="mb-2">Company CEO</p>
                       <ul class="social-icon social-icon-clr-hvr">
                           <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                       </ul>
                   </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item">
                    <img src="studio/img/team-img-2.jpg" alt="team">
                    <div class="team-detail">
                        <h5 class="m-0">Mike Kongal</h5>
                        <p class="mb-2">Creative Designer</p>
                        <ul class="social-icon social-icon-clr-hvr">
                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-item">
                    <img src="studio/img/team-img-3.jpg" alt="team">
                    <div class="team-detail">
                        <h5 class="m-0">Aleana Dian</h5>
                        <p class="mb-2">Maketing Head</p>
                        <ul class="social-icon social-icon-clr-hvr">
                            <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light">
    <div class="container">
        <div class="owl-carousel partners-slider">
            <div class="logo-item"> <img alt="client-logo" src="personal/img/client-1.png"></div>
            <div class="logo-item"> <img alt="client-logo" src="personal/img/client-2.png"></div>
            <div class="logo-item"> <img alt="client-logo" src="personal/img/client-3.png"></div>
            <div class="logo-item"> <img alt="client-logo" src="personal/img/client-4.png"></div>

        </div>
    </div>
</section>
Team End-->
    <!--Portfolio Start-->
    <section id="portfolio" class="cube-portfolio1 text-center no-transition">
        <div class="container">

            <!--Heading-->
            <div class="heading-area mx-570 pb-lg-5">
                <!--             <h6 class="sub-title main-color">See Our Amazing Work</h6> -->
                <h2 class="title">Nuestros Servicios</h2>
                <p class="paragraph">En <span class="main-color"><b>BOXNI</b></span> estamos comprometidos a brindarte el mejor servicio para tus mascotas, estar siempre al tanto de sus vacunas, recetas y medicamentos, no te preocupes de volver a perder su carnet.</p>
                <!--        <div id="js-filters-mosaic-flat" class="cbp-l-filters-button">

                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
                <span class="text-blue">/</span>
                <div data-filter=".graphic" class="cbp-filter-item">Graphic Design</div>
                <span class="text-blue"> / </span>
                <div data-filter=".web-design" class="cbp-filter-item">Web design</div>
                <span class="text-blue"> / </span>
                <div data-filter=".graphic" class="cbp-filter-item">SEO</div>
                <span class="text-blue"> / </span>
                <div data-filter=".marketing" class="cbp-filter-item">Marketing</div>
            </div>

        </div>


        <div id="js-grid-mosaic-flat" class="cbp cbp-l-grid-mosaic-flat">

            <div class="cbp-item web-design graphic">
                <a href="studio/img/work-1.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="studio/img//work-1.jpg" alt="port-1">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                    <div class="cbp-l-caption-alignCenter center-block">
                        <div class="cbp-l-caption-body">
                            <div class="plus"></div>
                            <h5 class="text-white mb-1">Latest Work</h5>
                            <p class="text-white">See Our Amazing Work</p>
                        </div>
                    </div>

                </a>
            </div>
            <div class="cbp-item seo marketing">
                <a href="studio/img//work-2.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="studio/img//work-2.jpg" alt="port-2">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                    <div class="cbp-l-caption-alignCenter center-block">
                        <div class="cbp-l-caption-body">
                            <div class="plus"></div>
                            <h5 class="text-white mb-1">Latest Work</h5>
                            <p class="text-white">See Our Amazing Work</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item seo marketing">
                <a href="studio/img//work-4.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="studio/img//work-4.jpg" alt="port-4">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                    <div class="cbp-l-caption-alignCenter center-block">
                        <div class="cbp-l-caption-body">
                            <div class="plus"></div>
                            <h5 class="text-white mb-1">Latest Work</h5>
                            <p class="text-white">See Our Amazing Work</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item graphic seo marketing">
                <a href="studio/img//work-3.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="studio/img//work-3.jpg" alt="port-3">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                    <div class="cbp-l-caption-alignCenter center-block">
                        <div class="cbp-l-caption-body">
                            <div class="plus"></div>
                            <h5 class="text-white mb-1">Latest Work</h5>
                            <p class="text-white">See Our Amazing Work</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design graphic">
                <a href="studio/img//work-5.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="studio/img//work-5.jpg" alt="port-5">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                    <div class="cbp-l-caption-alignCenter center-block">
                        <div class="cbp-l-caption-body">
                            <div class="plus"></div>
                            <h5 class="text-white mb-1">Latest Work</h5>
                            <p class="text-white">See Our Amazing Work</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item seo marketing graphic ">
                <a href="studio/img//work-6.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="studio/img//work-6.jpg" alt="port-6">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                    <div class="cbp-l-caption-alignCenter center-block">
                        <div class="cbp-l-caption-body">
                            <div class="plus"></div>
                            <h5 class="text-white mb-1">Latest Work</h5>
                            <p class="text-white">See Our Amazing Work</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design seo">
                <a href="studio/img//work-7.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="studio/img//work-7.jpg" alt="port-7">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                    <div class="cbp-l-caption-alignCenter center-block">
                        <div class="cbp-l-caption-body">
                            <div class="plus"></div>
                            <h5 class="text-white mb-1">Latest Work</h5>
                            <p class="text-white">See Our Amazing Work</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="cbp-item web-design graphic">
                <a href="studio/img//work-8.jpg" class="cbp-caption cbp-lightbox">
                    <div class="cbp-caption-defaultWrap">
                        <img src="studio/img//work-8.jpg" alt="port-8">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                    <div class="cbp-l-caption-alignCenter center-block">
                        <div class="cbp-l-caption-body">
                            <div class="plus"></div>
                            <h5 class="text-white mb-1">Latest Work</h5>
                            <p class="text-white">See Our Amazing Work</p>
                        </div>
                    </div>
                </a>
            </div>

        </div> -->

            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h3>Atención Médica</h3>
                    <p class="paragraph">En <span class="main-color"><b>BOXNI</b></span> tenemos la misión de brindarte la mejor atención médica para tus mascotas enlazante con las mejores veterinarias de tu zona.</p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h3>Medicamentos</h3>
                    <p class="paragraph">Desde nuestro sistema tendrás la opción de solicitar los medicamentos que necesite tu animalito así como agendar sus futuras vacunas.</p>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <h3>Historial Clínico</h3>
                    <p class="paragraph">Consulta el historial médico de cada una de tus mascotas, sus recetas, vacunas y medicamentos sin limite.</p>
                </div>
            </div>
    </section>
    <!--Portfolio end-->

    <!-- Client start -->
    <section id="client" class="parallax bg-img2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 wow fadeInRight">
                    <div class="owl-carousel owl-theme testimonial-two">
                        <div class="testimonial-item">
                            <p class="testimonial-para">Gracias a Boxni he podido consultar todo el historial médico de mi perro Bodoque, muy buen sistema, es fácil de usar y muy útil. </p>

                            <div class="testimonial-post">
                                <a href="javascript:void(0)" class="post"><img src="<?= base_url("resources/boxni/") ?>studio/img/testimonial-3.jpg" alt="image"></a>
                                <div class="text-content">
                                    <h5>Bryan Pool</h5>
                                    <div class="rating">
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p class="testimonial-para">Tengo dos perritos Marx y Olga, con Boxni puedo revisar cuando le tocan sus vacunas y cuales ya les han puesto, me gusto mucho el sistema.</p>

                            <div class="testimonial-post">
                                <a href="javascript:void(0)" class="post"><img src=" <?= base_url("resources/boxni/studio/img/testimonial-2.jpg") ?>
" alt="image"></a>
                                <div class="text-content">
                                    <h5>Mafer Ruíz</h5>
                                    <div class="rating">
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p class="color-black testimonial-para mb-15px">Boxni me ayudo mucho con mi gatita Koni, se habia intoxicado y gracias al sistema de consulta pudimos atenderla a tiempo, 100% recomendable.</p>

                            <div class="testimonial-post">


                                <a href="javascript:void(0)" class="post"><img src=" <?= base_url("resources/boxni/studio/img/testimonial-1.jpg") ?>" alt="image"></a>
                                <div class="text-content">
                                    <h5>Michael Tamayo</h5>
                                    <div class="rating">
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                        <i class="lni-star-filled"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client ends -->

    <!--Blog Start
<section class="bg-light" id="blog">
    <div class="container">

        <div class="row">
            <div class="col-md-12 text-center">

                <div class="heading-area mx-570 pb-5">
                    <h6 class="sub-title main-color">See Our Recent News</h6>
                    <h2 class="title m-0">Latest Blog</h2>
                </div>
        </div>
        </div>

        <div class="row wow fadeInUp">

            <div class="col-lg-4">
                <div class="news-item">
                    <img alt="image" class="news-img" src="studio/img/blog-news-1.jpg">
                    <div class="news-text-box">
                        <span class="date main-color">October 29, 2020</span>
                        <a href="studio/blog-list.html"><h4 class="news-title">Web design is fun</h4></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                        <a class="author d-flex align-items-center" href="javascript:void(0);">
                            <img alt="image" class="author-img bg-blue" src="studio/img/avatar-1.png">
                            <h5 class="author-name">Hena Sword</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-item">
                    <img alt="image" class="news-img" src="studio/img/blog-news-2.jpg">
                    <div class="news-text-box">
                        <span class="date main-color">October 29, 2020</span>
                        <a href="studio/blog-list.html"><h4 class="news-title">Future of websites</h4></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                        <a class="author d-flex align-items-center" href="javascript:void(0);">
                            <img alt="image" class="author-img bg-purple" src="studio/img/avatar-2.png">
                            <h5 class="author-name">David Villas</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-item">
                    <img alt="image" class="news-img" src="studio/img/blog-news-3.jpg">
                    <div class="news-text-box">
                        <span class="date main-color">October 29, 2020</span>
                        <a href="javascript:void(0);"><h4 class="news-title">Digital marketing</h4></a>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                        <a class="author d-flex align-items-center" href="javascript:void(0);">
                            <img alt="image" class="author-img bg-pink" src="studio/img/avatar-3.png">
                            <h5 class="author-name">Teena Walker</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
Blog End-->

    <!--Contact Start-->
    <section id="contact">
        <div class="container">
            <!--Heading-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <!--Heading-->
                    <div class="heading-area mx-570 pb-5">
                        <!-- <h6 class="sub-title main-color">For Support Contact Us</h6> -->
                        <h2 class="title m-0">Contáctanos</h2>
                    </div>
                </div>
            </div>

            <!--contact us-->
            <form class="contact-form" id="contact-form-data">
                <div class="row">

                    <div class="col-sm-12" id="result"></div>

                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Primer Nombre" required="" id="first_name" name="firstName">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Apellidos:" required="" id="last_name" name="lastName">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email:" required="" id="email" name="userEmail">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input class="form-control" type="tel" required="" placeholder="Telefóno:" id="phone" name="userPhone">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message" id="message" name="userMessage"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="button" class="btn contact_btn btn-large btn-purple btn-rounded mt-4" id="submit_btn">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--Contact End-->

    <!--Footer Start-->
    <footer class="footer-style-1 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <!--Social-->
                <div class="col-lg-6">
                    <div class="footer-social text-lg-left">
                        <ul class="list-unstyled">
                            <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-facebook-f"></i></a></li>
                            <!-- <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                                                                    class="fab fa-twitter"></i></a></li> -->
                            <!-- <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true"
                                                                                  class="fab fa-google-plus-g"></i></a></li> -->
                            <!-- <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                                                                    class="fab fa-linkedin-in"></i></a></li> -->
                            <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
                            <!-- <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true"
                                                                                    class="fab fa-pinterest-p"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <!--Text-->
                <div class="col-lg-6 text-lg-right">
                    <p class="company-about fadeIn">© 2021
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer End-->

    <?= base_url("resources/boxni/vendor/js/bundle.min.js") ?>

    <!--Scroll Top Start-->
    <span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
    <!--Scroll Top End-->

    <!-- JavaScript -->
    <script src="<?= base_url("resources/boxni/vendor/js/bundle.min.js") ?>"></script>
    <!-- Plugin Js -->
    <script src="<?= base_url("resources/boxni/vendor/js/jquery.appear.js") ?>
"></script>
    <script src="<?= base_url("resources/boxni/vendor/js/jquery.fancybox.min.js") ?>"></script>
    <script src="<?= base_url("resources/boxni/vendor/js/owl.carousel.min.js") ?>"></script>
    <script src="<?= base_url("resources/boxni/vendor/js/parallaxie.min.js") ?>"></script>
    <script src="<?= base_url("resources/boxni/vendor/js/wow.min.js") ?>"></script>
    <script src="<?= base_url("resources/boxni/vendor/js/jquery.cubeportfolio.min.js") ?>"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="<?= base_url("resources/boxni/vendor/js/jquery.themepunch.tools.min.js") ?>"></script>
    <script src="<?= base_url("resources/boxni/vendor/js/jquery.themepunch.revolution.min.js") ?>"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    <script src="<?= base_url("resources/boxni/") ?>vendor/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?= base_url("resources/boxni/") ?>vendor/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="<?= base_url("resources/boxni/") ?>vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?= base_url("resources/boxni/") ?>vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?= base_url("resources/boxni/") ?>vendor/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?= base_url("resources/boxni/") ?>vendor/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?= base_url("resources/boxni/") ?>vendor/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="<?= base_url("resources/boxni/") ?>vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?= base_url("resources/boxni/") ?>vendor/js/extensions/revolution.extension.video.min.js"></script>
    <!-- google map-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
    <script src="<?= base_url("resources/boxni/") ?>studio/js/map.js"></script>

    <!--contact form-->
    <script src="<?= base_url("resources/boxni/") ?>vendor/js/contact_us.js"></script>

    <!-- custom script-->
    <script src="<?= base_url("resources/boxni/") ?>studio/js/script.js"></script>

</body>

</html>