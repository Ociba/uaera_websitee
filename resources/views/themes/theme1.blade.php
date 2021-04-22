<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        @include('theme1-front-layout.css')
    </head>

    <body>

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
                @include('theme1-front-layout.partners')
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