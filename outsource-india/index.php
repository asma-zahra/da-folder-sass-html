<?php
require_once('../lib/helper.php');
header_seo_part('Hire Outsource to India');
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

<style>
    <?php include("assets/css/style.min.css");
    ?>
</style>
</head>

<body>
    <?php header_navs($white = false); ?>
    <!-- Header end -->


    <!-- benefits start here -->
    <section class="benifits_section ">
        <div class="container ">
            <div class="text-center">
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
        <div class="">
            <div class="text-center">
                <h2> <strong>VE is to India, What <span>India is to the World </span></strong> </h2>
                <h4>The Outsourcing Favorite</h4>
            </div>

            <div class="clients_slider owl-carousel">
                <div class="item text-center">
                    <img src="assets\images\client-1.png" alt="Joel Contreras">
                    <h5>Large talent pool</h5>
                    <p>Microsoft and Apple have tapped India’s vast talent pool. It<br> was logical for us to follow the big guys</p>
                    <hr>
                    <p class="client-name">Joel Contreras </p>
                    <p class="address"> Cesco Linguistic Services, USA</p>
                </div>

                <div class="item text-center">
                    <img src="assets\images\Blake-Morgan.png" width="75" height="75" alt="Blake-Morgan">

                    <h5>High-end caliber</h5>
                    <p>Between India and the Philippines, India was the quality play.</p>
                    <hr>
                    <p class="client-name">Blake Morgan </p>
                    <p class="address"> Cesco Linguistic Services, USA</p>
                </div>

                <div class="item text-center">
                    <img src="assets\images\Malcolm.png" width="75" height="75" alt="Malcolm">
                    <h5>Vast Expertise</h5>
                    <p>India had the skillset available in abundance.</p>
                    <hr>
                    <p class="client-name">Malcolm Paice </p>
                    <p class="address"> COO, Keystone Group, UK</p>
                </div>
            </div>


        </div>


    </section>


    <!-- testimonial end here -->


    <!-- last section start here -->
    <section class="footer_section flexbox justify-content-center">
        <div class="container footer-bg">
            <div class="footer_box text-center">
                <h2> <strong>Working with VE is Like <br />
                        Having a <span>Rent-free Office in India</span> </strong> </h2>
                <h4>Now It’s Your Turn to Explore the Possibilities</h4>
                <p><a href="#form" class="btn btn-primary">Outsource to India</a></p>

            </div>

        </div>
    </section>

    <!-- last section end here -->




    <?php footer_seo_part(); ?>

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

            $('.clients_slider').owlCarousel({
                loop: true,
                center: true,
                items: 3,
                autoplay: true,
                autoplayTimeout: 8500,
                smartPlay: 450,
                dots: false,
                nav: false,
                margin: 0,
                items: 3,
                responsive: {
                    0: {
                        item: 1
                    },
                    768: {
                        item: 1
                    },
                    1170: {
                        item: 3
                    }
                }

            });
        });
    </script>
</body>

</html>