<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Petboys-<?= $titulo ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link href="<?= base_url('resources/boxni/studio/img/favicon.ico') ?>" rel="shortcut icon">

    <!-- Custom box css -->
    <link href="<?= base_url('resources') ?>/plugins/custombox/css/custombox.min.css" rel="stylesheet">

    <!-- Sweet Alert css -->
    <link href="<?= base_url('resources') ?>/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?= base_url("resources/assets/css/bootstrap.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("resources/assets/css/icons.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("resources/assets/css/metismenu.min.css") ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url("resources/assets/css/style.css") ?>" rel="stylesheet" type="text/css" />

    <script src="<?= base_url("resources/assets/js/modernizr.min.js") ?>"></script>


</head>


<body>


    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">

            <div class="slimscroll-menu" id="remove-scroll">

                <!-- LOGO -->
                <div class="topbar-left">
                    <span>
                        <img src="<?= base_url("resources/boxni/studio/img/logo.png") ?>" alt="" height="45">
                    </span>
                </div>

                <!-- User box -->
                <div class="user-box" style="text-align: center;">
                    <div class="user-img" style="text-align: center;">
                        <img src="<?= base_url("resources/assets/images/users/avatar-1.png") ?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid" style="text-align: center;">
                    </div>
                    <h5><a href="#"><?= "{$_SESSION['user_client']->nombre} {$_SESSION['user_client']->apellidopat}" ?></a> </h5>
                    <p class="text-muted" style="display: none;"> Admin Head</p>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu" style="text-align: center;">

                    <ul class="metismenu" id="side-menu">

                        <!--<li class="menu-title">Navigation</li>-->

                        <li>
                            <a href="<?= base_url() ?>">
                                <i class="fi-air-play"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Inicio </span>
                            </a>
                        </li>

                        <li>
                            <a href="<?= base_url("cliente/citas") ?>">
                                <i class="fi-paper-stack"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Citas </span></a>
                        </li>

                        <li>
                            <a href="<?= base_url("cliente/productos") ?>">
                                <i class="fi-briefcase"></i><span class="badge badge-danger badge-pill float-right"></span> <span> Productos </span></a>
                        </li>

                        <li style="display: none;">
                            <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Apps </span> <span class="menu-arrow" style="display: none;"></span></a>
                            <ul class="nav-second-level" aria-expanded="false" style="display: none;">
                                <li><a href="apps-calendar.html">Calendar</a></li>
                                <li><a href="apps-tickets.html">Tickets</a></li>
                                <li><a href="apps-taskboard.html">Task Board</a></li>
                                <li><a href="apps-task-detail.html">Task Detail</a></li>
                                <li><a href="apps-contacts.html">Contacts</a></li>
                                <li><a href="apps-projects.html">Projects</a></li>
                                <li><a href="apps-companies.html">Companies</a></li>
                                <li><a href="apps-file-manager.html">File Manager</a></li>
                            </ul>
                        </li>

                        <li style="display: none;">
                            <a href="javascript: void(0);"><i class="fi-mail"></i><span> Email </span> <span class="menu-arrow" style="display: none;"></span></a>
                            <ul class="nav-second-level" aria-expanded="false" style="display: none;">
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Read Email</a></li>
                                <li><a href="email-compose.html">Compose Email</a></li>
                            </ul>
                        </li>

                        <li style="display: none;">
                            <a href="javascript: void(0);"><i class="fi-layout"></i><span> Layouts </span> <span class="menu-arrow" style="display: none;"></span></a>
                            <ul class="nav-second-level" aria-expanded="false" style="display: none;">
                                <li><a href="layouts-menucollapsed.html">Menu Collapsed</a></li>
                                <li><a href="layouts-small-menu.html">Small Menu</a></li>
                                <li><a href="layouts-dark-lefbar.html">Dark Leftbar</a></li>
                                <li><a href="layouts-center-logo.html">Center Logo</a></li>
                            </ul>
                        </li>

                        <li style="display: none;">
                            <a href="widgets.html">
                                <i class="fi-command"></i> <span> Widgets </span>
                            </a>
                        </li>

                        <li style="display: none;">
                            <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Charts </span> <span class="menu-arrow" style="display: none;"></span></a>
                            <ul class="nav-second-level" aria-expanded="false" style="display: none;">
                                <li><a href="chart-flot.html">Flot Chart</a></li>
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chart-google.html">Google Chart</a></li>
                                <li><a href="chart-chartist.html">Chartist Chart</a></li>
                                <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                <li><a href="chart-knob.html">Jquery Knob</a></li>
                            </ul>
                        </li>

                        <li style="display: none;">
                            <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-info float-right" style="display: none;">10</span> <span> Forms </span></a>

                            <ul class="nav-second-level" aria-expanded="false" style="display: none;">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-advanced.html">Form Advanced</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-pickers.html">Form Pickers</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-mask.html">Form Masks</a></li>
                                <li><a href="form-summernote.html">Summernote</a></li>
                                <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                <li><a href="form-x-editable.html">X Editable</a></li>
                                <li><a href="form-uploads.html">Multiple File Upload</a></li>
                            </ul>
                        </li>

                        <li style="display: none;">
                            <a href="javascript: void(0);"><i class="fi-box"></i><span> Icons </span> <span class="menu-arrow" style="display: none;"></span></a>
                            <ul class="nav-second-level" aria-expanded="false" style="display: none;">
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                <li><a href="icons-feather.html">Feather Icons</a></li>
                                <li><a href="icons-simpleline.html">Simple Line Icons</a></li>
                            </ul>
                        </li>

                        <li style="display: none;">
                            <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Tables </span> <span class="menu-arrow" style="display: none;"></span></a>
                            <ul class="nav-second-level" aria-expanded="false" style="display: none;">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                                <li><a href="tables-foo.html">Foo Tables</a></li>
                            </ul>
                        </li>

                        <li style="display: none;" class="menu-title">More</li>

                        <li style="display: none;">
                            <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> Maps </span> <span class="menu-arrow" style="display: none;"></span></a>
                            <ul class="nav-second-level" aria-expanded="false" style="display: none;">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                                <li><a href="maps-mapael.html">Mapael Maps</a></li>
                            </ul>
                        </li>

                        <li style="display: none;">
                            <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span class="badge badge-success float-right">Hot</span> <span> Extra Pages </span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="extras-timeline.html">Timeline</a></li>
                                <li><a href="extras-profile.html">Profile</a></li>
                                <li><a href="extras-invoice.html">Invoice</a></li>
                                <li><a href="extras-faq.html">FAQ</a></li>
                                <li><a href="extras-pricing.html">Pricing</a></li>
                                <li><a href="extras-email-template.html">Email Templates</a></li>
                                <li><a href="extras-ratings.html">Ratings</a></li>
                                <li><a href="extras-search-results.html">Search Results</a></li>
                                <li><a href="extras-gallery.html">Gallery</a></li>
                                <li><a href="extras-maintenance.html">Maintenance</a></li>
                                <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>

                        <li style="display: none;">
                            <a href="javascript: void(0);"><i class="fi-share"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                            <ul class="nav-second-level nav" aria-expanded="false">
                                <li><a href="javascript: void(0);">Level 1.1</a></li>
                                <li><a href="javascript: void(0);" aria-expanded="false">Level 1.2 <span class="menu-arrow"></span></a>
                                    <ul class="nav-third-level nav" aria-expanded="false">
                                        <li><a href="javascript: void(0);">Level 2.1</a></li>
                                        <li><a href="javascript: void(0);">Level 2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- Top Bar Start -->


            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="hide-phone app-search" style="display: none;">
                            <form>
                                <input type="text" placeholder="Search..." class="form-control">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </li>

                        <li class="dropdown notification-list" style="display: none;">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fi-bell noti-icon"></i>
                                <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                        <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                        <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list" style="display: none;">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fi-speech-bubble noti-icon"></i>
                                <span class="badge badge-custom badge-pill noti-icon-badge">6</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">


                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                                </div>

                                <div class="slimscroll" style="max-height: 230px;">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">


                                        <div class="notify-icon"><img src="<?= base_url("resources/assets/images/users/avatar-2.jpg") ?>" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="<?= base_url("resources/assets/images/users/avatar-3.jpg") ?>" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Sam Garret</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="<?= base_url("resources/assets/images/users/avatar-4.jpg") ?>" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="<?= base_url("resources/assets/images/users/avatar-5.jpg") ?>" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Sherry Marshall</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon"><img src="<?= base_url("resources/assets/images/users/avatar-6.jpg") ?>" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Shawn Millard</p>
                                        <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">


                                <img src="<?= base_url("resources/assets/images/users/avatar-1.jpg") ?>" alt="user" class="rounded-circle"> <span class="ml-1"><?= "{$_SESSION['user_client']->nombre} {$_SESSION['user_client']->apellidopat}" ?><i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Bienvenido!</h6>
                                </div>

                                <!-- item-->
                                <a href="<?= base_url("catalogo/ajustescliente") ?>" class="dropdown-item notify-item">
                                    <i class="fi-cog"></i> <span>Ajustes de cuenta</span>
                                </a>

                                <!-- item-->
                                <a style="display: none;" style href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-cog"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a style="display: none;" href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-help"></i> <span>Support</span>
                                </a>

                                <!-- item-->
                                <a style="display: none;" href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-lock"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" onclick="javascript:closeSesion()" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Cerrar sesión</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left disable-btn">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        <li>
                            <div class="page-title-box" style="display: none;">
                                <h4 class="page-title">Starter </h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Highdmin</a></li>
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">Starter</li>
                                </ol>
                            </div>
                        </li>

                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <script src="<?= base_url("resources/assets/js/jquery.min.js") ?>"></script>

            <!-- Start Page content -->
            <div class="content">
                <div class="container-fluid">

                    <?= $contenido ?>

                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer">
                Blazar Networks, S.A. de CV© 2021
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="<?= base_url("resources/assets/js/jquery.min.js") ?>"></script>
    <script src="<?= base_url("resources/assets/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?= base_url("resources/assets/js/metisMenu.min.js") ?>"></script>
    <script src="<?= base_url("resources/assets/js/waves.js") ?>"></script>
    <script src="<?= base_url("resources/assets/js/jquery.slimscroll.js") ?>"></script>

    <!-- Sweet Alert Js  -->
    <script src="<?= base_url('resources') ?>/plugins/sweet-alert/sweetalert2.min.js"></script>
    <script src="<?= base_url("resources") ?>/assets/pages/jquery.sweet-alert.init.js"></script>

    <!-- Modal-Effect -->
    <script src="<?= base_url('resources') ?>/plugins/custombox/js/custombox.min.js"></script>
    <script src="<?= base_url('resources') ?>/plugins/custombox/js/legacy.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url("resources/assets/js/jquery.core.js") ?>"></script>
    <script src="<?= base_url("resources/assets/js/jquery.app.js") ?>"></script>
    <script src="<?= base_url("resources/plugins/block.js") ?>"></script>




    <script>
        $.LoadingOverlay("show", {
            imageAnimation: "rotate_left",
            imageColor: "Cyan",
            imageResizeFactor: "2"
        });
        setTimeout(function() {
            $.LoadingOverlay("hide");
        }, 2000);
    </script>

    <script>
        function closeSesion() {
            $.ajax({
                url: "<?= base_url("Welcome/logout") ?>",
                type: "post",
                beforeSend: function(xhr) {
                    $.LoadingOverlay("show", {
                        image: "",
                        text: "Cerrando sesión...",
                        textColor: "Cyan"
                    });

                }
            }).done(function() {

                setTimeout(function() {
                    window.location.href = "<?= base_url() ?>";


                }, 2000);

            }).fail(function() {
                $.LoadingOverlay("text", "Ha ocurrido un error..");
                $.LoadingOverlay("hide");


            });
        }
    </script>
</body>


</html>