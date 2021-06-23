<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo SITENAME ?></title>
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
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3 id="_addproperty">Add Property</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->


    <!--================FORM add property Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <?php flash('new_property_feedback') ?>
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="h4" id="_generalinfo">General info</div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="title" placeholder="Title" required="" class="single-input is-valid">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="age" placeholder="Age"  required="" class="single-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="price" placeholder="Price" required="" class="single-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="original_price" placeholder="Original Price" required="" class="single-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="size" placeholder="Size (in sqft)" required="" class="single-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select mt-3" id="type" name="type">
                                    <option selected>Sale Type</option>
                                    <option value="RENT"><?php echo RENT ?></option>
                                    <option value="SALE"><?php echo SALE ?></option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select mt-3" id="category" name="category">
                                    <option data-display="<?php echo lands ?>" value="lands">
                                        <?php echo lands ?></option>
                                    <option value="villas">
                                        <?php echo villas ?></option>
                                    <option value="apartments">
                                        <?php echo apartments ?></option>
                                    <option value="floors">
                                        <?php echo floors ?></option>
                                    <option value="building">
                                        <?php echo Building ?></option>
                                    <option value="esteraha">
                                        <?php echo esteraha ?></option>
                                    <option value="farms">
                                        <?php echo farms ?></option>
                                    <option value="floors">
                                        <?php echo floors ?></option>
                                    <option value="store">
                                        <?php echo store ?></option>
                                    <option value="office">
                                        <?php echo office ?></option>
                                    <option value="warehouse">
                                        <?php echo warehouse ?></option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select mt-3" name="toBeUsedFor">
                                    <option value="1">To be used</option>
                                    <option value="For Commercial">For Commercial</option>
                                    <option value="Residential">Residential</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="city" placeholder="City" required="" class="single-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="district" placeholder="District" required="" class="single-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="neighborhood_name" placeholder="Neighborhood Name" required="" class="single-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="street_name" placeholder="Street Name" required="" class="single-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="building_no" placeholder="Building No" required="" class="single-input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input type="text" name="direction" placeholder="Direction" required="" class="single-input">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mt-3">
                                    <input type="text" name="nbr_of_street" placeholder="Number Of Street" required="" class="single-input">
                                </div>
                            </div>

                        </div>
                        <div class="h5 mt-3" id="_selectlocationonmap">Select Your Location On Map</div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <div id="mapid" style="z-index: 1;"></div>
                                <div class="div" style="display: none">
                                    <input type="text" id="lat" name="lat">
                                    <input type="text" id="lng" name="lng">
                                </div>

                            </div>
                            <div class="col-md-12 mt-5">
                                <div class="h6" id="_chooseimages">Images (select multiple images)</div>
                                <input type="file" name="images[]" required="" class="single-input" multiple="multiple">
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="h6" id="_brochure">Brochure</div>
                                <input type="file" name="brochure" required="" class="single-input">
                            </div>
                            <div class="col-md-12 mt-4">
                                <textarea class="single-textarea" name="description" placeholder="Description" required=""></textarea>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h3 id="_ownerinfo">Owner info</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <input type="text" name="full_name" placeholder="Full Name" required="" class="single-input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mt-3">
                                        <input type="text" name="email" placeholder="Email" required="" class="single-input">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mt-3">
                                        <input type="text" name="phone" placeholder="Phone no." required="" class="single-input">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <input type="submit" style=" width: inherit;" class="genric-btn primary-border"
                                        value="SEND" name="add" />
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-2"></div>
                </div>
            </form>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <style>
    #mapid {
        height: 280px;
    }
    </style>

    <script>
    var isMarkerKayn = false;
    var marker;
    var lat = document.getElementById('lat');
    var lng = document.getElementById('lng');

    // $(document).ready(function() {
    //     console.log('ready');
    //     $("#type").change(function() {
    //         console.log('changed')
    //         var val = $(this).val();
    //         console.log(val)
    //         if (val == 'SALE' ) {
    //             $("#category").html(
    //                 "<option value='0'>Category</option> <option value='<?php #echo 'lands' ?>'><?php #echo lands ?></option> <option value='<?php #echo 'buildings' ?>'><?php #echo buildings ?></option> <option value='<?php #echo 'villas' ?>'><?php #echo villas ?></option> <option value='<?php #echo 'apartments' ?>'><?php #echo apartments ?></option> <option value='<?php #echo 'farms' ?>'><?php #echo farms ?></option> <option value='<?php #echo 'other' ?>'><?php #echo other ?></option> "
    //                 );

    //         } else if (val == 'RENT' ) {
    //             $("#category").html(
    //                 "<option value='0'>Category</option> <option value='<?php #echo 'lands' ?>'><?php #echo lands ?></option> <option value='<?php #echo 'buildings' ?>'><?php #echo buildings ?></option> <option value='<?php #echo 'villas' ?>'><?php #echo villas ?></option> <option value='<?php #echo 'apartments' ?>'><?php #echo apartments ?></option> <option value='<?php #echo 'farms' ?>'><?php #echo farms ?></option> <option value='<?php #echo 'floors' ?>'><?php #echo floors ?></option>  <option value='<?php #echo 'storesandOffices' ?>'><?php #echo storesandOffices ?></option> <option value='<?php #echo 'other' ?>'><?php #echo other ?></option>"
    //                 );
    //         }
    //     });


    // });

    var mymap = L.map('mapid').setView([30.25, -8.52], 3);
    L.tileLayer(
        'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoidW5pc291YiIsImEiOiJjazl5ZXNka2IwODkzM3J0N2Vvbnl0YXh5In0.QXlG6Cru10clFUywFw-r5w', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 20,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoidW5pc291YiIsImEiOiJjazl5ZXNka2IwODkzM3J0N2Vvbnl0YXh5In0.QXlG6Cru10clFUywFw-r5w'
        }).addTo(mymap);

    mymap.on('click', function(e) {
        if (isMarkerKayn) { // check
            mymap.removeLayer(marker); // remove
        }
        isMarkerKayn = true;
        marker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(mymap);
        lat.value = e.latlng.lat;
        lng.value = e.latlng.lng;
    });
    </script>
    <!--================FORM add property Area =================-->

    <!-- footer start -->
   <?php require_once APPROOT.'/views/inc/footer.php'  ?>
    <!--/ footer end  -->

    <style>
    .bradcam_bg_1 {
    background-image: url(../img/banner/add_property.png);
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