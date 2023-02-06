<?php
require_once('../lib/helper.php');
header_seo_part('Hire Outsource to India');
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500;700&display=swap" rel="stylesheet">

<style>
    <?php include("assets/css/style.min.css");
    ?>
</style>
</head>

<body>
    <?php header_navs($white = false); ?>
    <!-- Header end -->


    <div class="banner text-center">
        <div class="container">
            <div class="banner-con">
                <h1>Philippines is Coming of Age <br>
                    But, <span class="green">India</span> is the <span>Pinnacle of Outsourcing</span>
                </h1>
                <button class="smoothscroll" data-target="#form">Outsource to India</button>
            </div>
            <div class="banner-img">
                <img src="assets/images/banner-img.png" width="1325" height="725" alt="" srcset="">
            </div>
        </div>
    </div>

    <div class="trust-india text-center">
        <div class="container">
            <div class="sechead">
                <h2>Half the Fortune 500 Companies <span>Trust India</span> </h2>
                <h4>Here Is Why</h4>
            </div>
            <div class="flagpart text-center">
                <div class="flag-row">
                    <div class="flag-item">
                        <img src="assets/images/flag-india.png" width="95" height="160" alt="" srcset="">
                    </div>
                    <div class="flag-item pt-50">
                        <b>India vs Phillipines</b>
                    </div>
                    <div class="flag-item">
                        <img src="assets/images/flag-phillipines.png" width="95" height="160" alt="" srcset="">
                    </div>
                </div>
                <div class="flag-row">
                    <div class="flag-item">
                        <b>1,058</b>
                    </div>
                    <div class="flag-item">Innovation [Approved Patents]</div>
                    <div class="flag-item">
                        <b>476</b>
                    </div>
                </div>
                <div class="flag-row">
                    <div class="flag-item">
                        <b>65,861 </b>
                    </div>
                    <div class="flag-item">Number of Start-Ups</div>
                    <div class="flag-item">
                        <b>700</b>
                    </div>
                </div>
                <div class="flag-row">
                    <div class="flag-item">
                        <b>Very stable</b>
                    </div>
                    <div class="flag-item">Geographical Stability</div>
                    <div class="flag-item">
                        <b>Prone to natural disasters</b>
                    </div>
                </div>
                <div class="flag-row">
                    <div class="flag-item">
                        <b>Global R&D centres</b>
                    </div>
                    <div class="flag-item">Strengths</div>
                    <div class="flag-item">
                        <b>Mostly BPO</b>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services section start here -->
    <section class="service">
        <div class="container">
            <div class="sechead text-center">
                <h2> <span>There’s No Gap</span> that VE Can't Bridge
                </h2>
                <h4>
                    Wide-Ranging Solutions Across 150+ Domains
                </h4>
            </div>
            <div class="service_container">
                <ul class="service_tabs">
                    <li onclick="serviceEventListner(this,'it')" class="active">
                        <i class="icons it-services-icon"></i>
                        <h5>IT <br> Services</h5>
                    </li>
                    <li onclick="serviceEventListner(this,'web-development')">
                        <i class="icons web-development-icon"></i>
                        <h5>Development<br> (Web/ App)</h5>
                    </li>
                    <li onclick="serviceEventListner(this,'virtual-assistance')">
                        <i class="icons virtual-assistance-icon"></i>
                        <h5>Virtual<br> Assistance</h5>
                    </li>
                    <li onclick="serviceEventListner(this,'digital-marketing')">
                        <i class="icons digital-marketing-icon"></i>
                        <h5>Digital<br> Marketing</h5>
                    </li>
                    <li onclick="serviceEventListner(this,'finance-accounts')">
                        <i class="icons finance-accounts-icon"></i>
                        <h5>Finance &<br> Accounts</h5>
                    </li>
                    <li onclick="serviceEventListner(this,'engineerning-architecture')">
                        <i class="icons engineerning-architecture-icon"></i>
                        <h5>Engineerning & <br> Architecture</h5>
                    </li>
                    <li onclick="serviceEventListner(this,'multimedia-animation')">
                        <i class="icons multimedia-animatio-icon"></i>
                        <h5>Multimedia & <br>Animation</h5>
                    </li>
                    <li onclick="serviceEventListner(this,'hr-recruitment')">
                        <i class="icons hr-recruitment-icon"></i>
                        <h5>HR & <br>Recruitment</h5>
                    </li>
                </ul>
                <div class="service_tab_content">
                    <div class="service_tab_content_inner" id="service-it" style="display: flex">
                        <div class="flexbox">
                            <div class="flex-5">
                                <h5>IT Services</h5>
                                <p>Your business plus our caliber is a perfect match. Get custom IT solutions that
                                    mirror your business</p>
                                <button class="btn-outline-primary open_form_popup" type="button">Get Started
                                    <div class="popup_content">
                                        <ul class="features_list">
                                            <h4 class="first_heading">IT Services </h4>
                                            <li>Get access to shareable blogs, articles, white papers, and eBooks </li>
                                            <li>Build compelling brand stories and ROI-driven customer experiences </li>
                                            <li>Fire up your web presence with effective content marketing strategies
                                            </li>
                                        </ul>
                                        <ul class="features_list">
                                            <h4>Outsource to VE & Enjoy</h4>
                                            <li>No-obligation Free 1-Week Trial </li>
                                            <li>NDA & Full Ownership of Work </li>
                                            <li>100% Money Back Guarantee </li>
                                        </ul>
                                    </div>
                                </button>
                            </div>
                            <div class="flex-7">
                                <img src="assets/images/it-services.jpg" width="590" height="450" alt="Outsource to India">
                            </div>
                        </div>
                    </div>

                    <div class="service_tab_content_inner" id="service-web-development">
                        <div class="flexbox">
                            <div class="flex-5">
                                <h5>App Development</h5>
                                <p>Fast, intuitive applications are now just a click away. Develop custom apps
                                    compatible with all operating systems, including iOS, Android, and Windows</p>
                                <button class="btn-outline-primary open_form_popup" type="button">Get Started
                                    <div class="popup_content">
                                        <ul class="features_list">
                                            <h4 class="first_heading">App Development </h4>
                                            <li>Get access to shareable blogs, articles, white papers, and eBooks </li>
                                            <li>Build compelling brand stories and ROI-driven customer experiences </li>
                                            <li>Fire up your web presence with effective content marketing strategies
                                            </li>
                                        </ul>
                                        <ul class="features_list">
                                            <h4>Outsource to VE & Enjoy</h4>
                                            <li>No-obligation Free 1-Week Trial </li>
                                            <li>NDA & Full Ownership of Work </li>
                                            <li>100% Money Back Guarantee </li>
                                        </ul>
                                    </div>
                                </button>
                            </div>
                            <div class="flex-7">
                                <img src="assets/images/app-development.jpg" width="590" height="450" alt="Outsource to India">
                            </div>
                        </div>
                    </div>

                    <div class="service_tab_content_inner" id="service-virtual-assistance">
                        <div class="flexbox">
                            <div class="flex-5">
                                <h5>Virtual Assistants</h5>
                                <p>Delegate your daily distractions with our VAs while you concentrate on your business
                                    strategies.</p>
                                <button class="btn-outline-primary open_form_popup" type="button">Get Started
                                    <div class="popup_content">
                                        <ul class="features_list">
                                            <h4 class="first_heading">Virtual Assistants </h4>
                                            <li>Get access to shareable blogs, articles, white papers, and eBooks </li>
                                            <li>Build compelling brand stories and ROI-driven customer experiences </li>
                                            <li>Fire up your web presence with effective content marketing strategies
                                            </li>
                                        </ul>
                                        <ul class="features_list">
                                            <h4>Outsource to VE & Enjoy</h4>
                                            <li>No-obligation Free 1-Week Trial </li>
                                            <li>NDA & Full Ownership of Work </li>
                                            <li>100% Money Back Guarantee </li>
                                        </ul>
                                    </div>
                                </button>
                            </div>
                            <div class="flex-7">
                                <img src="assets/images/virtual-assistants.jpg" width="590" height="450" alt="Outsource to India">
                            </div>
                        </div>
                    </div>

                    <div class="service_tab_content_inner" id="service-digital-marketing">
                        <div class="flexbox">
                            <div class="flex-5">
                                <h5>Digital Marketing</h5>
                                <p>Skyrocket your ROI with our digital marketing experts. Convert more, spend less with
                                    VE’s marketing genies.</p>
                                <button class="btn-outline-primary open_form_popup" type="button">Get Started
                                    <div class="popup_content">
                                        <ul class="features_list">
                                            <h4 class="first_heading">Digital Marketing </h4>
                                            <li>Get access to shareable blogs, articles, white papers, and eBooks </li>
                                            <li>Build compelling brand stories and ROI-driven customer experiences </li>
                                            <li>Fire up your web presence with effective content marketing strategies
                                            </li>
                                        </ul>
                                        <ul class="features_list">
                                            <h4>Outsource to VE & Enjoy</h4>
                                            <li>No-obligation Free 1-Week Trial </li>
                                            <li>NDA & Full Ownership of Work </li>
                                            <li>100% Money Back Guarantee </li>
                                        </ul>
                                    </div>
                                </button>
                            </div>
                            <div class="flex-7">
                                <img src="assets/images/digital-marketing.jpg" width="590" height="450" alt="Outsource to India">
                            </div>
                        </div>
                    </div>

                    <div class="service_tab_content_inner" id="service-finance-accounts">
                        <div class="flexbox">
                            <div class="flex-5">
                                <h5>Finance & Accounts</h5>
                                <p>Ensure smooth business scalability with balanced expenses and massive cost savings
                                    with our team of bookkeepers, payroll experts, and tax pros.</p>
                                <button class="btn-outline-primary open_form_popup" type="button">Get Started
                                    <div class="popup_content">
                                        <ul class="features_list">
                                            <h4 class="first_heading">Finance & Accounts </h4>
                                            <li>Get access to shareable blogs, articles, white papers, and eBooks </li>
                                            <li>Build compelling brand stories and ROI-driven customer experiences </li>
                                            <li>Fire up your web presence with effective content marketing strategies
                                            </li>
                                        </ul>
                                        <ul class="features_list">
                                            <h4>Outsource to VE & Enjoy</h4>
                                            <li>No-obligation Free 1-Week Trial </li>
                                            <li>NDA & Full Ownership of Work </li>
                                            <li>100% Money Back Guarantee </li>
                                        </ul>
                                    </div>
                                </button>
                            </div>
                            <div class="flex-7">
                                <img src="assets/images/finance-accounts.jpg" width="590" height="450" alt="Outsource to India">
                            </div>
                        </div>
                    </div>

                    <div class="service_tab_content_inner" id="service-engineerning-architecture">
                        <div class="flexbox">
                            <div class="flex-5">
                                <h5>Engineering & Architecture </h5>
                                <p> Reimagine architectural and engineering solutions by outsourcing your needs to VE.
                                    Get all-inclusive architecture and engineering services.</p>
                                <button class="btn-outline-primary open_form_popup" type="button">Get Started
                                    <div class="popup_content">
                                        <ul class="features_list">
                                            <h4 class="first_heading">Engineering & Architecture </h4>
                                            <li>Get access to shareable blogs, articles, white papers, and eBooks </li>
                                            <li>Build compelling brand stories and ROI-driven customer experiences </li>
                                            <li>Fire up your web presence with effective content marketing strategies
                                            </li>
                                        </ul>
                                        <ul class="features_list">
                                            <h4>Outsource to VE & Enjoy</h4>
                                            <li>No-obligation Free 1-Week Trial </li>
                                            <li>NDA & Full Ownership of Work </li>
                                            <li>100% Money Back Guarantee </li>
                                        </ul>
                                    </div>
                                </button>
                            </div>
                            <div class="flex-7">
                                <img src="assets/images/engineering-architecture.jpg" width="590" height="450" alt="Outsource to India">
                            </div>
                        </div>
                    </div>

                    <div class="service_tab_content_inner" id="service-multimedia-animation">
                        <div class="flexbox">
                            <div class="flex-5">
                                <h5>Multimedia & Animation </h5>
                                <p> Create stunning and responsive custom 2D and 3D visuals with our creative
                                    professionals who love to think out of the box.</p>
                                <button class="btn-outline-primary open_form_popup" type="button">Get Started
                                    <div class="popup_content">
                                        <ul class="features_list">
                                            <h4 class="first_heading">Multimedia & Animation </h4>
                                            <li>Get access to shareable blogs, articles, white papers, and eBooks </li>
                                            <li>Build compelling brand stories and ROI-driven customer experiences </li>
                                            <li>Fire up your web presence with effective content marketing strategies
                                            </li>
                                        </ul>
                                        <ul class="features_list">
                                            <h4>Outsource to VE & Enjoy</h4>
                                            <li>No-obligation Free 1-Week Trial </li>
                                            <li>NDA & Full Ownership of Work </li>
                                            <li>100% Money Back Guarantee </li>
                                        </ul>
                                    </div>
                                </button>
                            </div>
                            <div class="flex-7">
                                <img src="assets/images/multimedia-animation.jpg" width="590" height="450" alt="Outsource to India">
                            </div>
                        </div>
                    </div>

                    <div class="service_tab_content_inner" id="service-hr-recruitment">
                        <div class="flexbox">
                            <div class="flex-5">
                                <h5>Content Writing </h5>
                                <p> No matter which kind of business you are in, content is king. Bring organic traffic
                                    to your website with our team of experienced writers.</p>
                                <button class="btn-outline-primary" type="button">Get Started
                                    <div class="popup_content">
                                        <ul class="features_list">
                                            <h4 class="first_heading">Content Marketing </h4>
                                            <li>Get access to shareable blogs, articles, white papers, and eBooks </li>
                                            <li>Build compelling brand stories and ROI-driven customer experiences </li>
                                            <li>Fire up your web presence with effective content marketing strategies
                                            </li>
                                        </ul>
                                        <ul class="features_list">
                                            <h4>Outsource to VE & Enjoy</h4>
                                            <li>No-obligation Free 1-Week Trial </li>
                                            <li>NDA & Full Ownership of Work </li>
                                            <li>100% Money Back Guarantee </li>
                                        </ul>
                                    </div>
                                </button>
                            </div>
                            <div class="flex-7">
                                <img src="assets/images/content-writing.jpg" width="590" height="450" alt="Outsource to India">
                            </div>
                        </div>
                    </div>





                    <!-- <div class="service_tab_content_inner" id="service-it">
                        <div class="flexbox">
                            <div class="flex-5">
                                <h5>Legal Process Outsourcing</h5>
                                <p>Don’t let your caseload eat away your precious time? Save time and money with our in-house team of highly qualified law experts.</p>
                                <button class="btn-outline-primary" type="button">Get Started</button>
                            </div>
                            <div class="flex-7">
                                <img src="assets/images/it-services.jpg" width="590" height="450" alt="Outsource to India">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section> <!-- Services section end here -->

    <!-- Resource section start here -->
    <section class="resource">
        <div class="container">
            <div class="sechead text-center">
                <h2> <span>Capitalize</span> On Every Business Opportunity</h2>
                <h4>With 1500+ Strong Global Talent Pool</h4>
            </div>
            <div class="inner_container">
                <div class="flexbox">
                    <div class="flex-4">
                        <div class="resource_card">
                            <div class="resource_name">
                                <h2>Nilanjana Das</h2>
                                <small>Sr.Digital Marketer</small>
                            </div>
                            <img src="assets/images/resource-1.png" width="390" height="460" alt="">
                            <div class="resource_content">
                                <div class="experience_row">
                                    <div class="flexbox">
                                        <div class="flex-6">
                                            <h3>12+</h3>
                                            <h5>Years of Work Experience</h5>
                                        </div>
                                        <div class="flex-6 project_completed">
                                            <h3>45+</h3>
                                            <h5>Projects Completed</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills_row">
                                    <div class="flexbox">
                                        <div class="flex-6">
                                            <h5>Skills</h5>
                                            <p>Brand Management | SMM | B2B | B2C Marketing | Email Marketing</p>
                                        </div>
                                        <div class="flex-6">
                                            <button class="btn-primary resource_profile_popup" type="button">Hire Nilanjana</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-4">
                        <div class="resource_card second_resource">
                            <div class="resource_name">
                                <h2>Yash Sharma</h2>
                                <small>Sr. Web Developer</small>
                            </div>
                            <img src="assets/images/resource-2.png" width="390" height="460" alt="">
                            <div class="resource_content">
                                <div class="experience_row">
                                    <div class="flexbox">
                                        <div class="flex-6">
                                            <h3>9+</h3>
                                            <h5>Years of Work Experience</h5>
                                        </div>
                                        <div class="flex-6 project_completed ">
                                            <h3>39+</h3>
                                            <h5>Projects Completed</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills_row">
                                    <div class="flexbox">
                                        <div class="flex-6">
                                            <h5>Skills</h5>
                                            <p>C# | ASP.NET | JQuery & Angular 2 | SQL Server | HTML |PHP</p>
                                        </div>
                                        <div class="flex-6">
                                            <button class="btn-primary resource_profile_popup" type="button">Hire Yash</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-4">
                        <div class="resource_card third_resource">
                            <div class="resource_name">
                                <h2>Priyank Mittal</h2>
                                <small>Data Entry Expert</small>
                            </div>
                            <img src="assets/images/resource-3.png" width="390" height="460" alt="">
                            <div class="resource_content">
                                <div class="experience_row">
                                    <div class="flexbox">
                                        <div class="flex-6">
                                            <h3>12+</h3>
                                            <h5>Years of Work Experience</h5>
                                        </div>
                                        <div class="flex-6 project_completed">
                                            <h3>45+</h3>
                                            <h5>Projects Completed</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="skills_row">
                                    <div class="flexbox">
                                        <div class="flex-6">
                                            <h5>Skills</h5>
                                            <p>Database Building | Data Conversions | Data Extraction | Data Cleaning</p>
                                        </div>
                                        <div class="flex-6">
                                            <button class="btn-primary resource_profile_popup" type="button">Hire Priyank</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- Resource section end here -->

    <!-- Form Section Start -->
    <section class="get_trail_section" id="form">
        <div class="container">
            <div class="get_trail_section_wrapper flexbox blur_circle ">
                <div class="flex1 get_started_left">
                    <h2> <span>Your Business</span> isn’t a Guessing Game </h2>
                    <h4>Make an Informed Choice </h4>
                    <ul class="get_listing">
                        <li class="flexbox checkbtnfree active ">
                            <div class="listing_text flex1">
                                <h3>Free 1-Week Trial</h3>
                                <p>No card details, no </p>
                            </div>
                            <div class="select_btn flexbox flex1">
                                <input id="radio-1" class="radio-custom" name="radio-group" type="radio">
                                <label for="radio-1" class="radio-custom-label"></label>
                            </div>
                        </li>
                        <li class="flexbox checkbtn">
                            <div class="listing_text flex1">
                                <h3>Ad Hoc</h3>
                                <p>60 hours per month</p>
                            </div>
                            <div class="select_btn flexbox flex1">
                                <input id="radio-2" class="radio-custom" name="radio-group" type="radio">
                                <label for="radio-2" class="radio-custom-label"></label>
                            </div>
                        </li>
                        <li class="flexbox checkbtn">
                            <div class="listing_text flex1">
                                <h3>Part-time</h3>
                                <p>4 hours per day, 5 days a week</p>
                            </div>
                            <div class="select_btn flexbox flex1">
                                <input id="radio-3" class="radio-custom" name="radio-group" type="radio">
                                <label for="radio-3" class="radio-custom-label"></label>
                            </div>
                        </li>
                        <li class="flexbox checkbtn">
                            <div class="listing_text flex1">
                                <h3>Full-time</h3>
                                <p>8 hours per day, 5 days a week</p>

                            </div>
                            <div class="select_btn flexbox flex1">
                                <input id="radio-4" class="radio-custom" name="radio-group" type="radio">
                                <label for="radio-4" class="radio-custom-label"></label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="flex1 get_started_right blur_circle ">
                    <div class="get_started_form ">
                        <?php get_cform($thankyou = 'it-service-thank-you', $cta = 'Get Free 1-Week Trial'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Form Section End -->

    <!-- benefits start here -->
    <section class="benifits_section ">
        <div class="container ">
            <div class="sechead text-center">
                <h2> <strong>What Does the <span>World See</span> in Us?</strong> </h2>
                <h4>That Makes Us the #1 Outsourcing Partner</h4>
            </div>
            <div class="card_container">
                <div class="">
                    <div class="benefits_card text-center">
                        <img class="" src="assets\images\recruitment.png" width="100" height="100" alt="recruitment">
                        <h5>Bespoke Recruitment</h5>
                        <p>We can headhunt anyone for you, in any domain</p>
                    </div>
                </div>
                <div class="">
                    <div class="benefits_card text-center project_stability">
                        <img src="assets\images\team.png" width="100" height="100" alt="team">
                        <h5>Project Stability</h5>
                        <p>Build your very own offshore team but retain all control
                        </p>
                    </div>
                </div>
                <div class="">
                    <div class="benefits_card text-center in_house_team">
                        <img src="assets\images\quick-stability.png" width="100" height="100" alt="quick-stability">
                        <h5>Large In-House Team</h5>
                        <p>Go from 1 resource to 5 in just a week, with an email.</p>
                    </div>
                </div>
                <div class="">
                    <div class="benefits_card text-center ">
                        <img src="assets\images\zero-overheads.png" width="100" height="100" alt="zero-overheads">
                        <h5>Western Firm Experience</h5>
                        <p>Pay only for your resource. The rest is on us.</p>
                    </div>
                </div>
            </div>
        </div>

    </section> <!-- benefits end here -->

    <!-- testimonial start here -->
    <section class="testimonial_section">
        <div class="container">
            <div class="sechead text-center">
                <h2> <strong>VE is to India, What <span>India is to the World </span></strong> </h2>
                <h4>The Outsourcing Favorite</h4>
            </div>

            <div class="clients_slider owl-carousel">
                <div class="item text-center">
                    <img src="assets\images\client-1.png" class="client-img" alt="Joel Contreras">
                    <div class="client-content">
                        <h5>Large talent pool</h5>
                        <p>Microsoft and Apple have tapped India’s vast talent pool. It was logical for us to follow the big guys</p>
                        <hr>
                        <p class="client-name">Joel Contreras </p>
                        <p class="address"> Cesco Linguistic Services, USA</p>
                    </div>
                </div>

                <div class="item text-center">
                    <img src="assets\images\Blake-Morgan.png" class="client-img" width="75" height="75" alt="Blake-Morgan">
                    <div class="client-content">
                        <h5>High-end caliber</h5>
                        <p>Between India and the Philippines, India was the quality play.</p>
                        <hr>
                        <p class="client-name">Blake Morgan </p>
                        <p class="address"> Cesco Linguistic Services, USA</p>
                    </div>
                </div>

                <div class="item text-center">
                    <img src="assets\images\Malcolm.png" class="client-img" width="75" height="75" alt="Malcolm">
                    <div class="client-content">
                        <h5>Vast Expertise</h5>
                        <p>India had the skillset available in abundance.</p>
                        <hr>
                        <p class="client-name">Malcolm Paice </p>
                        <p class="address"> COO, Keystone Group, UK</p>
                        <div>
                        </div>
                    </div>


                </div>


    </section>
    <!-- testimonial end here -->

    <!-- last section start here -->
    <section class="footer_section">
        <div class="container footer-bg">
            <div class="footer_box text-center">
                <h2> <strong>Working with VE is Like <br />
                        Having a <span>Rent-free Office in India</span> </strong> </h2>
                <h4>Now It’s Your Turn to Explore the Possibilities</h4>
                <p><a href="#form" class="btn btn-primary">Outsource to India</a></p>

            </div>

        </div>
    </section>


    <?php footer_seo_part(); ?>

    <div class="overlay" id="overlay" style="display:none;"></div>

    <!-- Content Form Popup -->
    <div class="popup" id="contentFormPopup" style="display:none;">
        <div class="popup_wrapper">
            <div class="popup_body">
                <span class="popup_close" onclick="contentFormPopupClose();">x</span>
                <h3>Looking to Hire an Internet Marketer?</h3>
                <div class="flexbox">
                    <div class="flex-6">
                        <div class="features_append_list">

                        </div>
                    </div>
                    <div class="flex-6">
                        <?php get_cform($thankyou = 'thankyou', $cta = 'Hire Internet Marketer'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resource Form Popup -->
    <div class="popup" id="formPopup" style="display:none;">
        <div class="popup_wrapper">
            <div class="popup_body">
                <span class="popup_close" onclick="formPopupClose();">x</span>
                <h3></h3>
                <?php get_cform($thankyou = 'thankyou', $cta = 'Hire Internet Marketer'); ?>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



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

        function serviceEventListner(e, id) {
            $('.service_tab_content_inner').css({
                display: 'none'
            });
            $('.service_tabs li').removeClass('active');
            $('#service-' + id).css({
                display: 'flex'
            });
            $(e).addClass('active');
        }

        // Form Popup Close
        function formPopupClose() {
            $("#formPopup").fadeOut();
            // document.getElementsByClassName().style.display = 'block';
            $("#overlay").fadeOut();
            $('body').css({
                overflow: 'auto'
            });
        }

        // Content Form Popup Close
        function contentFormPopupClose() {
            $("#contentFormPopup").fadeOut();
            $('.features_append_list').html(' ');
            $("#overlay").fadeOut();
            $('body').css({
                overflow: 'auto'
            });
        }

        $(document).ready(function() {
            $(".checkbtn").click(function() {
                 var getbtntext = $(this).find('h3').html();
                 $('.checkbtnfree, .checkbtn').removeClass('active');
                 $(this).addClass('active')
                 $('.get_started_form .lp-form-button').html('Hire ' + getbtntext + ' Outsource to India')
             });
             $(".checkbtnfree").click(function() {
                 var getbtntext1 = $(this).find('h3').html();
                 $('.checkbtnfree, .checkbtn').removeClass('active');
                 $(this).addClass('active')
                 $('.get_started_form .lp-form-button').html('Get ' + getbtntext1)
             });
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

            // Resource Popup Open
            $('.resource_profile_popup').on('click', function() {
                var resourceName = $(this).parents('.resource_card').find('h2').html();
                $('#formPopup').find('h3').empty();
                $('#formPopup').find('h3').append("You've Selected " + resourceName);
                $("#formPopup").fadeIn();
                $('body').css({
                    overflow: 'hidden'
                });
                $("#overlay").fadeIn();
            })

            // Content Popup Open
            $('.open_form_popup').on('click', function() {
                var fetauresList = $(this).find('.popup_content').html();
                console.log(fetauresList);
                $(fetauresList).appendTo('.features_append_list');
                $("#contentFormPopup").fadeIn();
                $('body').css({
                    overflow: 'hidden'
                });
                $('.overlay').fadeIn();
            });

            $('.clients_slider').owlCarousel({
                loop: true,
                center: true,
                // autoplay: true,
                // autoplayTimeout: 8500,
                // smartPlay: 450,
                dots: false,
                nav: false,
                margin: 0,
                items: 3,
                responsive: {
                    0: {
                        items: 1
                    },
                    992: {
                        items: 3
                    }
                }

            });
        });
    </script>
</body>

</html>