

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        @include('theme3-front-layout.css')
    </head>
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
            @include('theme3-front-layout.menu')
        </header>
        <!-- End Header -->
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
            @include('theme3-front-layout.slide')
        </section>
        <!-- End Hero -->
        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                @include('theme3-front-layout.about')
            </section>
            <!-- End About Section -->
            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                @include('theme3-front-layout.features')
            </section>
            <!-- End Features Section -->
            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                @include('theme3-front-layout.call-action')
            </section>
            <!-- End Cta Section -->
            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                @include('theme3-front-layout.services')
            </section>
            <!-- End Services Section -->
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                @include('theme3-front-layout.portfolio')
            </section>
            <!-- End Portfolio Section -->
            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                @include('theme3-front-layout.testimonials')
            </section>
            <!-- End Testimonials Section -->
            <!-- ======= Pricing Section ======= -->
            <section id="pricing" class="pricing">
                @include('theme3-front-layout.price')
            </section>
            <!-- End Pricing Section -->
            <!-- ======= F.A.Q Section ======= -->
            <section id="faq" class="faq">
                @include('theme3-front-layout.faq')
            </section>
            <!-- End F.A.Q Section -->
            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                @include('theme3-front-layout.team')
            </section>
            <!-- End Team Section -->
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                @include('theme3-front-layout.contact')
            </section>
            <!-- End Contact Section -->
        </main>
        <!-- End #main -->
        <!-- ======= Footer ======= -->
        @include('theme3-front-layout.footer')
        <!-- End Footer -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <!-- Vendor JS Files -->
        @include('theme3-front-layout.javascript')
    </body>
</html>

