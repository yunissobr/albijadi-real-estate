<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Real state</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URLROOT ?>img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/nice-select.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/gijgo.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/slick.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="<?php echo URLROOT ?>css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php require APPROOT . '/views/inc/header.php'; ?>
    <!-- header-end -->
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3 id="_aboutus"><?php echo $data['title'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="about_mission">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="about_thumb">
                        <img src="<?php echo URLROOT ?>img/about/about.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="about_text">
                        <h4 id="_whoweare">Who we are.?</h4>
                        <p id="_aboutustext"><?php echo $config->about ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- accordion  -->

     <!-- counter_area  -->
     <div class="counter_area" >
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter">200</span> <span>+</span> </h3>
                        <p id="_propertiesforsale">Properties for sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter">100</span></h3>
                        <p id="_propertiesforrent">Properties for rent</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter">
                        <h3> <span class="counter">15</span></h3>
                        <p id="_teammembers">Team members</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /counter_area  -->

    <style>
    .bradcam_bg_1 {
        background-image: url(../img/about.jpg);
    }
    </style>

    <!-- footer start -->
    <?php require_once APPROOT.'/views/inc/footer.php' ?>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="<?php echo URLROOT ?>js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?php echo URLROOT ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo URLROOT ?>js/popper.min.js"></script>
    <script src="<?php echo URLROOT ?>js/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo URLROOT ?>js/isotope.pkgd.min.js"></script>
    <script src="<?php echo URLROOT ?>js/ajax-form.js"></script>
    <script src="<?php echo URLROOT ?>js/waypoints.min.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery.counterup.min.js"></script>
    <script src="<?php echo URLROOT ?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo URLROOT ?>js/scrollIt.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery.scrollUp.min.js"></script>
    <script src="<?php echo URLROOT ?>js/wow.min.js"></script>
    <script src="<?php echo URLROOT ?>js/nice-select.min.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery.slicknav.min.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo URLROOT ?>js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="<?php echo URLROOT ?>js/slick.min.js"></script>



    <!--contact js-->
    <script src="<?php echo URLROOT ?>js/contact.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery.form.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery.validate.min.js"></script>
    <script src="<?php echo URLROOT ?>js/mail-script.js"></script>


    <script src="<?php echo URLROOT ?>js/main.js"></script>
</body>

</html>