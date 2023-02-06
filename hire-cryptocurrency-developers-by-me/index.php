<?php
require_once('../lib/helper.php');
header_seo_part('Hire Cryptocurrency Developers');
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;700&display=swap" rel="stylesheet">

<style>
    <?php include("assets/css/style.min.css");
    ?>
</style>

</head>

<body>

    <?php header_navs($white = false); ?>

    <!-- <div class="banner">
        <div class="container">
            <div class="">
                <div class="banner-con">
                    <h1>
                        Tap into the <span>Future of Finance </span>
                    </h1>
                    <h3>
                        Develop Your Own Cryptocurrency
                    </h3>
                    <button class="smoothscroll" data-target="">
                        Hire Cryptocurrency Developers
                    </button>
                </div>
                <div class="bannerimg">

                </div>
            </div>
        </div>
    </div> -->
    <!-- Service section -->
    <section class="benifit_section">
        <div class="container">
            <div class="text-center mb-110">
                <h2>Scalability. <span>Stability</span> . Security</h2>
                <h4>How VE Ticks all the Boxes</h4>
            </div>
            <div class="benefit-card flexbox justify-content-center text-center">
                <div class="flex-3 ">
                    <div class="card">
                    <img src="assets/images/crypo-solution.png" alt="cypto-solution" width="180" height="150">
                    <div class="content">
                    <h5>Scalable Crypto Solutions </h5>
                    <p>Get all Crypto services under one roof in one dedicated team</p>
                    </div>
                    </div>

                </div>
                <div class="flex-3 ">
                    <div class="card">
                <img src="assets/images/projec_stability.png" alt="cypto-solution" width="180" height="150">
                <div class="content">
                    <h5>Project Stability  </h5>
                    <p>Stay protected and confidential at all times with breach-proof security</p>
                    </div>
                    </div>

                </div>
                <div class="flex-3 ">
                    <div class="card">
                <img src="assets/images/data_security.png" alt="cypto-solution" width="180" height="150">
                <div class="content">
                    <h5>Robust Data Security </h5>
                    <p>Stay protected and confidential at all times with breach-proof security</p>
                    </div>
                    </div>

                </div>
                <div class="flex-3 ">
                    <div class="card">
                <img src="assets/images/cost-saving.png" alt="cypto-solution" width="180" height="150">
                <div class="content">
                    <h5>70% Cost Savings  </h5>
                    <p>We have saved $30,000 per developer with VE” - Larry Spencer, VP, Sceris, USA</p>
                    </div>
                    </div>
                    

                </div>
            </div>
        </div>

    </section>

    <!-- Service section ends -->


    <!-- Testimonial Starts here -->
    <section class="client-section">
        <div class="container">
        <div class="text-center mb-110">
            <h2>Hear From Those Who Keep <span>Coming Back</span> </h2>
            <h4>3000+ Businesses on the VE Journey</h4>
        </div>
        <div class="clients_slider owl-carousel">

        <div class="item client-info ">
            <figure class="text-center">
            <span class="bg-blur"></span>
                <img src="assets/images/Anders-Jeppesen.png"  alt="Anders-Jeppesen.png" width="165" height="165">
                
                <figcaption>
                    <blockquote>
                    I won’t be able to grow my business without having a<br/> strong resource from VE
                    </blockquote>
                    <hr>
                    <div class="client-name">Anders Jeppesen</div>
                    <div class="client-address">Anjep Consulting, Founder, Denmark</div>
                </figcaption>
            </figure>
        </div>

        <div class="item client-info ">
            <figure class="text-center">
            <span class="bg-blur"></span>
                <img src="assets/images/Thomas-Zizza.png" alt="Anders-Jeppesen.png" width="165" height="165">
                <figcaption>
                    <blockquote>
                    I took the risks and here I am more than 5 years with VE & <br/> there’s certainly no reason to change
                    </blockquote>
                    <hr>
                    <div class="client-name">Thomas Zizzo</div>
                    <div class="client-address">Salesjet.com, CEO & Founder, US</div>
                </figcaption>
            </figure>
        </div>

        <div class="item client-info ">
            <figure class="text-center">
            <span class="bg-blur"></span>
                <img src="assets/images/lary-spencer.png" alt="Anders-Jeppesen.png" width="165" height="165">
                <figcaption>
                    <blockquote>
                    I won’t be able to grow my business without having a<br/> strong resource from VE
                    </blockquote>
                    <hr>
                    <div class="client-name">Larry Spencer</div>
                    <div class="client-address">VP, Sceris, USA</div>
                </figcaption>
            </figure>
        </div>
        </div>

    </section>


      <!-- Testimonial ends here -->

      <!-- footer section starts here -->
      <section class="footer-section">
        <div class="container">
        <div class="footer-box align-items-center flexbox">
            <div class="footer-content">
                <div class="sec-head">
                    <h2>Own the  <span>World’s Local</span>  Currency </h2>
                    <h4>Manage Money on Your Own Terms</h4>
                </div>
                <button class="smoothscroll" data-target="">Hire Cryptocurrency Developers</button>
            </div>

            <div class="footer-img">
                <img src="assets/images/man-hand.png" alt="" width="" height="">
                <div class="camera"></div>
                

            </div>
            
         
        </div>

        </div>

      </section>


        <!-- footer section ends here -->






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
                // autoplay: true,
                // autoplayTimeout: 8500,
                // smartPlay: 450,
                dots: true,
                nav: false,
                margin: 0,
                items: 1,
                responsive: {
                    0: {
                        items: 1
                    },
                    992: {
                        items: 1
                    }
                }

            });


        });
    </script>
</body>

</html>