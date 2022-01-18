<style>
    .blinking{
        animation:blinkingText 1.2s infinite;
        font-size: 40px;
        margin-top: 120px;
    }
    @keyframes blinkingText{
        0%{     color: blue;    }
        49%{    color: blue; }
        60%{    color: transparent; }
        99%{    color:transparent;  }
        100%{   color: blue;    }
    }
    a {
        color:blue;
    }
    </style>
<div class="container" data-aos="fade-up">
    <div class="section-title">
        <h2>Jobs Abroad</h2>
    </div>
    <div class="row content justify-center">
        <p class="text-center">
              We meet the unanswered questions of the employers,job seekers and agencies in the industry.
        </p>
        <div class="col-lg-6">
            <img src="{{ asset('theme1/assets/img/img1.jpg')}}" style="width:100%; height:400px; scrollbar-width: 0px; margin-right:0px;"> 
        </div>
        <div class="col-lg-6 text-center">
        <h2 class="blinking font-weight-900 ">For Approved Jobs Abroad</h2>
        <br>
              <a href="https://eemis.mglsd.go.ug/companies" class="click">Click here </a>
        </div>
    </div>
</div>