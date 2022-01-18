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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
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
          <li class="dropdown"><a href="#"><span>Reports</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="/reports">Reports</a></li>
                <li><a href="/career-jobs">Career</a></li>
                </ul>
          </li>
         <li><a class="nav-link scrollto" href="/publications">MEDIA</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>{{ (request()->route()->getName()) }}</li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page" style="margin-top:-50px">
      <div class="container">
            <div class="section-title">
                <h2>Media Publications</h2>
            </div>
            <div class="row content justify-center" style="text-align: justify;">
                <div class="col-lg-12">
                  @foreach($get_media_publications as $media)
                    <hr>
                    <p>{{$media->title}}
                    </p>
                    <p>{{ $media->created_at}} <i class="fa fa-user"></i> By Admin</p>
                    <p class="text-center"><a href="{{$media->link}}">read more</a>
                    <hr>
                    @endforeach
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