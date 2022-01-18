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
<section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
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
                        <li data-target="#carouselExampleIndicators"
                            data-slide-to="4"></li> 
                            <li data-target="#carouselExampleIndicators"
                            data-slide-to="5"></li> 
                            <li data-target="#carouselExampleIndicators"
                            data-slide-to="6"></li> 
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid"
                                
                                src="{{ asset('theme1/assets/img/members.png')}}"  style="padding: 0px; scrollbar-width: 0px; margin-right:0px; width:800px; height:390px"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                            src="{{ asset('theme1/assets/img/uaera2.jpg')}}" style="padding: 0px; scrollbar-width: 0px; margin-right:0px;width:800px; height:390px;" 
                                alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                            src="{{ asset('theme1/assets/img/uaera3.JPG')}}" style="padding: 0px; scrollbar-width: 0px; margin-right:0px;width:800px; height:390px;" 
                                alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                            src="{{ asset('theme1/assets/img/uaera4.JPG')}}" style="padding: 0px; scrollbar-width: 0px; margin-right:0px;width:800px; height:390px;" 
                                alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="{{ asset('theme1/assets/img/members2.png')}}" style="width:800px; height:390px;"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="{{ asset('theme1/assets/img/new2.jpg')}}" style="width:800px; height:390px;"
                                alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                            src="{{ asset('theme1/assets/img/new1.jpg')}}" style="padding: 0px; scrollbar-width: 0px; margin-right:0px;width:800px; height:390px;" 
                                alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                            src="{{ asset('theme1/assets/img/new3.jpg')}}" style="padding: 0px; scrollbar-width: 0px; margin-right:0px;width:800px; height:390px;" 
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
        <div class="col-lg-6 pt-5 pt-lg-0 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <a class="twitter-timeline" style="width:800px; height:390px;" href="https://twitter.com/UAERAUg?ref_src=twsrc%5Etfw" data-height="440">Tweets by UAERAUg</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

@include('admin-partials.javascript')