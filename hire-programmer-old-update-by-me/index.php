<?php
require_once('../lib/helper.php');
header_seo_part('Hire Programmer');
?>
<link rel="preload" as="image" href="assets/images/banner-image.jpg">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

<style>
<?php include("assets/css/style.min.css");
?>
</style>
</head>

<body>
    <?php header_navs($white = false); ?>
    <!-- Header end -->

    <!-- Banner section start -->
    <section class="banner">
        <div class="banner_left">
            <div class="banner_content">
                <h1>Project Delays Keeping You Up All Night?</h1>
                <h3>Start in Just <span>8 Hours (& Save 70%)</span></h3>
                <button class="btn-primary smoothscroll" data-target="#form">Hire Your Programmer</button>
            </div>
        </div>
        <div class="banner_right">
            <img src="assets/images/banner-image.jpg" width="960" height="975" alt="">
        </div>
    </section> <!-- Banner section end -->

    <!-- Process start here -->
    <section class="process_section">
        <div class="container">
            <div class="text-center">
                <h2>Get Your Project Back on Track</h2>
                <h4>With VE’s Robust <span>Foursome</span></h4>
            </div>
            <div class="flexbox">
                <div class="flex-3">
                    <div class="process_card quick_hiring">
                        <i class="icons quick-hiring-icon"></i>
                        <h5>Quick <br> Hiring</h5>
                        <p>You can start working with top-rated programmers at VE within a few days of hiring (with zero
                            hiring fees)</p>
                    </div>
                </div>
                <div class="flex-3">
                    <div class="process_card project_stability">
                        <i class="icons project-stability-icon"></i>
                        <h5>Project <br> Stability</h5>
                        <p>More than 100+ clients have been working with their dedicated programmers for over 5 years
                        </p>
                    </div>
                </div>
                <div class="flex-3">
                    <div class="process_card in_house_team">
                        <i class="icons in-house-team-icon"></i>
                        <h5>Large <br> In-House Team</h5>
                        <p>VE has a large in-house team of 750+ skilled programmers, fluent in over 100+ programming
                            languages</p>
                    </div>
                </div>
                <div class="flex-3">
                    <div class="process_card western_firm_experience">
                        <i class="icons western-firm-experience-icon"></i>
                        <h5>Western Firm <br> Experience</h5>
                        <p>VE's resources work exclusively with global clients & remain updated through
                            self-learning and training</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Process end here -->

    <!-- Service section start here -->
    <section class="service_section">
        <div class="container">
            <div class="text-center">
                <h2>Your Requirements. Our Solutions</h2>
                <h4>From Simple code fixes to complex projects, <span>VE Does it All</span></h4>
            </div>
            <ul class="service_tabs navigation-thumbs owl-carousel" id="sync2">
                <li class="service_tabs_items item"><span>Web</span></li>
                <li class="service_tabs_items item"><span>Mobile App</span></li>
                <li class="service_tabs_items item"><span>Frontend</span></li>
                <li class="service_tabs_items item"><span>Full Stack</span></li>
                <li class="service_tabs_items item"><span>E-Commerce</span></li>
                <li class="service_tabs_items item"><span>CMS</span></li>
                <li class="service_tabs_items item"><span>API</span></li>
                <li class="service_tabs_items item"><span>Backend</span></li>
            </ul>
            <div class="service_tabs_wrapper">
                <div class="arrow left">
                    <!-- <span><i class="icons left-arrow-icon"></i></span> -->
                </div>
                <div id="sync1" class="service_slider slider owl-carousel">
                    <div class="item">
                        <div class="service_tabs_content">
                            <div class="flexbox">
                                <div class="flex-5">
                                    <h2>Web <br>Programmers </h2>
                                    <p>Hire VE's elite programmers to develop a smooth, user-friendly web application
                                        that does
                                        not require your audience to think.</p>
                                    <strong>Technologies</strong>
                                    <div class="technologies">
                                        <span class="badge">PHP</span>
                                        <span class="badge"> .NET</span>
                                        <span class="badge">Java</span>
                                        <span class="badge">Ruby</span>
                                        <span class="badge">Python</span>
                                        <span class="badge">Node JS</span>
                                    </div>
                                </div>
                                <div class="flex-7">
                                    <img src="assets/images/web-programmer.jpg" width="630" height="500" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service_tabs_content mobile_apps">
                            <div class="flexbox">
                                <div class="flex-5">
                                    <h2>Mobile App <br>Programmers </h2>
                                    <p>Whether you want to build an app on a native platform or a hybrid platform, our
                                        programmers will build it exactly how you want it.</p>
                                    <strong>Technologies</strong>
                                    <div class="technologies">
                                        <span class="badge">Swift</span>
                                        <span class="badge">C++</span>
                                        <span class="badge">Java</span>
                                        <span class="badge">HTML5</span>
                                        <span class="badge">PHP</span>
                                        <span class="badge">React Native</span>
                                    </div>
                                </div>
                                <div class="flex-7">
                                    <img src="assets/images/mobile-app-programmer.jpg" width="440" height="500" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service_tabs_content frontend">
                            <div class="flexbox">
                                <div class="flex-5">
                                    <h2>Frontend <br>Programmers </h2>
                                    <p>Create better, beautiful experiences for website and app visitors everywhere with
                                        our skilled VE programmers.</p>
                                    <strong>Technologies</strong>
                                    <div class="technologies">
                                        <span class="badge">HTML5</span>
                                        <span class="badge">Vue JS</span>
                                        <span class="badge">Angular</span>
                                        <span class="badge">React JS</span>
                                        <span class="badge">Node JS</span>
                                        <span class="badge">Flutter</span>
                                    </div>
                                </div>
                                <div class="flex-7">
                                    <img src="assets/images/front-end-programmer.jpg" width="605" height="500" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service_tabs_content fullstack">
                            <div class="flexbox">
                                <div class="flex-5">
                                    <h2>Full Stack <br>Programmers </h2>
                                    <p>Create fully-functional robust applications with the help of our skilled and
                                        highly
                                        talented VE programmers.</p>
                                    <strong>Technologies</strong>
                                    <div class="technologies">
                                        <span class="badge">C#</span>
                                        <span class="badge">ASP.NET</span>
                                        <span class="badge">.Net</span>
                                        <span class="badge">SQL Server</span>
                                        <span class="badge">Visual Studio</span>
                                        <span class="badge">HTML</span>
                                    </div>
                                </div>
                                <div class="flex-7">
                                    <img src="assets/images/fullstack-developer.jpg" width="535" height="500" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service_tabs_content ecommerce">
                            <div class="flexbox">
                                <div class="flex-5">
                                    <h2>E-Commerce<br> Programmers </h2>
                                    <p>Give wings to your online shopping business with a company that has helped businesses over 200 e-commerce platforms.</p>
                                    <strong>Technologies</strong>
                                    <div class="technologies">
                                        <span class="badge">Magento</span>
                                        <span class="badge">WordPress</span>
                                        <span class="badge">PHP</span>
                                        <span class="badge">Laravel</span>
                                        <span class="badge">React Native</span>
                                        <span class="badge">Joomla</span>
                                    </div>
                                </div>
                                <div class="flex-7">
                                    <img src="assets/images/ecommerce-programmer.jpg" width="500" height="500" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service_tabs_content cms">
                            <div class="flexbox">
                                <div class="flex-5">
                                    <h2>CMS <br> Programmers </h2>
                                    <p>Right from native and hybrid apps to a full-fledged CMS, our programmers develop them all. </p>
                                    <strong>Technologies</strong>
                                    <div class="technologies">
                                        <span class="badge">WordPress</span>
                                        <span class="badge">Joomla</span>
                                        <span class="badge">Drupal</span>
                                        <span class="badge">Magento</span>
                                        <span class="badge">OctoberCMS</span>
                                        <span class="badge">OpenCart</span>
                                    </div>
                                </div>
                                <div class="flex-7">
                                    <img src="assets/images/cms-developer.jpg" width="645" height="500" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service_tabs_content api">
                            <div class="flexbox">
                                <div class="flex-5">
                                    <h2>API <br>Programmers </h2>
                                    <p>Create scalable and secure APIs for web and mobile applications with the help of VE's skilled programmers. </p>
                                    <strong>Technologies</strong>
                                    <div class="technologies">
                                        <span class="badge">REST</span>
                                        <span class="badge">JSON</span>
                                        <span class="badge">OAuth </span>
                                        <span class="badge">JWT</span>
                                        <span class="badge">SOAP</span>
                                        <span class="badge">RPC </span>
                                    </div>
                                </div>
                                <div class="flex-7">
                                    <img src="assets/images/api-programmer.jpg" width="695" height="500" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service_tabs_content backend">
                            <div class="flexbox">
                                <div class="flex-5">
                                    <h2>Back-End <br>Programmers </h2>
                                    <p>Get powerful and future-proof solutions by hiring the right backend programmer. </p>
                                    <strong>Technologies</strong>
                                    <div class="technologies">
                                        <span class="badge">Python</span>
                                        <span class="badge">Ruby</span>
                                        <span class="badge">PHP</span>
                                        <span class="badge">Java</span>
                                        <span class="badge">.NET</span>
                                        <span class="badge">Kotlin</span>
                                    </div>
                                </div>
                                <div class="flex-7">
                                    <img src="assets/images/back-end-programmer.jpg" width="730" height="500" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="arrow right">
                    <!-- <span><i class="icons left-arrow-icon"></i></span> -->
                </div>
            </div>
        </div>
    </section> <!-- Service section end here -->

    <!-- Steps start here -->
    <div class="steps">
        <div class="container">
            <div class="text-center">
                <h2>Hand-Pick Your Programmer</h2>
                <h4>We Have <span>750+ In-House Programmers</span></h4>
            </div>
            <!--PEN CONTENT     -->
            <div class="content">
                <!--content inner-->
                <div class="content__inner">
                    <div class="overflow-hidden">
                        <!--multisteps-form-->
                        <div class="multisteps-form">
                            <!--progress bar-->
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button"
                                    title="User Info">Step - 1 </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Address">Step -
                                    2</button>
                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Step - 3
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Comments">Step -
                                    4</button>
                            </div>
                            <!--form panels-->
                            <form class="multisteps-form__form">
                                <!--single form panel-->
                                <div class="multisteps-form__panel js-active" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">How Much Experience do you want ?</h3>
                                    <div class="multisteps-form__content">
                                        <div class="forminputs">
                                            <span class="formfields">
                                                <label class="containerSb ">1 - 5 years
                                                    <input type="radio" checked name="exp" value="1 - 5 years">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields">
                                                <label class="containerSb ">5 - 10 years
                                                    <input type="radio" name="exp" value="5 - 10 years">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields">
                                                <label class="containerSb ">10 - 15 years
                                                    <input type="radio" name="exp" value="10 - 15 years">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields">
                                                <label class="containerSb ">Above 15 years
                                                    <input type="radio" name="exp" value="Above 15 years">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel step_2" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">Which technologies are you looking for? </h3>
                                    <div class="multisteps-form__content">
                                        <div class="forminputs forminputschecked">
                                            <span class="formfields ">
                                                <label class="containerChk">I am Not Sure
                                                    <input type="checkbox" checked name="technologies[]"
                                                        value="I am Not Sure">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">PHP
                                                    <input type="checkbox" name="technologies[]" value="PHP">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">C#
                                                    <input type="checkbox" name="technologies[]" value="C#">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Python
                                                    <input type="checkbox" name="technologies[]" value="Python">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Java
                                                    <input type="checkbox" name="technologies[]" value="Java">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">WordPress
                                                    <input type="checkbox" name="technologies[]" value="WordPress">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Laravel
                                                    <input type="checkbox" name="technologies[]" value="Laravel">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Magento
                                                    <input type="checkbox" name="technologies[]" value="Magento">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Shopify
                                                    <input type="checkbox" name="technologies[]" value="Shopify">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">WooCommerce
                                                    <input type="checkbox" name="technologies[]" value="WooCommerce">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">OpenCart
                                                    <input type="checkbox" name="technologies[]" value="OpenCart">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Prestashop
                                                    <input type="checkbox" name="technologies[]" value="Prestashop">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">OS Commerce
                                                    <input type="checkbox" name="technologies[]" value="OS Commerce">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Zen Cart
                                                    <input type="checkbox" name="technologies[]" value="Zen Cart">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">BigCommerce
                                                    <input type="checkbox" name="technologies[]" value="BigCommerce">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Django
                                                    <input type="checkbox" name="technologies[]" value="Django">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Electron
                                                    <input type="checkbox" name="technologies[]" value="Electron">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Android
                                                    <input type="checkbox" name="technologies[]" value="Android">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">iOS
                                                    <input type="checkbox" name="technologies[]" value="iOS">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Xamarin
                                                    <input type="checkbox" name="technologies[]" value="Xamarin">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">objective-C
                                                    <input type="checkbox" name="technologies[]" value="objective-C">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Swift
                                                    <input type="checkbox" name="technologies[]" value="Swift">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">HTML5
                                                    <input type="checkbox" name="technologies[]" value="HTML5">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Hybrid
                                                    <input type="checkbox" name="technologies[]" value="Hybrid">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Cordova
                                                    <input type="checkbox" name="technologies[]" value="Cordova">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Ionic
                                                    <input type="checkbox" name="technologies[]" value="Ionic">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Web Design
                                                    <input type="checkbox" name="technologies[]" value="Web Design">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">UX &amp; UI
                                                    <input type="checkbox" name="technologies[]" value="UX &amp; UI">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">CSS3
                                                    <input type="checkbox" name="technologies[]" value="CSS3">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">JavaScript
                                                    <input type="checkbox" name="technologies[]" value="JavaScript">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">AngularJS
                                                    <input type="checkbox" name="technologies[]" value="AngularJS">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Bootstrap
                                                    <input type="checkbox" name="technologies[]" value="Bootstrap">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">jQuery
                                                    <input type="checkbox" name="technologies[]" value="jQuery">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Photoshop
                                                    <input type="checkbox" name="technologies[]" value="Photoshop">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Illustrator
                                                    <input type="checkbox" name="technologies[]" value="Illustrator">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">ASP.NET
                                                    <input type="checkbox" name="technologies[]" value="ASP.NET">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">LESS
                                                    <input type="checkbox" name="technologies[]" value="LESS">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">SCSS
                                                    <input type="checkbox" name="technologies[]" value="SCSS">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Zend
                                                    <input type="checkbox" name="technologies[]" value="Zend">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Drupal
                                                    <input type="checkbox" name="technologies[]" value="Drupal">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Joomla
                                                    <input type="checkbox" name="technologies[]" value="Joomla">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Moodle
                                                    <input type="checkbox" name="technologies[]" value="Moodle">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">DotNetNuke
                                                    <input type="checkbox" name="technologies[]" value="DotNetNuke">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Kentico
                                                    <input type="checkbox" name="technologies[]" value="Kentico">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Ghost
                                                    <input type="checkbox" name="technologies[]" value="Ghost">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Yii
                                                    <input type="checkbox" name="technologies[]" value="Yii">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Symfony
                                                    <input type="checkbox" name="technologies[]" value="Symfony">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">CakePHP
                                                    <input type="checkbox" name="technologies[]" value="CakePHP">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">CodeIgniter
                                                    <input type="checkbox" name="technologies[]" value="CodeIgniter">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">MODX
                                                    <input type="checkbox" name="technologies[]" value="MODX">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">IoT
                                                    <input type="checkbox" name="technologies[]" value="IoT">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">AI
                                                    <input type="checkbox" name="technologies[]" value="AI">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Python
                                                    <input type="checkbox" name="technologies[]" value="Python">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Express.js
                                                    <input type="checkbox" name="technologies[]" value="Express.js">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Meteor
                                                    <input type="checkbox" name="technologies[]" value="Meteor">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Sails.js
                                                    <input type="checkbox" name="technologies[]" value="Sails.js">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">MongoDB
                                                    <input type="checkbox" name="technologies[]" value="MongoDB">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Knockout
                                                    <input type="checkbox" name="technologies[]" value="Knockout">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Odoo
                                                    <input type="checkbox" name="technologies[]" value="Odoo">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">React
                                                    <input type="checkbox" name="technologies[]" value="React">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Ember.js
                                                    <input type="checkbox" name="technologies[]" value="Ember.js">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Vue.js
                                                    <input type="checkbox" name="technologies[]" value="Vue.js">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">jQuery
                                                    <input type="checkbox" name="technologies[]" value="jQuery">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">AJAX
                                                    <input type="checkbox" name="technologies[]" value="AJAX">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Redux
                                                    <input type="checkbox" name="technologies[]" value="Redux">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Node
                                                    <input type="checkbox" name="technologies[]" value="Node">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Backbone.js
                                                    <input type="checkbox" name="technologies[]" value="Backbone.js">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">VB.NET
                                                    <input type="checkbox" name="technologies[]" value="VB.NET">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">SQL
                                                    <input type="checkbox" name="technologies[]" value="SQL">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Visual Studio
                                                    <input type="checkbox" name="technologies[]" value="Visual Studio">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">KenticoCMS
                                                    <input type="checkbox" name="technologies[]" value="KenticoCMS">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Umbraco
                                                    <input type="checkbox" name="technologies[]" value="Umbraco">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Database
                                                    <input type="checkbox" name="technologies[]" value="Database">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields ">
                                                <label class="containerChk">Machine Learning
                                                    <input type="checkbox" name="technologies[]" value="Database">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                        </div>

                                        <div class="button-row d-flex mt-4">
                                            <button class="btn js-btn-prev" type="button" title="Prev">Previous</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel step_3" data-animation="scaleIn">
                                    <h3 class="multisteps-form__title">How quickly do you want to start?</h3>
                                    <div class="multisteps-form__content">
                                        <div class="forminputs">
                                            <span class="formfields">
                                                <label class="containerSb ">8 hours
                                                    <input type="radio" checked name="hours" value="8 hours">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields">
                                                <label class="containerSb ">24 hours
                                                    <input type="radio" name="hours" value="24 hours">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields">
                                                <label class="containerSb ">1 week
                                                    <input type="radio" name="hours" value="1 week">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                            <span class="formfields">
                                                <label class="containerSb ">Later
                                                    <input type="radio" name="hours" value="Later">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </span>
                                        </div>

                                        <div class="button-row d-flex mt-4 col-12">
                                            <button class="btn js-btn-prev" type="button" title="Prev">Previous</button>
                                            <button class="btn btn-primary ml-auto js-btn-next" type="button"
                                                title="Next">Next</button>
                                        </div>

                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="multisteps-form__panel final_step" data-animation="scaleIn">
                                    <div class="multisteps-form__content">
                                        <div class="laststep">
                                            <div class="laststep-content">
                                                <div class="animateImg pt-5 mt-2">
                                                    <p class="m-0"><img class="detectWebp" width="275" height="228"
                                                            src="assets/images/offer.svg"> </p>
                                                </div>
                                                <h2 class="font-weight-bold pt-2 red h2">Surprise Deal !!</h2>
                                                <h5 class="defaultTxt font-weight-medium ">Get a <strong> 10%
                                                        discount</strong> on your first invoice. Limited-period offer
                                                </h5>
                                                <div class="claime">
                                                    34 Claimed
                                                </div>
                                                <p class="text-right red pt-2 m-0"> <strong>only 16 left </strong></p>
                                            </div>
                                            <div class="laststep-form">
                                                <?php get_cform($thankyou = 'it-service-thank-you', $cta = 'Hire Your Programmer'); ?>
                                            </div>
                                        </div>
                                        <!-- <div class="button-row d-flex mt-4">
                                            <button class="btn js-btn-prev" type="button" title="Prev">Previous</button>
                                            <button class="btn btn-success ml-auto" type="button" title="Send">Send</button>
                                        </div> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Steps end here -->

    <!-- Collaboration start here -->
    <div class="collaboration">
        <div class="container">
            <div class="sechead">
                <h2>Collaboration Multiplies</h2>
                <h4>VE’s <span>500 Video Testimonials</span> Attest to it</h4>
            </div>
            <div class="owl-carousel collboration-slider">
                <div class="item">
                    <div class="coll-box">
                        <div class="coll-content">
                            <h4>Scrum Meetings</h4>
                            <p>Work closely with your programmers, schedule them to work during your working hours, and
                                have intense brainstorming sessions daily.</p>
                        </div>
                        <div class="coll-img">
                            <img src="assets/images/scrum-meetings.jpg" width="728" height="469" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="coll-box">
                        <div class="coll-content">
                            <h4>On-site Visits</h4>
                            <p>200+ clients from all over the world have visited the VE offices to closely collaborate
                                with their teams, share live feedback, and hire additional resources. </p>
                        </div>
                        <div class="coll-img">
                            <img src="assets/images/on-site-visite.jpg" width="728" height="469" alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="coll-box">
                        <div class="coll-content">
                            <h4>Complete Ownership</h4>
                            <p>By keeping close tabs on your project and budget daily, you retain total control over
                                deadlines and budgets.</p>
                        </div>
                        <div class="coll-img">
                            <img src="assets/images/ownership.jpg" width="728" height="469" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Collaboration end here -->

    <div class="formbg">
        <div class="container">
            <div class="formbox">
                <div class="formleft">
                    <div class="sechead">
                        <h2>Experience the Real <br> Difference</h2>
                        <h4>Try VE’s <span>40-Hour No-Cost</span> Resource</h4>
                    </div>
                    <div class="form-points">
                        <ul>
                            <li>
                                <i class="icons no-credit"></i>
                                <span>No Credit Card / no payment</span>
                            </li>
                            <li>
                                <i class="icons keep-all-work"></i>
                                <span>Keep all the work, it’s yours</span>
                            </li>
                            <li>
                                <i class="icons cancel-anytime"></i>
                                <span>Cancel anytime</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="formtamp" id="form">
                    <?php get_cform($thankyou = 'it-service-thank-you', $cta = 'Hire Your Programmer'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- clients start here -->
    <section class="clients_section">
        <div class="container">
            <div class="text-center">
                <h2>3000+ Global Companies Across 4 Continents</h2>
                <h4><span>Celebrated Success </span> with their VE Programmers </h4>
            </div>
            <div class="clients_slider owl-carousel">
                <div class="item">
                    <div class="clients_wrapper">
                        <div class="flexbox align_items_center">
                            <div class="flex-5">
                                <div class="clients_img">
                                    <img src="assets/images/hobb-hess.jpg" width="436" height="490" alt="">
                                </div>
                            </div>
                            <div class="flex-7">
                                <div class="clients_article">
                                    <i class="icons quote-icon"></i>
                                    <p>What we liked the most was the ability to start the project immediately with
                                        experienced programmers.</p>
                                    <h5 class="clients_name">Bob Hess</h5>
                                    <div class="designation">
                                        <span>Founder, Paragon Print Systems, US</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="clients_wrapper">
                        <div class="flexbox align_items_center">
                            <div class="flex-5">
                                <div class="clients_img">
                                    <img src="assets/images/blake-morgan.png" width="436" height="490" alt="">
                                </div>
                            </div>
                            <div class="flex-7">
                                <div class="clients_article">
                                    <i class="icons quote-icon"></i>
                                    <p>Feels like we are working with someone who’s right next to us.</p>
                                    <h5 class="clients_name">Blake Morgan</h5>
                                    <div class="designation">
                                        <span>Optimize Overseas LLC, US</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="clients_wrapper">
                        <div class="flexbox align_items_center">
                            <div class="flex-5">
                                <div class="clients_img">
                                    <img src="assets/images/risa-liu.png" width="436" height="490" alt="">
                                </div>
                            </div>
                            <div class="flex-7">
                                <div class="clients_article">
                                    <i class="icons quote-icon"></i>
                                    <p>My VE has helped us expand our business & gain potential clients.</p>
                                    <h5 class="clients_name">Risa Liu</h5>
                                    <div class="designation">
                                        <span>Founder, Paperdino</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- clients end here -->

    <!-- success start here -->
    <section class="success_section">
        <div class="container">
            <div class="success_wrapper">
                <div class="flexbox align_items_center">
                    <div class="flex-md-8">
                        <div class="success_article">
                            <h2>Your Success. Our Commitment.</h2>
                            <h4>With VE, Your Project is Done <span> Fast, Right, On Time </span></h4>
                            <button class="btn-primary smoothscroll" data-target="#form">Hire Your Programmer</button>
                        </div>
                    </div>
                    <div class="flex-md-4">
                        <div class="success_img_wrapper">
                            <img src="assets/images/footer-vector.png" alt="" width="643" height="651">
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>
    <!-- success end here -->


    <?php footer_seo_part(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
    var sync1 = $(".slider");
    var sync2 = $(".navigation-thumbs");

    var thumbnailItemClass = '.owl-item';

    var slides = sync1.owlCarousel({
        video: true,
        // startPosition: 12,
        items: 1,
        loop: true,
        autoplay: false,
        autoplayTimeout: 6000,
        autoplayHoverPause: false,
        nav: true,
        navText: ["<i class='icons left-arrow-icon'></i>", "<i class='icons left-arrow-icon'></i>"],
        dots: false,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            576: {
                items: 1,
                nav: true,
            }
        }
    }).on('changed.owl.carousel', syncPosition);

    function syncPosition(el) {
        $owl_slider = $(this).data('owl.carousel');
        var loop = $owl_slider.options.loop;

        if (loop) {
            var count = el.item.count - 1;
            var current = Math.round(el.item.index - (el.item.count / 2) - .5);
            if (current < 0) {
                current = count;
            }
            if (current > count) {
                current = 0;
            }
        } else {
            var current = el.item.index;
        }

        var owl_thumbnail = sync2.data('owl.carousel');
        var itemClass = "." + owl_thumbnail.options.itemClass;


        var thumbnailCurrentItem = sync2
            .find(itemClass)
            .removeClass("synced")
            .eq(current);

        thumbnailCurrentItem.addClass('synced');

        if (!thumbnailCurrentItem.hasClass('active')) {
            var duration = 300;
            sync2.trigger('to.owl.carousel', [current, duration, true]);
        }
    }
    var thumbs = sync2.owlCarousel({
            // startPosition: 12,
            items: 8,
            loop: false,
            autoplay: false,
            nav: false,
            dots: false,
            onInitialized: function(e) {
                var thumbnailCurrentItem = $(e.target).find(thumbnailItemClass).eq(this._current);
                thumbnailCurrentItem.addClass('synced');
            },
        })
        .on('click', thumbnailItemClass, function(e) {
            e.preventDefault();
            var duration = 300;
            var itemIndex = $(e.target).parents(thumbnailItemClass).index();
            sync1.trigger('to.owl.carousel', [itemIndex, duration, true]);
        }).on("changed.owl.carousel", function(el) {
            var number = el.item.index;
            $owl_slider = sync1.data('owl.carousel');
            $owl_slider.to(number, 100, true);
        });
    </script>
    <script>
    // Header fixed on scroll start 
    window.onscroll = function() {
        myFunction()
    };
    var header = document.getElementById("mainheader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("fixed-top-menu");

        } else {
            header.classList.remove("fixed-top-menu");
        }
    }

    function toggleDropdown() {
        $("#dropdown").toggle();
        $('.dropdownoverlay').addClass('active');
    }


    /////////////////////////////////////////////////////////////////////
    ///////////////////////// STEPS JS START HERE////////////////////////
    /////////////////////////////////////////////////////////////////////
    //DOM elements
    const DOMstrings = {
        stepsBtnClass: 'multisteps-form__progress-btn',
        stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
        stepsBar: document.querySelector('.multisteps-form__progress'),
        stepsForm: document.querySelector('.multisteps-form__form'),
        stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
        stepFormPanelClass: 'multisteps-form__panel',
        stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
        stepPrevBtnClass: 'js-btn-prev',
        stepNextBtnClass: 'js-btn-next'
    };

    //remove class from a set of items
    const removeClasses = (elemSet, className) => {

        elemSet.forEach(elem => {

            elem.classList.remove(className);

        });

    };

    //return exect parent node of the element
    const findParent = (elem, parentClass) => {

        let currentNode = elem;

        while (!(currentNode.classList.contains(parentClass))) {
            currentNode = currentNode.parentNode;
        }

        return currentNode;

    };

    //get active button step number
    const getActiveStep = elem => {
        return Array.from(DOMstrings.stepsBtns).indexOf(elem);
    };

    //set all steps before clicked (and clicked too) to active
    const setActiveStep = (activeStepNum) => {

        //remove active state from all the state
        removeClasses(DOMstrings.stepsBtns, 'js-active');

        //set picked items to active
        DOMstrings.stepsBtns.forEach((elem, index) => {

            if (index <= (activeStepNum)) {
                elem.classList.add('js-active');
            }

        });
    };

    //get active panel
    const getActivePanel = () => {

        let activePanel;

        DOMstrings.stepFormPanels.forEach(elem => {

            if (elem.classList.contains('js-active')) {

                activePanel = elem;

            }

        });

        return activePanel;

    };

    //open active panel (and close unactive panels)
    const setActivePanel = activePanelNum => {

        //remove active class from all the panels
        removeClasses(DOMstrings.stepFormPanels, 'js-active');

        //show active panel
        DOMstrings.stepFormPanels.forEach((elem, index) => {
            if (index === (activePanelNum)) {

                elem.classList.add('js-active');

                // setFormHeight(elem);

            }
        })

    };

    // //set form height equal to current panel height
    // const formHeight = (activePanel) => {

    //     const activePanelHeight = activePanel.offsetHeight;

    //     DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

    // };

    // const setFormHeight = () => {
    //     const activePanel = getActivePanel();

    //     formHeight(activePanel);
    // }

    //STEPS BAR CLICK FUNCTION
    DOMstrings.stepsBar.addEventListener('click', e => {

        //check if click target is a step button
        const eventTarget = e.target;

        if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
            return;
        }

        //get active button step number
        const activeStep = getActiveStep(eventTarget);

        //set all steps before clicked (and clicked too) to active
        setActiveStep(activeStep);

        //open active panel
        setActivePanel(activeStep);
    });

    //PREV/NEXT BTNS CLICK
    DOMstrings.stepsForm.addEventListener('click', e => {

        const eventTarget = e.target;

        //check if we clicked on `PREV` or NEXT` buttons
        if (!((eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) || (eventTarget.classList
                .contains(`${DOMstrings.stepNextBtnClass}`)))) {
            return;
        }

        //find active panel
        const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

        let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

        //set active step and active panel onclick
        if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
            activePanelNum--;

        } else {

            activePanelNum++;

        }

        setActiveStep(activePanelNum);
        setActivePanel(activePanelNum);

    });


    //changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

    const setAnimationType = (newType) => {
        DOMstrings.stepFormPanels.forEach(elem => {
            elem.dataset.animation = newType;
        })
    };

    $(document).ready(function() {
        $('.smoothscroll').click(function() {
            var to = $(this).attr('data-target');
            $('html,body').animate({
                    scrollTop: $(to).offset().top - 20
                },
                'slow');
            return false;
        });

        $('.dropdownoverlay').click(function() {
            $(this).removeClass('active');
            $(".dropdown-menu").toggle();
        });

        $('.collboration-slider').owlCarousel({
            loop: true,
            margin: 10,
            items: 1,
            nav: true,
            dots: false,
            navText: ["<i class='icons left-arrow-icon'></i>", "<i class='icons left-arrow-icon'></i>"]
        });

        $(".clients_slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },

                1000: {
                    items: 1,
                },
            },
        });

        $('.smoothscroll').click(function() {
            // evt.preventDefault();
            var to = $(this).attr('data-target');

            $('html,body').animate({
                    scrollTop: $(to).offset().top - 20
                },
                'slow');
            return false;
        });
    });
    </script>
</body>

</html>