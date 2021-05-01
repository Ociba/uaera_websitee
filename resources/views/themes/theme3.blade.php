

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        @include('theme3-front-layout.css')
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
        <div class="container mt-2 m-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                        <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-cente bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;Uaera News</span></div>
                        <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"> <a href="#">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </a> <span class="dot"></span> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </a> <span class="dot"></span> <a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse </a> </marquee>
                    </div>
                </div>
            </div>
        </div>
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

