<link rel="stylesheet" type="text/css" href="{{ asset('admin/design/files/bower_components/owl.carousel/dist/assets/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/design/files/bower_components/owl.carousel/dist/assets/owl.theme.default.css')}}">
    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/design/files/bower_components/swiper/package/css/swiper.min.css')}}">
<div class="container">
<div class="row">
    <div class="col-lg-8 d-flex flex-column justify-content-center pt-2 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
    <!-- Bootstrap slider card start -->
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
                    <img class="d-bloc img-fluid"
                        src="{{ asset('theme1/assets/img/img2.jpg')}}" style="width:100%; height:400px;padding: 0px; scrollbar-width: 0px; margin-right:0px;" 
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid"
                        src="{{ asset('theme1/assets/img/members.png')}}"  style="width:100%; height:400px;"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid"
                        src="{{ asset('theme1/assets/img/members.png')}}" style="width:100%; height:400px;"
                        alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid"
                        src="{{ asset('theme1/assets/img/members.png')}}" style="width:100%; height:400px;"
                        alt="Third slide">
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
<div class="col-lg-4 order-1 order-lg-2 hero-img text-center pt-5 pt-lg-0" style="" data-aos="zoom-in" data-aos-delay="200">
    <img class="d-bloc img-fluid"
            src="{{ asset('theme1/assets/img/img1.jpg')}}" style="width:100%; height:400px; scrollbar-width: 0px; margin-right:0px;" 
            alt="First slide">
    </div>
</div>
</div>
<!-- Bootstrap slider card end -->
<!-- owl carousel 2 js -->
<script type="text/javascript" src="{{ asset('admin/design/files/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/design/files/assets/js/owl-custom.js')}}"></script>
<!-- swiper js -->
<script type="text/javascript" src="{{ asset('admin/design/files/bower_components/swiper/package/js/swiper.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('admin/design/files/assets/js/swiper-custom.js')}}"></script>
@include('admin-partials.javascript')

  