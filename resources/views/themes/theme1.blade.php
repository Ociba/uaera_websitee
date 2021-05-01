<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        @include('theme1-front-layout.css')
        <style>
        .news {
            width: 200px
        }

        .news-scroll a {
            text-decoration: none;
            color:blue;
        }

        .dot {
            height: 6px;
            width: 6px;
            margin-left: 3px;
            margin-right: 3px;
            margin-top: 2px !important;
            background-color: rgb(207, 23, 23);
            border-radius: 50%;
            display: inline-block
        }
        </style>
    </head>

    <body>
    <script src="//code.tidio.co/09qppohxl1p0i82npb9r0mqxv6xra6ll.js" async></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=174468550314600&autoLogAppEvents=1" nonce="RtPqCkj5"></script>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top ">
            @include('theme1-front-layout.menu')
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            @include('theme1-front-layout.animation')

        </section><!-- End Hero -->

        <main id="main">

                <!-- ======= Cliens Section ======= -->
                <section id="cliens" class="cliens section-bg">
               <div class="container mt-2 m-1">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-cente bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;Uaera Breaking News</span></div>
                                <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> <a href="#">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </a> <span class="dot"></span> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </a> <span class="dot"></span> <a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse </a> </marquee>
                            </div>
                        </div>
                    </div>
                </div>
                </section><!-- End Cliens Section -->

                <!-- ======= About Us Section ======= -->
                <section id="about" class="about">
                @include('theme1-front-layout.about')
                </section><!-- End About Us Section -->

                <!-- ======= Why Us Section ======= -->
                <section id="why-us" class="why-us section-bg">
                @include('theme1-front-layout.why-us')
                </section><!-- End Why Us Section -->

                <!-- ======= Skills Section ======= -->
                <section id="skills" class="skills">
                @include('theme1-front-layout.skills')
                </section><!-- End Skills Section -->

                <!-- ======= Services Section ======= -->
                <section id="services" class="services section-bg">
                @include('theme1-front-layout.services')
                </section><!-- End Services Section -->

                <!-- ======= Cta Section ======= -->
                <section id="cta" class="cta">
                @include('theme1-front-layout.call-action')
                </section><!-- End Cta Section -->

                <!-- ======= Portfolio Section ======= -->
                <section id="portfolio" class="portfolio">
                @include('theme1-front-layout.portfolio')
                </section><!-- End Portfolio Section -->

                <!-- ======= Team Section ======= -->
                <section id="team" class="team section-bg">
                @include('theme1-front-layout.team')
                </section><!-- End Team Section -->

                <!-- ======= Pricing Section ======= -->
                <section id="pricing" class="pricing">
                @include('theme1-front-layout.price')
                </section><!-- End Pricing Section -->

                <!-- ======= Frequently Asked Questions Section ======= -->
                <section id="faq" class="faq section-bg">
                 @include('theme1-front-layout.faq')
                </section><!-- End Frequently Asked Questions Section -->

                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                @include('theme1-front-layout.contact')
                </section><!-- End Contact Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        @include('theme1-front-layout.footer')
        <!-- End Footer -->

        @include('theme1-front-layout.preloader')

        <!-- Vendor JS Files -->
        @include('theme1-front-layout.javascript')

    </body>

</html>