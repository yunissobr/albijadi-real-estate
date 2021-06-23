<?php
$configs =  new Config();
$config = $configs->get();
?>

<header>
    <div class="header-area ">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-md-5 ">
                        <div class="header_left">
                            <p id="div1">Welcome to Albijadi consulting service</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-7">
                        <div class="header_right d-flex">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="mailto:<?php echo $config->email ?>"> <i class="fa fa-envelope"></i>
                                            <?php echo $config->email ?></a>
                                    </li>
                                    <li><a href="tel:<?php echo $config->phone ?>"> <i class="fa fa-phone"></i>
                                            <?php echo $config->phone ?></a></li>
                                </ul>
                            </div>
                            <div class="social_media_links">
                                <a href="<?php echo $config->facebook ?>">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="<?php echo $config->twitter ?>">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="<?php echo $config->instagram ?>">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a
                                    href="https://api.whatsapp.com/send?phone=0502677779&text=Hello,%20I%20would%20like%20to%20know%20more%20informations?">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="<?php echo URLROOT ?>">
                                    <img src="<?php echo URLROOT ?>img/albijadi_logo.png" width="50%">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a id="_homepage"
                                                <?php echo $data['page'] == 'home' ? 'class="active"' : '' ?>
                                                href="<?php echo URLROOT ?>">home</a></li>
                                        <li><a id="_discover"
                                                <?php echo $data['page'] == 'search' || $data['page'] == 'single_property' ? 'class="active"' : '' ?>
                                                href="<?php echo URLROOT . 'properties/search' ?>">Properties</a></li>
                                        <li><a id="_aboutus"
                                                <?php echo $data['page'] == 'about_us' ? 'class="active"' : '' ?>
                                                href="<?php echo URLROOT . 'pages/about' ?>">About us</a></li>
                                        <li><a id="_services"
                                                <?php echo $data['page'] == 'services' ? 'class="active"' : '' ?>
                                                href="<?php echo URLROOT . 'pages/services#services' ?>">Services</a>
                                        </li>
                                        <li><a id="_contact"
                                                <?php echo $data['page'] == 'contact' ? 'class="active"' : '' ?>
                                                href="<?php echo URLROOT . 'pages/contact' ?>">Contact</a></li>

                                    </ul>

                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">

                                <div class="book_btn d-none d-lg-block">
                                    <a id="_addproperty" href="<?php echo URLROOT . 'properties/newProperty' ?>">Add
                                        Property</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <li id="ln"
                                style="color: white; position: absolute; background: teal; left: 0; top: 0px; width: 37px; text-align: center; padding: 4px;">
                            </li>
                            <div class="mobile_menu d-block d-lg-none">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




    <script>

    </script>
</header>