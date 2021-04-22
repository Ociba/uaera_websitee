

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        @include('theme2-front-layout.css')
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top">
            @include('theme2-front-layout.menu')
        </header>
        <!-- End Header -->
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="hero d-flex align-items-center">
            @include('theme2-front-layout.home')
        </section>
        <!-- End Hero -->
        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                @include('theme2-front-layout.about')
            </section>
            <!-- End About Section -->
            <!-- ======= Values Section ======= -->
            <section id="values" class="values">
                @include('theme2-front-layout.values')
            </section>
            <!-- End Values Section -->
            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                @include('theme2-front-layout.count')
            </section>
            <!-- End Counts Section -->
            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
                @include('theme2-front-layout.features')
            </section>
            <!-- End Features Section -->
            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                @include('theme2-front-layout.services')
            </section>
            <!-- End Services Section -->
            <!-- ======= Pricing Section ======= -->
            <section id="pricing" class="pricing">
                @include('theme2-front-layout.price')
            </section>
            <!-- End Pricing Section -->
            <!-- ======= F.A.Q Section ======= -->
            <section id="faq" class="faq">
                @include('theme2-front-layout.faq')
            </section>
            <!-- End F.A.Q Section -->
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                @include('theme2-front-layout.portfolio')
            </section>
            <!-- End Portfolio Section -->
            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                @include('theme2-front-layout.testimonials')
            </section>
            <!-- End Testimonials Section -->
            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                @include('theme2-front-layout.team')
            </section>
            <!-- End Team Section -->
            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients">
                @include('theme2-front-layout.partner')
            </section>
            <!-- End Clients Section -->
            <!-- ======= Recent Blog Posts Section ======= -->
            <section id="recent-blog-posts" class="recent-blog-posts">
                @include('theme2-front-layout.blog')
            </section>
            <!-- End Recent Blog Posts Section -->
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                @include('theme2-front-layout.contact')
            </section>
            <!-- End Contact Section -->
        </main>
        <!-- End #main -->
        <!-- ======= Footer ======= -->
        @include('theme2-front-layout.footer')
        <!-- End Footer -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <!-- Vendor JS Files -->
        @include('theme2-front-layout.javascript')
    </body>
</html>

