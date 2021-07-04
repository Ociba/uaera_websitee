<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        @include('theme1-front-layout.css')
        
        <style>
            /*news*/
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
            background: #c81c1c;
            position: relative;
            text-align:center;
            height:75%;
            padding: 5px 0px 5px;
          
            }
            .dot {
            height: 6px;
            width: 6px;
            margin-left: 3px;
            margin-right: 3px;
            margin-top: 2px !important;
            background-color: rgb(207, 23, 23);
            border-radius: 50%;
            color:#ffffff;
            display: inline-block
            }
            .title:after {
            position: absolute;
            content: "";
            right: -80%;
            border-left: 20px solid #c81c1c;
            border-top: 28px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 21px solid transparent;
            top: -7px
            }
            .title h5 {
            font-size: 18px;
            margin: 4% 2%;
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
            padding:20px;
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
            @include('theme1-front-layout.animation')
        </section>
        
        <!-- End Hero -->
        <main id="main">
            <!-- ======= Cliens Section ======= -->
            <section id="cliens" class="cliens">
                <div class="container mt-2 pb-3 m-0">
                    <div class="row" data-aos="zoom-in">
                        <div class="col-md-12">
                            <div class="ticker">
                                <div class="title">
                                    <h5>News
                                    </h5>
                                </div>
                                
                                <div class="news">
                                    <marquee class="news-content">
                                    @foreach($get_news_for_front as $news)
                                        <p>{{$news->news}}</p>
                                        <span class="dot"></span>
                                        @endforeach
                                    </marquee>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Cliens Section -->
            <!-- ======= About Us Section ======= -->
            <section id="about" class="about section-bg">
                @include('theme1-front-layout.about')
            </section>
            <!-- End About Us Section -->
            <!-- ======= Why Us Section ======= -->
            <section id="contact2" class="contact2">
                @include('theme1-front-layout.jobs-abroad')
            </section>
            <!-- End Why Us Section -->
            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills section-bg">
                @include('theme1-front-layout.skills')
            </section>
            <!-- End Skills Section -->
            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                @include('theme1-front-layout.achievements')
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