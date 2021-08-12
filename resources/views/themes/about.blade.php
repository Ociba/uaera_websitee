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
          <li class="dropdown"><a href="#"><span>OPPORTUNITIES</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/career-jobs">Career</a></li>
              {{--<li><a href="/jobs">Consultancy Services</a></li>--}}
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
                <h2>About Us</h2>
            </div>
            <div class="row content justify-center" style="text-align: justify;">
                <div class="col-lg-6">
                    
                    <p>
                    <h5 style="font-weight:bold;">OUR OBJECTIVES</h5>
                    </p>
                    <ul>
                        <li> To organize and unite all companies licensed under the labour externalization programme to operate
                            under one umbrella and speak with one voice for strengthening the sector
                        </li>
                        <li> To ensure protection of migrant workers, and observation of their human rights and welfare in
                            accordance with the international labour standards.
                        </li>
                        <li> To self regulate, ensure adherence to the code of conduct, laws, regulations and guidelines set by the
                            ministry of Gender, Labour and Social Development (MGLSD)
                        </li>
                        <li> To ensure transparency, build confidence in the public
                            and make the business attractive and sustainable. The mandate of the association is therefore on labour migration
                        </li>
                    </ul>
                    <h5 style="font-weight:bold;">OUR LEGAL REGIME</h5>
                    <p>Our members are licensed by the ministry of GLSD
                        under the following laws and regulations.
                    </p>
                    <ul>
                        <li>The employment ACT No.6, 2006.</li>
                        <li>Statuary instrument No.62 of 2005, the employment
                            (Recruitment of Ugandan Migrant Workers Abroad)
                            Regulations.
                        </li>
                        <li>The prevention of Trafficking in persons Act No.6, 2009.</li>
                        <li>The Uganda Citizenship and Immigration control Act.</li>
                        <li>The National Security Act.</li>
                    </ul>
                    <h5 style="font-weight:bold;">GOVERNANCE</h5>
                    <p>
                        The governance of UAERA comprises the following:
                        An Annual General Meeting (AGM) made up of all paid
                        members.
                        Executive Board – elected for a term of 3 years.
                        Secretariat staff led by an Executive Director ensures the
                        AGM takes place, Plans for General meetings, trainings,
                        workshops on new developments in the sector.
                        Carries out public relations using various media platforms
                        like TV, radio, and newspapers to inform and sensitize the
                        public on safe migration through licensed by MGLSD
                        companies that are also members of UAERA.
                    </p>
                    <h5 style="font-weight:bold;">OUR PROGRAMMES</h5>
                    <ul>
                    <li>Promote safe and legal migration as strategy
                        for promoting decent employment and national
                        development.
                    </li>
                    <li>Through our secretariat members are supported to be compliant with laws and regulations through trainings,
                        workshops and implementing the code of conduct.
                    </li>
                    <li>Sharing information and improving cooperation
                        among members.
                    </li>
                    <li>Empowering experience for Ugandan migrants and
                        the benefits can be an engine for social and economic
                        growth in the country through our members’
                        dissemination of information.
                    </li>
                    <li>We are also more connected to employers abroad
                        and therefore be able to supply to Government with
                        information on the global market demand for skills.
                    </li>
                    <li>Provide Remedial services and incentive programmes
                        for returning workers
                    </li>
                    <li>Act as a clearing house for our members’ documents
                        before they are 
                    </li>
                    </ul>
                    
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                   <ul>
                   submitted to the ministry for
                        processing. This reduces errors, and turnaround time
                        for final clearance for migrant workers to travel out
                        of the country.
                  <li>Provide Remedial services and incentive programmes
                        for returning workers
                    </li>
                    <li>Act as a clearing house for our members’ documents
                        before they are submitted to the ministry for
                        processing. This reduces errors, and turnaround time
                        for final clearance for migrant workers to travel out
                        of the country.
                    </li>
                    </ul>
                    <h5 style="font-weight:bold;">OUR ACHIEVEMENTS</h5>
                    <ul>
                        <li>Contribution to social development through reducing the number of young people not in employment through enhancing the availability and quality of gainful employment.
                        </li>
                        <li>Contribution to our country's per capita income is over USD 1.3BN (US Dollars 1 billiion and Three Hundred Million) is remmitted annually by Ugandans working abroad
                        </li>
                        <li>We have enabled Ugandans to acquire skills. All jobs
                            seekers are trained locally at duty stations including
                            skilling and certification.
                        </li>
                        <li>We have enabled Ugandans to acquire assets.</li>
                        <li>The jobs have translated into home ownerships,
                            businesses paid school fees for siblings, and people
                            have acquired properties etc.
                        </li>
                        <li>We now have a reception center in Entebbe located on Gowas Road that receives emergency cases and
                            those that are in distress. These persons are offered
                            medical treatment and counseling services by qualified
                            counsellors.
                        </li>
                        <li>Monitoring systems for countries with bilateral
                            agreement with Uganda through MGLSD together
                            with UAERA, including the Royal Kingdom of Saudi
                            Arabia and Jordan (Musaned system for Domestic
                            workers to work in Saudi Arabia, Medical systems,
                            GCC) though accredited medical centers.
                        </li>
                        <li>Predepature training of domestic workers through
                            the accredited training centers by MGLSD.
                        </li>
                        <li>EEIMIS SYSTEM through MGLSD where
                            companies apply for license, renewal, and upload job
                            orders for approval.
                        </li>
                    </ul>
                    <h5 style="font-weight:bold;">Future of UAERA</h5>
                    <ul>
                        <li>Looking at the future of UAERA, we aim to have the
                            following in place:
                        </li>
                        <li>Automated systems for all document processes.</li>
                        <li>Safe productive migration.</li>
                        <li>Migrant workers being able to go through licensed
                            companies, monitoring from the recruitment stage to
                            deployment, until the 2-year contract is completed.
                        </li>
                        <li>Encouraging the workers to invest their money for
                            future benefits by empowering them with financial
                            literacy and contract appreciation among other things.
                        </li>
                        <li>More bilateral agreements with many countries
                            including the entire Middle East, Europe, USA, China,
                            Japan and Australia.
                        </li>
                        <li>A home for UAERA.</li>
                        <li>Engaging various stake holders locally and
                            internationally in support of safe migration.
                        </li>
                    </ul>
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