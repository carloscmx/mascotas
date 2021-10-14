<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>

    <!-- App favicon -->
    <link href="<?= base_url('resources/boxni/studio/img/favicon.ico') ?>" rel="shortcut icon">

    <!-- App css -->
    <link href="<?= base_url('resources/assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('resources/assets/css/icons.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('resources/assets/css/metismenu.min.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('resources/assets/css/style.css') ?>" rel="stylesheet" type="text/css" />

    <script src="<?= base_url('resources/assets/js/modernizr.min.js') ?>"></script>

</head>


<!-- Begin page -->

<body class="account-pages">

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="accountbg" style="background: url('<?= base_url('resources/assets/images/1.jpg') ?>');background-size: cover;background-position: center;"></div>
        </div>

        <div class="mySlides fade">
            <div class="accountbg" style="background: url('<?= base_url('resources/assets/images/2.jpg') ?>');background-size: cover;background-position: center;"></div>
        </div>

        <div class="mySlides fade">
            <div class="accountbg" style="background: url('<?= base_url('resources/assets/images/3.jpg') ?>');background-size: cover;background-position: center;"></div>
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>



    <div class="wrapper-page account-page-full">

        <?= $contenido ?>

        <div class="row m-t-10">
            <div class="col-sm-10 text-center">
                <p class="account-copyright">Blazar Networks, S.A. de CV© 2021</p>
            </div>
        </div>

    </div>



    <!-- jQuery  -->
    <script src="<?= base_url('resources/assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('resources/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('resources/assets/js/metisMenu.min.js') ?>"></script>
    <script src="<?= base_url('resources/assets/js/waves.js') ?>"></script>
    <script src="<?= base_url('resources/assets/js/jquery.slimscroll.js') ?>"></script>

    <!-- App js -->
    <script src="<?= base_url('resources/assets/js/jquery.core.js') ?>"></script>
    <script src="<?= base_url('resources/assets/js/jquery.app.js') ?>"></script>

</body>

</html>