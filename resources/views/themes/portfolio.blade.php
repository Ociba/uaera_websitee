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
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/">About</a></li>
          <li><a class="nav-link scrollto" href="/">Services</a></li>
          <li><a class="nav-link   scrollto" href="/">Team</a></li>
          <li><a class="nav-link scrollto" href="/">Careers</a></li>
          <li><a class="nav-link scrollto" href="/">List of Uaera Members</a></li>
          <li class="dropdown"><a href="#"><span>Themes</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/theme-two">Theme2</a></li>
              <li><a href="/theme-three">Theme3</a></li>
            </ul>
          </li>
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
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        
    </div>

    <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-card">Card</li>
        <li data-filter=".filter-web">Web</li>
    </ul>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-img"><img src="{{ asset('theme1/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
            <h4>App 1</h4>
            <p>App</p>
            <a href="{{ asset('theme1/assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-img"><img src="{{ asset('theme1/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="{{ asset('theme1/assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-img"><img src="{{ asset('theme1/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
            <h4>App 2</h4>
            <p>App</p>
            <a href="{{ asset('theme1/assets/img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-img"><img src="{{ asset('theme1/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
            <h4>Card 2</h4>
            <p>Card</p>
            <a href="{{ asset('theme1/assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-img"><img src="{{ asset('theme1/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
            <h4>Web 2</h4>
            <p>Web</p>
            <a href="{{ asset('theme1/assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-img"><img src="{{ asset('theme1/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
            <h4>App 3</h4>
            <p>App</p>
            <a href="{{ asset('theme1/assets/img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-img"><img src="{{ asset('theme1/assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
            <h4>Card 1</h4>
            <p>Card</p>
            <a href="{{ asset('theme1/assets/img/portfolio/portfolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-img"><img src="{{ asset('theme1/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
            <h4>Card 3</h4>
            <p>Card</p>
            <a href="{{ asset('theme1/assets/img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-img"><img src="{{ asset('theme1/assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt=""></div>
        <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="{{ asset('theme1/assets/img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

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