<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Uaera - Curbing unemployment</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/loho.jpg')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  @include('theme1-front-layout.css')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages mb-5">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><img src="{{ asset('assets/img/loho.jpg')}}" style="border-radius:50%; width:40px; height:40px;"></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">HOME</a></li>
          <li><a class="nav-link scrollto" href="/about-more">ABOUT</a></li>
          <li><a class="nav-link scrollto" href="/">ACHIEVEMENTS</a></li>
          <li><a class="nav-link scrollto" href="/view-portfolio">GALLERY</a></li>
          <li><a class="nav-link scrollto" href="/">TEAM</a></li>
          <li><a class="nav-link scrollto" href="/">CONTACT</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main mt-5">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        {{--<ol>
          <li><a href="/"><span style="color:black;">Home</span></a></li>
          <li>{{ (request()->route()->getName()) }}</li>
        </ol>--}}

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="portfolio" class="inner-page portfolio">
      <div class="container">

    <div class="section-title">
        <h2>Portfolio</h2>
        <p>UAERA regulates and monitors the activities
                of member agencies together with Ministry of Gender,
                Labour and Social Development, which is our regulating
                body that ensures every company is licensed to externalize
                labour.</p>
        
    </div>
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($get_portifolio as $images)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-img"><img src="{{ asset('forlio/images/'.$images->image)}}" style="height:300px; width:400px;" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
            <a href="{{ asset('theme1/assets/img/folio2.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            {{--<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>--}}
        </div>
        <p class="text-center">{{$images->title}}</p>
        <p class="text-center"><i class="ri-user-fill"></i><span style="color:green;"> Admin  updated {{Carbon\Carbon::parse($images->created_at)->diffForHumans()}}</span> 
        <img src="{{ asset('assets/img/loho.jpg')}}" style="border-radius:50%; width:15px; max-height:150px;"></p>
        </div>
        @endforeach

    </div>

</div>
</section>
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('theme1-front-layout.footer')<!-- End Footer -->

  @include('theme1-front-layout.preloader')

  @include('theme1-front-layout.javascript')

</body>

</html>