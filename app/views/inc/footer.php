<?php
$configs =  new Config();
$config = $configs->get();
?>




<div class="contact_action_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="action_heading">
                    <h3 id="_addpropertyforsale">Add your property</h3>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="call_add_action">
                    <a id="_addproperty" href="<?php echo URLROOT.'properties/newProperty' ?>" class="boxed-btn3-line">Add
                        Property</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /contact_action_area  -->

<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="<?php echo URLROOT.'/img/albijadi_logo.png' ?>" alt="footer logo" srcset=""
                                    width="62%">
                            </a>
                        </div>
                        <p id="_locations">
                            We have the honor to visit our following branches: <br>
                            - KSA (Riyadh, Jeddah, Dammam) <br>
                            - UAE (Ajman) <br> <br>
                            Or by contacting us via the following numbers: <br>
                            - <a href="tel:0502677779">0502677779</a> <br>
                            - <a href="tel:920002313">920002313</a>
                        </p>
                        <div class="socail_links">
                            <p id="_socialtxt">You can also contact us through our following social media accounts: </p>
                            <ul>
                                <li>
                                    <a href="<?php echo $config->facebook ?>">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $config->twitter ?>">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $config->instagram ?>">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=0502677779&text=%D8%A7%D9%84%D8%B3%D9%84%D8%A7%D9%85%20%D8%B9%D9%84%D9%8A%D9%83%D9%85">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title" id="_services">
                            Services
                        </h3>
                        <ul>
                            <li><a href="#" id="_servicetitle">Marketing Department</a></li>
                            <li><a href="#" id="_servicetitle"> Property management department</a></li>
                            <li><a href="#" id="_servicetitle">Contracting Maintenance Department</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title" id="_subscribe">
                            Subscribe
                        </h3>
                        <form class="newsletter_form">
                            <input type="text" name="email" placeholder="Enter your mail">
                            <button id="_subscribe">Subscribe</button>
                        </form>
                        <p class="newsletter_text" id="_hatespam">We hate spam too, we won't send you unnecessary
                            emails.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo URLROOT.'/js/languages.js' ?>"></script>
<script>

    <?php 


    if(!isset($_COOKIE['ln'])){
            echo "setLanguage('en');";
    }

    ?>
        if (getLanguage() == 'ar')
            {
                var head  = document.getElementsByTagName('head')[0];
                var link  = document.createElement('link');
                link.id   = 'cssId';
                link.rel  = 'stylesheet';
                link.type = 'text/css';
                link.href = '<?php echo URLROOT.'css/arabic.css' ?>';
                link.media = 'all';
                head.appendChild(link);
            }
    
    </script>
