<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo SITENAME ?> </title>
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

    <!-- <link rel="stylesheet" href="<?php echo URLROOT ?>css/arabic.css"> -->
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <div class="spinner-wrapper">
        <div class="spinner"></div>
    </div>

    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php require_once APPROOT.'/views/inc/header.php'  ?>
    <!-- header-end -->
    <style>
    .spinner {
        width: 40px;
        height: 40px;
        background-color: #FFF;
        position: absolute;
        top: 40%;
        left: 50%;
        margin: 100px auto;
        -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
        animation: sk-rotateplane 1.2s infinite ease-in-out;
    }

    @-webkit-keyframes sk-rotateplane {
        0% {
            -webkit-transform: perspective(120px)
        }

        50% {
            -webkit-transform: perspective(120px) rotateY(180deg)
        }

        100% {
            -webkit-transform: perspective(120px) rotateY(180deg) rotateX(180deg)
        }
    }

    @keyframes sk-rotateplane {
        0% {
            transform: perspective(120px) rotateX(0deg) rotateY(0deg);
            -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
        }

        50% {
            transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
            -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
        }

        100% {
            transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
        }

    }

    .spinner-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ff6347;
        z-index: 999999;
    }

    .slider_area .single-field.max_width .nice-select.wide {
        width: 17rem;
    }


    .single-input-primary-custom {
        display: block;
        width: 16rem;
        line-height: 40px;
        border: 1px solid #8d8f8d;
        border-radius: 3px;
        outline: none;
        background: transparent;
        color: #c7c7c7;
        padding: 0 20px;
    }

    .slider_area .serach_icon a {
        width: 6rem;
        height: 45px;
        background: #FD8E5E;
        text-align: center;
        line-height: 45px;
        color: #fff;
        border-radius: 5px;
        margin-top: 1.7rem;
        display: inline-block;
    }

    .slider_bg_1 {
        background-image: url(../img/cover.png);
    }

    .home_details {
        background-image: url(../img/banner/home_details.jpg);
    }
    </style>
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="slider_text text-center justify-content-center">
                            <h3 id="_welcomslogan" style="background-color: #0001">Find your best Property</h3>
                            <p id="_welcomsloganunder">Sell and buy properties.</p>
                        </div>
                        <div class="property_form">
                            <form method="post" id="searchForm" action="<?php echo URLROOT.'properties/search' ?>">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form_wrap d-flex">
                                            <div class="single-field max_width ">
                                                <label for="#" id="_keyword">Keyword</label>
                                                <div class="mt-10">
                                                    <input type="text" name="keyword" id="_inkeyword"
                                                        placeholder="Type a keyword" required=""
                                                        class="single-input-primary-custom">
                                                </div>
                                            </div>
                                            <div class="single-field max_width ">
                                                <label for="#" id="_type">Type</label>
                                                <select class="wide" id="select_custom" name="type">
                                                    <option data-display="<?php echo SALE ?>">
                                                        <?php echo SALE ?></option>
                                                    <option value="<?php echo RENT ?>">
                                                        <?php echo RENT ?></option>
                                                </select>
                                            </div>
                                            <div class="single-field max_width ">
                                                <label for="#" id="_propertytype">Property type</label>
                                                <select class="wide" name="category">
                                                    <option data-display="<?php echo lands ?>">
                                                        <?php echo lands ?></option>
                                                    <option value="<?php echo villas ?>">
                                                        <?php echo villas ?></option>
                                                    <option value="<?php echo apartments ?>">
                                                        <?php echo apartments ?></option>
                                                    <option value="<?php echo floors ?>">
                                                        <?php echo floors ?></option>
                                                    <option value="<?php echo Building ?>">
                                                        <?php echo Building ?></option>
                                                    <option value="<?php echo esteraha ?>">
                                                        <?php echo esteraha ?></option>
                                                    <option value="<?php echo farms ?>">
                                                        <?php echo farms ?></option>
                                                    <option value="<?php echo floors ?>">
                                                        <?php echo floors ?></option>
                                                    <option value="<?php echo store ?>">
                                                        <?php echo store ?></option>
                                                    <option value="<?php echo office ?>">
                                                        <?php echo office ?></option>
                                                    <option value="<?php echo warehouse ?>">
                                                        <?php echo warehouse ?></option>
                                                </select>
                                            </div>
                                            <div class="serach_icon">
                                                <a href="javascript:void(0)" onclick="submitDetailsForm()">
                                                    <i class="ti-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- popular_property  -->
    <div class="popular_property">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3 id="_mostpopular">Popular Properties</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php $i = 0;foreach ($data['popular'] as $property) : ?>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag <?php echo 'RENT' == $property->type ? 'red' : '' ?>">
                                For <?php echo $property->type ?>
                            </div>
                            <img src="<?php echo URLROOT ?>img/properties/<?php echo $this->propertyModel->getImages($property->id)[0]->image ?>"
                                alt="">
                        </div>
                        <div class="property_content">
                            <div class="main_pro">
                                <h3><a
                                        href="<?php echo URLROOT.'properties/property/'. $property->id ?>"><?php echo $property->title ?></a>
                                </h3>
                                <div class="mark_pro">
                                    <img src="<?php echo URLROOT ?>img/svg_icon/location.svg" alt="">
                                    <span><?php echo $property->building_no.' '.$property->neighborhood_name.' '.$property->street_name.' '.$property->city ?></span>
                                </div>
                                <span
                                    class="amount"><?php echo 'RENT' == $property->type ? '$'.$property->price.'/month' : 'From $'.$property->price ?>
                                </span>
                            </div>
                        </div>
                        <div class="footer_pro">
                            <ul>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/square.svg" alt="">
                                        <span><?php echo $property->size ?> M</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php  $i++;
                        if($i > 5){
                            break;
                        }
                        
                        ?>
                <?php endforeach ?>

            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="<?php echo URLROOT.'/properties/search' ?>" class="boxed-btn3-line"
                            id="_moreproperties">More Properties</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /popular_property  -->

    <!-- home_details  -->
    <div class="home_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="home_details_active owl-carousel">
                        <?php foreach ($data['featured'] as $property): ?>
                        <div class="single_details">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="modern_home_info">
                                        <div class="modern_home_info_inner">
                                            <span class="for_sale">
                                                For <?php echo $property->type ?>
                                            </span>
                                            <div class="info_header">
                                                <h3><?php echo $property->title ?></h3>
                                                <div class="popular_pro d-flex">
                                                    <img src="<?php echo URLROOT ?>img/svg_icon/location.svg" alt="">
                                                    <span><?php echo $property->building_no.' '.$property->neighborhood_name.' '.$property->street_name.' '.$property->city ?></span>
                                                </div>
                                            </div>
                                            <div class="info_content">
                                                <ul>
                                                    <li> <img src="<?php echo URLROOT ?>img/svg_icon/square.svg" alt="">
                                                        <span><?php echo $property->size ?>
                                                            Sqft</span> </li>
                                                </ul>
                                                <p><?php echo substr($property->description,0,150).'..' ?></p>
                                                <div
                                                    class="prise_view_details d-flex justify-content-between align-items-center">
                                                    <span>ريال<?php  echo $property->price ?></span>
                                                    <a id="_viewdetails" class="boxed-btn3-line"
                                                        href="<?php echo URLROOT .'/properties/property/'.$property->id ?>">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /home_details  -->



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

    <!-- testimonial_area  -->
    <!-- <div class="testimonial_area overlay ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="<?php echo URLROOT ?>img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?php echo URLROOT ?>img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="<?php echo URLROOT ?>img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?php echo URLROOT ?>img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="<?php echo URLROOT ?>img/svg_icon/quote.svg" alt="">
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="<?php echo URLROOT ?>img/case/testmonial.png" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    /testimonial_area  -->

    <!-- team_area  -->
    <!-- <div class="team_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h3>
                            Our Agents
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_team">
                        <div class="team_thumb">
                            <img src="<?php echo URLROOT ?>img/team/1.png" alt="">
                            <div class="social_link">
                                <ul>
                                    <li><a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_info text-center">
                            <h3>Milani Mou</h3>
                            <p>Business Agent</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_team">
                        <div class="team_thumb">
                            <img src="<?php echo URLROOT ?>img/team/2.png" alt="">
                            <div class="social_link">
                                <ul>
                                    <li><a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_info text-center">
                            <h3>Halim Yoka</h3>
                            <p>Business Agent</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_team">
                        <div class="team_thumb">
                            <img src="<?php echo URLROOT ?>img/team/3.png" alt="">
                            <div class="social_link">
                                <ul>
                                    <li><a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_info text-center">
                            <h3>Dalim Karma</h3>
                            <p>Business Agent</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single_team">
                        <div class="team_thumb">
                            <img src="<?php echo URLROOT ?>img/team/4.png" alt="">
                            <div class="social_link">
                                <ul>
                                    <li><a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team_info text-center">
                            <h3>Micky</h3>
                            <p>Business Agent</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- /team_area  -->

    <!-- footer -->
   
    <?php require_once APPROOT.'/views/inc/footer.php'  ?>
    <!--/ footer end  -->

    <!-- link that opens popup -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
        src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js">
    </script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="<?php echo URLROOT ?>js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
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
    <script>
    function submitDetailsForm() {
        $('form#searchForm').submit();
    }

    $('.img-pop-up').magnificPopup({
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        gallery: {
            enabled: true
        }

    });
    </script>

    <style>
    .mfp-with-zoom .mfp-container,
    .mfp-with-zoom.mfp-bg {
        opacity: 0;
        /* ideally, transition speed should match zoom duration */
        -webkit-transition: all 0.7s ease-out;
        -moz-transition: all 0.7s ease-out;
        -o-transition: all 0.7s ease-out;
        transition: all 0.7s ease-out;
    }

    .mfp-with-zoom.mfp-ready .mfp-container {
        opacity: 1;
    }

    .mfp-with-zoom.mfp-ready.mfp-bg {
        opacity: 0.8;
    }

    .mfp-with-zoom.mfp-removing .mfp-container,
    .mfp-with-zoom.mfp-removing.mfp-bg {
        opacity: 0;
    }
    </style>
    <script>
    $(document).ready(function() {
        //Preloader
        preloaderFadeOutTime = 1000;

        function hidePreloader() {
            var preloader = $('.spinner-wrapper');
            preloader.fadeOut(preloaderFadeOutTime);
        }
        hidePreloader();
    });
    </script>
</body>

</html>