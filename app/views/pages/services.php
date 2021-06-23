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
                        <h3 id="_services"><?php echo $data['title'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- accordion  -->
    <!-- accordion  -->
    <div class="accordion_area" id="services">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq_ask">
                        <h3 id="_services">Services</h3>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button id="_servicetitle" class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Marketing Department
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div id="_servicedescription" class="card-body">Albjady group observe to employ and
                                        attract highly qualified
                                        to work to bring out marketing distinct properties both from the sale or rent or
                                        invest put the basics of the most important (put banners set for that property
                                        as well, put paper ads distributed to more than 6,000 sides real estate similar
                                        place ads in newspapers, traded sites Electronic, free sms)..
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button id="_servicetitle" class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="false"
                                            aria-controls="collapseOne">
                                            Property management department
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div id="_servicedescription" class="card-body">The Evolution of the role gradually
                                        Group has expanded in the
                                        field of property management and the confidence of our valued customers and our
                                        credibility and seriousness and the mechanism of the marketing organization, so
                                        we are responsible for a large part of rents inside and outside the Kingdom ,
                                        the group is characterized to ensure the rental costs for the owner-time
                                        solutions without any delay and the allocation ratio % of the amount of each
                                        ration of the rent to be agreed upon in advance with the owner of the property
                                        in addition to the group to ensure the safety of the leased property from any
                                        damage caused by the tenant and ensure that the amounts of consumption, whether
                                        for electricity, water or sewage or other, which is under executive at the same
                                        property in addition to the present of technicians those in charge of Property
                                        maintenance service within 24 hours depending the need as required,The group
                                        also works to raise the level of real estate simple additions due beneficial to
                                        the future owner to raise rents and lack of empty units.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button id="_servicetitle" class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Contracting Maintenance Department
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion">
                                    <div class="card-body" id="_servicedescription">the Group has a group of skilled
                                        manpower in the field of
                                        construction and maintenance of the building and the restoration and maintenance
                                        of the entire property.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="accordion_thumb">
                        <img src="<?php echo URLROOT ?>img/banner/services.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container mb-5">
        <h2 class="text-center" id="_ourprojects">Our Projects</h2>
        <div class="row mt-5 mb-4">
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj01">Construction of public buildings.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj02">Construction and lading work.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj03">Stone, marble and other installation works.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj04">Paints works of various kinds and shapes.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj05">Blacksmithing and aluminum works.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj06">Woodworking.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj07">Tiling and sorting works.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj08">Gypsum and decoration works.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj09">Plumbing and electrical works.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj10">The work of false ceilings and tiles.</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="unordered-list">
                    <li id="_prj11">Excavation, extension and irrigation works</li>
                </ul>
            </div>
        </div>
        <div class="row gallery-item">
            <div class="col-md-4">
                <a href="<?php echo URLROOT ?>img/elements/1.jpeg" class="img-pop-up">
                    <div class="single-gallery-image"
                        style="background: url(<?php echo URLROOT.'img/elements/1.jpeg'?>);">
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo URLROOT ?>img/elements/2.jpeg" class="img-pop-up">
                    <div class="single-gallery-image"
                        style="background: url(<?php echo URLROOT.'img/elements/2.jpeg'?>);">
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo URLROOT ?>img/elements/3.jpeg" class="img-pop-up">
                    <div class="single-gallery-image"
                        style="background: url(<?php echo URLROOT.'img/elements/3.jpeg'?>);">
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="<?php echo URLROOT ?>img/elements/4.jpeg" class="img-pop-up">
                    <div class="single-gallery-image"
                        style="background: url(<?php echo URLROOT.'img/elements/4.jpeg'?>);">
                    </div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="<?php echo URLROOT ?>img/elements/5.jpeg" class="img-pop-up">
                    <div class="single-gallery-image"
                        style="background: url(<?php echo URLROOT.'img/elements/5.jpeg'?>);">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- accordion  -->
    <!-- counter_area  -->
    <div class="counter_area">
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