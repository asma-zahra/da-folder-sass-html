<?php
require_once('../lib/helper.php');
header_seo_part('Hire Mobile App Developers');
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

<style>
<?php include("assets/css/style.min.css");
?>
</style>

</head>

<body>

    <?php header_navs($white = false); ?>

    <!-- Header end -->
    <!-- strategy chart section starts here -->
    <section class="chart-section">
        <div class="container">
            <h2>Our Every App is A <img src="assets\images\j.svg" alt="">ourney</h2>
            <h4>Strategically Made, Swiftly Deployed</h4>
            <div class="journey-chart">
                <img src="assets/images/journey.png" alt="">
            </div>

        </div>
    </section>
    <!-- strategy chart section ends here -->
    <!-- free trial section starts here -->
    <section class="free-trial-section">
        <div class="container">
            <h2>Try Our <img src="assets/images/t.svg" alt="">raining Session Hands-on</h2>
            <h4>And Win a <span>Free Trial</span> </h4>

            <div class="form_slider owl-carousel">
                <div class="question-block item">
                    <h5>A programming environment that has been packaged as an application 1 day</h5>

                    <div class="forminputs">
                        <div class="formfields">
                            <input type="radio" id="1" name="exp" checked>
                            <label for="1">Programming Language</label>
                        </div>
                        <div class="formfields">
                            <input type="radio" id="2" name="exp">
                            <label for="2">Android SDK </label>
                        </div>
                        <div class="formfields">
                            <input type="radio" id="3" name="exp">
                            <label for="3">Virtual Studio </label>
                        </div>
                        <div class="formfields">
                            <input type="radio" id="4" name="exp">
                            <label for="4">Integrated Development Environment</label>
                        </div>
                    </div>
                </div>


                <div class="question-block item">
                    <h5>A programming environment that has been packaged as an application 1 day</h5>

                    <div class="forminputs">
                        <div class="formfields">
                            <input type="radio" id="5" name="exp" checked>
                            <label for="5">Programming Language</label>
                        </div>
                        <div class="formfields">
                            <input type="radio" id="6" name="exp">
                            <label for="6">Android SDK </label>
                        </div>
                        <div class="formfields">
                            <input type="radio" id="7" name="exp">
                            <label for="7">Virtual Studio </label>
                        </div>
                        <div class="formfields">
                            <input type="radio" id="8" name="exp">
                            <label for="8">Integrated Development Environment</label>
                        </div>
                    </div>
                </div>
                <div class="question-block item">
                    <h5>A programming environment that has been packaged as an application 1 day</h5>

                    <div class="forminputs">
                        <div class="formfields">
                            <input type="radio" id="9" name="exp" checked>
                            <label for="9">Programming Language</label>
                        </div>
                        <div class="formfields">
                            <input type="radio" id="10" name="exp">
                            <label for="10">Android SDK </label>
                        </div>
                        <div class="formfields">
                            <input type="radio" id="11" name="exp">
                            <label for="11">Virtual Studio </label>
                        </div>
                        <div class="formfields">
                            <input type="radio" id="12" name="exp">
                            <label for="12">Integrated Development Environment</label>
                        </div>
                    </div>
                </div>
                <!-- slider ends-  -->
            </div>

    </section>

    <!-- free trial section ends here -->

    <!-- form section starts here -->
    <section class="form-section">
        <div class="container">
            <div class="from-wrapper flexbox align-items-center">
                <div class="form-info flex-6">
                    <h2>
                        Create Change.<br> Connect & <img src="assets\images\j.svg" alt="">row.
                    </h2>
                    <h4>App Consultation Worth <span class="cost">$500</span> For<span class="red md-text"> $0</span>
                    </h4>
                    <div class="avatars">
                        <div class="avatar-img">
                            <img src="assets\images\resource-1.png" class="avatars-item" width="104" height="128"
                                alt="">
                        </div>
                        <div class="avatar-img">
                            <img src="assets\images\resource-2.png" class="avatars-item" width="104" height="128"
                                alt="">
                        </div>
                        <div class="avatar-img">
                            <img src="assets\images\resource-3.png" class="avatars-item" width="104" height="128"
                                alt="">
                        </div>
                        <div class="avatar-img">
                            <img src="assets\images\resource-4.png" class="avatars-item" width="104" height="128"
                                alt="">
                        </div>

                    </div>
                    <p class="advice text-center">Get an expert advice within <span class="red">60 secs.</span> </p>

                </div>
                <div class="form flex-6" id="form">
                    <div class="get_started_form">
                        <h3 class="text-center">Share Your Requirement</h3>
                        <?php get_cform($thankyou = 'it-service-thank-you', $cta = 'Get Free 1-Week Trial'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- form section ends here -->

    <section class="last-section">
        <div class="container">
            <div class="cta-section-bg">
                <h2>With VE You Just Don’t <img src="assets/images/m.svg" alt="">ake An App </h2>
                <h4>You Make The World Better One App At A Time</h4>
                <p class="btn"><a href="#" class="btn-primary ">Hire Mobile App Developer</a></p>
                <img src="assets\images\footer-img-one.png" class="footer-img-one" alt="">
                <img src="assets\images\footer-img-two.png" class="footer-img-two" alt="">
                <img src="assets\images\footer-img-three.png" class="footer-img-three" alt="">
                <img src="assets\images\footer-img-four.png" class="footer-img-four" alt="">
            </div>
        </div>

    </section>





    <?php footer_seo_part(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <script>
    // Header fixed on scroll start 
    // window.onscroll = function() {
    //     myFunction()
    // };
    // var header = document.getElementById("mainheader");
    // var sticky = header.offsetTop;

    // function myFunction() {
    //     if (window.pageYOffset > sticky) {
    //         header.classList.add("fixed-top-menu");

    //     } else {
    //         header.classList.remove("fixed-top-menu");
    //     }
    // }

    // function toggleDropdown() {
    //     $("#dropdown").toggle();
    //     $('.dropdownoverlay').addClass('active');
    // }

    // // Form Popup Close
    // function formPopupClose() {
    //     $("#formPopup").fadeOut();
    //     // document.getElementsByClassName().style.display = 'block';
    //     $("#overlay").fadeOut();
    //     $('body').css({
    //         overflow: 'auto'
    //     });
    // }


    $(document).ready(function() {

        $('.smoothscroll').click(function() {
            var to = $(this).attr('data-target');
            $('html,body').animate({
                    scrollTop: $(to).offset().top - 20
                },
                'slow');
            return false;
        });

        $('.resource_profile_popup').on('click', function() {
            var resourceName = $(this).attr('data-content');
            $('#formPopup').find('h3').empty();
            $('#formPopup').find('h3').append("You've Selected " + resourceName);
            $("#formPopup").fadeIn();
            $('body').css({
                overflow: 'hidden'
            });
            $("#overlay").fadeIn();
        })

        $('.dropdownoverlay').click(function() {
            $(this).removeClass('active');
            $(".dropdown-menu").toggle();
        });

        $('.form_slider').owlCarousel({
            loop: true,
            center: true,
            dots: false,
            nav: true,
            navText: ["<div class='icon left-arrow'></div>", "<div class='icon right-arrow'></div>"],
            margin: 0,
            items: 3,
            responsive: {
                0: {
                    items: 1,
                },
                992: {
                    items: 1
                }
            }

        });
        // $('.service-slide').owlCarousel({
        //     loop: true,
        //     center: true,
        //     margin: 0,
        //     items: 1,
        //     nav: true,
        //     dots: true,
        //     dotsData: true,
        //     navText: ["<div class='icon left-arrow'></div>", "<div class='icon right-arrow'></div>"],
        // });

        // $('.clients_slider').owlCarousel({
        //     loop: true,
        //     center: true,
        //     items: 1,
        //     nav: true,
        //     dots: true,
        //     dotsData: true,
        //     navText: ["<div class='icon left-arrow'></div>", "<div class='icon right-arrow'></div>"],
        // });

    });
    </script>
</body>

</html>