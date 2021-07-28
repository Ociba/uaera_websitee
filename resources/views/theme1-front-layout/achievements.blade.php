<div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Achievements</h2>
        <p>Labour Externalisation sector contribute to Uganda's foreign earning through annual remittances by Ugandan workers abroad which stands at USD 1.3BN globally and USD 700M for those working in the Middle East countries alone.</p>
    </div>

    <div class="row text-justify-center" style="text-center;">
         @foreach($get_achievements as $achievement)
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mb-1" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
            <div class="icon text-center"><img src="{{ asset('theme1/assets/img/loho.jpg')}}" style="border-radius:50%; width:50px; max-height:50px;"></div>
            <p>{{$achievement->achievement}}</p>
        </div>
        </div>
        @endforeach

    </div>

</div>