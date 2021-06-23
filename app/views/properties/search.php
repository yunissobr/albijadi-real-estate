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
    <?php require_once APPROOT.'/views/inc/header.php'  ?>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider single_slider2  d-flex align-items-center property_bg overlay2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="property_wrap">
                            <div class="slider_text text-center justify-content-center">
                                <h3 id="_searchproperty">Search property</h3>
                            </div>
                            <div class="property_form">
                                <form method="post" id="searchForm" action="<?php echo URLROOT.'properties/search' ?>">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form_wrap d-flex">
                                                <div class="single-field max_width ">
                                                    <label for="#" id="_keyword">Keyword</label>
                                                    <div class="mt-10">
                                                        <input type="text" name="keyword" placeholder="Type a keyword"
                                                            onfocus="this.placeholder = ''"
                                                            onblur="this.placeholder = 'Type a keyword'"
                                                            value="<?php echo $data['keyword'] ?>" required=""
                                                            class="single-input-primary-custom">
                                                    </div>
                                                </div>
                                                <input style="display: none" type="number" name="from" id="from"
                                                    value="<?php echo $data['from'] + 6 ?>">
                                                <div class="single-field max_width ">
                                                    <label for="#" id="_type">Type</label>
                                                    <select class="wide" id="select_custom" name="type">
                                                        <option data-display="<?php echo SALE ?>"
                                                            <?php echo ($data['type'] == 'Sale') ? 'selected' : '' ?>>
                                                            <?php echo SALE ?></option>
                                                        <option value="<?php echo RENT ?>"
                                                            <?php echo ($data['type'] == 'Rent') ? 'selected' : '' ?>>
                                                            <?php echo RENT ?></option>
                                                    </select>
                                                </div>
                                                <div class="single-field max_width ">
                                                    <label for="#" id="_propertytype">Property type</label>
                                                    <select class="wide" name="category">
                                                        <option data-display="<?php echo lands ?>"
                                                            <?php echo ($data['category'] == 'Land') ? 'selected' : '' ?>>
                                                            <?php echo lands ?></option>
                                                        <option value="<?php echo villas ?>"
                                                            <?php echo ($data['category'] == 'Villa') ? 'selected' : '' ?>>
                                                            <?php echo villas ?></option>
                                                        <option value="<?php echo apartments ?>"
                                                            <?php echo ($data['category'] == 'Apartment') ? 'selected' : '' ?>>
                                                            <?php echo apartments ?></option>
                                                        <option value="<?php echo floors ?>"
                                                            <?php echo ($data['category'] == 'Floor') ? 'selected' : '' ?>>
                                                            <?php echo floors ?></option>
                                                        <option value="<?php echo Building ?>"
                                                            <?php echo ($data['category'] == 'Building') ? 'selected' : '' ?>>
                                                            <?php echo Building ?></option>
                                                        <option value="<?php echo esteraha ?>"
                                                            <?php echo ($data['category'] == 'Esteraha') ? 'selected' : '' ?>>
                                                            <?php echo esteraha ?></option>
                                                        <option value="<?php echo farms ?>"
                                                            <?php echo ($data['category'] == 'Farm') ? 'selected' : '' ?>>
                                                            <?php echo farms ?></option>
                                                        <option value="<?php echo store ?>"
                                                            <?php echo ($data['category'] == 'Store') ? 'selected' : '' ?>>
                                                            <?php echo store ?></option>
                                                        <option value="<?php echo office ?>"
                                                            <?php echo ($data['category'] == 'Office') ? 'selected' : '' ?>>
                                                            <?php echo office ?></option>
                                                        <option value="<?php echo warehouse ?>"
                                                            <?php echo ($data['category'] == 'Warehouse') ? 'selected' : '' ?>>
                                                            <?php echo warehouse ?></option>
                                                    </select>
                                                </div>
                                                <div class="serach_icon">
                                                    <a href="javascript:void(0)" onclick="submitDetailsFormWithFrom()">
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
    </div>
    <!-- slider_area_end -->
    <div class="popular_property plus_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-40 text-center">
                        <h4 id="_realestate" ><?php echo sizeof($data['properties']) > 0 ? sizeof($data['properties']) : 'No' ?>
                            Properties found</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data['properties'] as $property) : ?>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_property">
                        <div class="property_thumb">
                            <div class="property_tag <?php echo 'RENT' == $property->type ? 'red' : '' ?>">
                                For <?php echo $property->type ?>
                            </div>
                            <img src="<?php echo URLROOT ?>img/properties/<?php echo $this->propertyModel->getImages($property->id)[1]->image ?>"
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
                                <span class="amount"><?php echo 'RENT' == $property->type ? '$'.$property->price.'/month' : 'From $'.$property->price ?> </span>
                            </div>
                        </div>
                        <div class="footer_pro">
                            <ul>
                                <li>
                                    <div class="single_info_doc">
                                        <img src="img/svg_icon/square.svg" alt="">
                                        <span><?php echo $property->size ?> Sqft</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <div class="row">
                <?php if(sizeof($data['properties']) >= 6) : ?>
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a href="javascript:void(0)" onclick="submitDetailsForm()" class="boxed-btn3-line" id="_moreproperties">More
                            Properties</a>
                    </div>
                </div>

                <?php elseif($data['from'] > 6): ?>
                <div class="col-xl-12">
                    <div class="more_property_btn text-center">
                        <a id="_backtofirst" href="javascript:void(0)" onclick="submitDetailsFormWithFrom()" class="boxed-btn3-line">Back
                            to First</a>
                    </div>
                </div>
                <?php endif ?>

            </div>
        </div>
    </div>

   


    <!-- footer start -->
    <?php require_once APPROOT.'/views/inc/footer.php'  ?>
    <style>
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
    </style>
    <style>
    .property_bg {
        background-image: url(../img/banner/banner.jpg);
    }
    </style>
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

    function submitDetailsFormWithFrom() {
        document.getElementById('from').value = 0;
        $('form#searchForm').submit();
    }
    </script>
</body>

</html>