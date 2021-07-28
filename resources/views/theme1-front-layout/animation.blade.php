<link rel="stylesheet" type="text/css" href="{{ asset('admin/design/files/bower_components/owl.carousel/dist/assets/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/design/files/bower_components/owl.carousel/dist/assets/owl.theme.default.css')}}">
<style>
    #hero {
  width: 100%;
  height: auto;
  background: #37517e;
  margin-top: -40px;
  
}
</style>
<section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 d-flex flex-column justify-content-center pt-2 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <div class="img-fluid animate" alt="">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade"
                    data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators"
                            data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators"
                            data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators"
                            data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators"
                            data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid"
                                
                                src="{{ asset('theme1/assets/img/members.png')}}"  width="800" height="200" style="padding: 0px; scrollbar-width: 0px; margin-right:0px;"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="{{ asset('theme1/assets/img/members2.png')}}" width="800" height="1000"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="{{ asset('theme1/assets/img/img4.png')}}" width="800" height="350"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                            src="{{ asset('theme1/assets/img/img2.png')}}"  width="800" height="200" style="padding: 0px; scrollbar-width: 0px; margin-right:0px;" 
                                alt="Fourth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev"
                        href="#carouselExampleIndicators" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon"
                            aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next"
                        href="#carouselExampleIndicators" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon"
                            aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-im" data-aos="zoom-in" data-aos-delay="200">
        <a class="twitter-timeline" href="https://twitter.com/UAERAUg?ref_src=twsrc%5Etfw" data-height="457">Tweets by UAERAUg</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          {{--<img src="{{ asset('theme1/assets/img/img1.jpg')}}" style="height:475px; width:100%" class="img-fluid animate" alt="">--}}

          {{--<iframe src="http://www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/UAERAUganda" scrolling="yes" style="border:none; overflow:hidden; width:600px; height:430px; background: white; float:left; " allowtransparency="true" frameborder="0"></iframe>--}}
        </div>
      </div>
    </div>

</section>
<script type="text/javascript" src="{{ asset('admin/design/files/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/design/files/assets/js/owl-custom.js')}}"></script>
<!-- swiper js -->
<script type="text/javascript" src="{{ asset('admin/design/files/bower_components/swiper/package/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/design/files/assets/js/swiper-custom.js')}}"></script>
@include('admin-partials.javascript')