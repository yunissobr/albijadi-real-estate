<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Real estate</title>
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
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/slicknav.css">
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/style.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <?php require_once APPROOT.'/views/inc/header.php' ?>
    <!-- header-end -->


    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3 id="_contact">Contact Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">


            <div class="row" id="message_sent">
                <div class="col-12">
                    <h2 id="_get_in_touch" class="contact-title">Get in Touch</h2>
                    <?php  flash('message_sent') ?>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                                        placeholder="Enter Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                        placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                        placeholder="Enter Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn btn_send" name="send" id="_send">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home pl-3"></i></span>
                        <div class="media-body tx-right-phone" >
                            <h3 id="_address">Address.</h3>
                            <p><a href="https://goo.gl/maps/ymWg6Fn9a1B2" target="_blank" rel="noopener noreferrer">مدينة الرياض -  حي السويدي -  شارع البلد الامين</a></p>
                            <p><a href="https://goo.gl/maps/67zTagu4BHRcPeXT8" target="_blank" rel="noopener noreferrer">مدينة الرياض - طريق الملك سلمان -  حي القيروان</a></p>
                            <p><a href="https://goo.gl/maps/F1WLeRgyLk5V53Yq5" target="_blank" rel="noopener noreferrer">مدينة جده -  طريق الامير سلطان -  حي الزهراء</a></p>
                            <p><a href="https://goo.gl/maps/rjE5Nd4gNyTS7XWr5" target="_blank" rel="noopener noreferrer">مدينة الدمام -  طريق الامير نايف</a></p>
                            <p><a href="https://goo.gl/maps/HCut4fhvjvNV7yLJ7" target="_blank" rel="noopener noreferrer">الامارات العربية المتحدة - عجمان</a></p>
                        </div>
                    </div>
                    <div class="media contact-info rtl">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3 id="_phone">Phone</h3>
                            <p><?php echo $config->phone ?></p>
                        </div>
                    </div>
                    <div class="media contact-info rtl">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3 id="_email">Contact Email</h3>
                            <p><?php echo $config->email ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!-- footer start -->
   <?php require_once APPROOT.'/views/inc/footer.php' ?>
    <!--/ footer end  -->
    <style>
    .bradcam_bg_1 {
        background-image: url(../img/banner/banner.jpg);
    }
    </style>
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
    <script src="<?php echo URLROOT ?>js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="<?php echo URLROOT ?>js/contact.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery.form.js"></script>
    <script src="<?php echo URLROOT ?>js/jquery.validate.min.js"></script>
    <script src="<?php echo URLROOT ?>js/mail-script.js"></script>

    <script src="<?php echo URLROOT ?>js/main.js"></script>
    <script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    </script>
</body>

</html>