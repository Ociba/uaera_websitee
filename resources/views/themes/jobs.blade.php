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
                <h2>Jobs</h2>
            </div>
            <div class="row content justify-center" style="text-align: justify;">
                <div class="col-lg-6">
                    
                    <p>
                    <h5 style="font-weight:bold;">Job Title: Financial Accountant</h5>
                    </p>
                    <h5 style="font-weight:bold;">Detailed Job Responsibilities</h5>
                    <p>The financial Accountant will report to the Finance and Administration Manager and will be responsible for the following duties and responsibilities
                    </p>
                    <ul>
                        <li>Producing accurate useful and timely reports for budget holders</li>
                        <li>Coordinate the Association travel arrangements for staff and its visitors as
                           required
                        </li>
                        <li>Provide support during internal and external audits</li>
                        <li>Establish and implement procedures for project financial management,
                            procurement, sub-contracts, and consultant contracts to ensure transparency
                            and good business practices.
                        </li>
                        <li>Provide strategic leadership to the UAERA team thorough policies, and
                         procedure manuals.</li>
                         <li>Ensuring internal control mechanisms and budget management are observed for
                           purposes of minimizing financial risk</li>
                        <li>Develop capacity of team performance and drive for excellence</li>
                        <li>Submit to head office financial and narrative reports as required in a timely
                         manner</li>
                         <li>Ensure that 100% timesheets are filed on a monthly basis</li>
                         <li>Ensure that all staff have completed annual performance appraisals on time</li>
                         <li>Working hand in hand with Head of Finance, HR & administration in relation to
                         technical aspects.</li>
                         <li>Assist in procurement for all equipment needed for the Secretariat.</li>
                         <li>Any other duties as may reasonably require by the E.D.</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                <h5 style="font-weight:bold;">Qualities</h5>
                    <ul>
                    <li>Innate problem-solver.
                    </li>
                    <li>Time management
                    </li>
                    <li>Analytical skills.
                    </li>
                    <li>Exceptional leadership.
                    </li>
                    <li>Adaptable communication.
                    </li>
                    <li>Humble confidence.
                    </li>
                    <li>Unwavering professionalism.
                    </li>
                    <li>Self-management.</li>
                    </ul>
                    <h5>Requirements</h5>
                   <ul>
                   <li>Bachelors’ degree in Accounting, Finance, Business Administration and a
                     graduate of ACCA, CPA</li>
                  <li>5 years’ experience in a busy organisation in the NGO sector
                    </li>
                    <li>Knowledge of International reporting standards
                    </li>
                    <li>Knowledge of computerized financial management and accounting systems
                     (QuickBooks)</li>
                     <li>Good organizational and personal skills</li>
                     <li>Financial integrity</li>
                     <li>Problem solving and team player</li>
                    </ul>
                    <h5 style="font-weight:bold;">How to Apply</h5>
                    <p>Interested candidates should send your application letter, current curriculum
                        vitae and photocopies of academic certificate to: <a href="mailto:recruitment827@gmail.com">recruitment827@gmail.com</a> . <strong>Deadline: 18 th
                        August 2021 at 5:00pm.</strong>
                    </p>
                    <h5 style="font-weight:bold;">Download</h5>
                    <p><a href="{{asset('pdf/job.pdf')}}" download>Click here to Download pdf</a></p>
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