<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo SITENAME ?></title>
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
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/style.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
        integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
        crossorigin=""></script>
    <link rel="stylesheet" href="<?php echo URLROOT ?>css/responsive.css">
</head>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <?php require_once APPROOT.'/views/inc/header.php'  ?>
    <!-- header-end -->

         <!-- bradcam_area  -->
        <div class="property_details_banner" style="direction: ltr">
                <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-md-8 col-lg-6">
                                <div class="comfortable_apartment">
                                    <h4><?php echo $data['property']->title ?></h4>
                                    <p> <img src="<?php echo URLROOT ?>img/svg_icon/location.svg" alt=""> <?php echo $data['property']->building_no.' '.$data['property']->neighborhood_name.' '.$data['property']->street_name.' '.$data['property']->city ?></p>
                                    <div class="quality_quantity d-flex">
                                        <div class="single_quantity">
                                            <img src="<?php echo URLROOT ?>img/svg_icon/color_box.svg" alt="">
                                            <span><?php echo $data['property']->size ?> m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-4 col-lg-6">
                                <div class="prise_quantity">
                                    <h4>ريال<?php echo $data['property']->price ?></h4>
                                    <a href="#"><?php echo $data['property']->phone ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
            <!--/ bradcam_area  -->

    <!-- details  -->
    <div class="property_details" style="direction: ltr">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="property_banner">
                        <div class="property_banner_active owl-carousel">
                            <?php foreach ($data['property-images'] as $image) :?>
                                <div class="single_property">
                                    <img src="<?php echo URLROOT.'img/properties/'.$image->image ?>" alt="">
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 rtl" >
                    <div class="details_info">
                        <h4 id="_description">Description</h4>
                        <p><?php echo $data['property']->description ?></p>

                    </div>
                    <section class="contact-section">
                            <div class="d-none d-sm-block">
                                <div id="mapid" style="z-index: 1;"></div>
                                <style>
                                    #mapid {
                                        height: 380px;
                                    }
                                </style>
                                <script>
                                    var marker;
                                    var mymap = L.map('mapid').setView([<?php echo $data['property']->lat ?>, <?php echo $data['property']->lng ?>], 4);
                                    L.tileLayer(
                                        'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidW5pc291YiIsImEiOiJjazl5ZXNka2IwODkzM3J0N2Vvbnl0YXh5In0.QXlG6Cru10clFUywFw-r5w', {
                                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                                            maxZoom: 18,
                                            id: 'mapbox/streets-v11',
                                            tileSize: 512,
                                            zoomOffset: -1,
                                            accessToken: 'pk.eyJ1IjoidW5pc291YiIsImEiOiJjazl5ZXNka2IwODkzM3J0N2Vvbnl0YXh5In0.QXlG6Cru10clFUywFw-r5w'
                                        }).addTo(mymap);

                                    marker = L.marker([<?php echo $data['property']->lat ?>, <?php echo $data['property']->lng ?>]).addTo(mymap);
                                                                
                                
                                </script>
                            </div>
                        </section>
                    <div class="contact_field" >
                        <h3 id="_contact">Contact Us</h3>
                        
                        
                        <form method="post">
                                <div class="row">
                                    
                                        <div class="col-xl-6 col-md-6">
                                            <input type="text" placeholder="Your Name" name="name" required >
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <input type="email" placeholder="Email" name="email" required >
                                        </div>
                                        <div class="col-xl-12">
                                            <input type="number" placeholder="Phone no." name="phone"required >
                                        </div>
                                        <div class="col-xl-12" style="display: none">
                                            <input type="text" placeholder="Phone no." required name="subject" value="<?php echo $data['property']->title ?>">
                                            <input type="text" placeholder="Phone no." required name="property_id" value="<?php echo $data['property']->id ?>">
                                        </div>
                                        <div class="col-xl-12">
                                           <textarea cols="30" rows="10" placeholder="Message" name="message" required ></textarea>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="send_btn">
                                                <button type="submit" class="send_btn" name="send">Send</button>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /details  -->

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
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="<?php echo URLROOT ?>js/notify.js"></script>


    <script src="<?php echo URLROOT ?>js/main.js"></script>


    <script>

        

    </script>
</body>

</html>