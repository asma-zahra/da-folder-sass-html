<?php
require_once('../lib/helper.php');
header_seo_part('Hire Magento Developer');
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

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
        <div class="banner_inner">
        <div class="banner_top">
            <h2>Build More than Just a Storefront.</h2>
            <h1> Create Unforgettable <br/> Shopping <span class="orange">Experiences </span></h1>
            <p class=""><a href="#form" class="btn btn-primary  smoothScroll animateBtn"><b>Hire a Magento Developer</b></a></p>
        </div>
        <div class="banner_bottom">
            <img src="assets/images/shop.png" width="268" height="300" alt="shop">
        </div>
        </div>
    </section> <!-- Banner section end -->



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
        });
    </script>
</body>

</html>