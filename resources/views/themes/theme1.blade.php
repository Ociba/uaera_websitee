<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        @include('theme1-front-layout.css')
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
            a {
            color: #fff;
            text-decoration: none
            }
            .ticker {
            display: flex;
            flex-wrap: wrap;
            width: 1400px;
            height: 50px;
            margin: 0 auto
            }
            .news {
            width: 80%;
            padding: 0 2%
            }
            .title {
            width: 15%;
            text-align: center;
            background: #c81c1c;
            position: relative
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
            .title:after {
            position: absolute;
            content: "";
            right: -12%;
            border-left: 20px solid #c81c1c;
            border-top: 28px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 21px solid transparent;
            top: 0px
            }
            .title h5 {
            font-size: 18px;
            margin: 4% 0;
            color:#ffffff;
            }
            .news marquee {
            font-size: 18px;
            margin-top: 12px;
            background:#ffffff;
            }
            .news-content p {
            margin-right: 41px;
            display: inline;
            color:red;
            }
            @keyframes leftcrawl {
            to { transform: translateX(-100rem); }
            }
            @keyframes rightcrawl {
            to { transform: translateX(-130rem); }
            }
            #marquee div:first-of-type span {
            transform: translateX(60rem);
            animation: leftcrawl 14s linear infinite;
            text-shadow: 4px 0px 4px rgba(0,0,0,0.3);
            }
            #marquee div:last-of-type span {
            transform: translateX(30rem);
            animation: rightcrawl 10s linear infinite;
            }
        </style>
    </head>
    <body>
        <script src="//code.tidio.co/09qppohxl1p0i82npb9r0mqxv6xra6ll.js" async></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=174468550314600&autoLogAppEvents=1" nonce="RtPqCkj5"></script>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            @include('theme1-front-layout.menu')
        </header>
        <!-- End Header -->
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            @include('theme1-front-layout.slider')
        </section>
        <!-- End Hero -->
        <main id="main">
            <!-- ======= Cliens Section ======= -->
            <section id="cliens" class="cliens section-bg">
                <div class="container mt-2 pb-3 m-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ticker">
                                <div class="title">
                                    <h5>News Update</h5>
                                </div>
                                <div class="news">
                                    <marquee class="news-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                        <span class="dot"></span> 
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto </p>
                                        </span>
                                        <span class="dot"></span>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam </p>
                                        </span>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Cliens Section -->
            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                @include('theme1-front-layout.about')
            </section>
            <!-- End About Us Section -->
            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us section-bg">
                @include('theme1-front-layout.why-us')
            </section>
            <!-- End Why Us Section -->
            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills">
                @include('theme1-front-layout.skills')
            </section>
            <!-- End Skills Section -->
            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                @include('theme1-front-layout.services')
            </section>
            <!-- End Services Section -->
            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                @include('theme1-front-layout.call-action')
            </section>
            <!-- End Cta Section -->
            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                @include('theme1-front-layout.portfolio')
            </section>
            <!-- End Portfolio Section -->
            <!-- ======= Team Section ======= -->
            <section id="team" class="team section-bg">
                @include('theme1-front-layout.team')
            </section>
            <!-- End Team Section -->
            <!-- ======= Pricing Section ======= -->
            <section id="pricing" class="pricing">
                @include('theme1-front-layout.price')
            </section>
            <!-- End Pricing Section -->
            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
                @include('theme1-front-layout.faq')
            </section>
            <!-- End Frequently Asked Questions Section -->
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                @include('theme1-front-layout.contact')
            </section>
            <!-- End Contact Section -->
        </main>
        <!-- End #main -->
        <!-- ======= Footer ======= -->
        @include('theme1-front-layout.footer')
        <!-- End Footer -->
        @include('theme1-front-layout.preloader')
        <!-- Vendor JS Files -->
        @include('theme1-front-layout.javascript')
</html>