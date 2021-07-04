<div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Team</h2>
        <p>We have well experiences and hardworking staff with all qualities of leadership to serve our esteemed Ugandans at any time</p>
    </div>

    <div class="row">
    <div class="row text-center mb-5">
        <div class="col-lg-3">
        <div class="d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
        </div>
        </div>
        <div class="col-lg-6">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="{{ asset('theme1/assets/img/team/team2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="member-info">
            <h4>Mr. Baker Akantambira</h4>
            <span>Board Chairperson</span>
            </div>
        </div>
        </div>
        <div class="col-lg-3">
        <div class="d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
        </div>
        </div>
        </div>
         @foreach($get_members  as $member)
        <div class="col-lg-6">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="{{ asset('members/images/'.$member->image)}}" class="img-fluid" alt=""></div>
            <div class="member-info">
            <h4>{{$member->name}}</h4>
            <span>{{$member->title}}</span>
            </div>
        </div>
        </div>
        @endforeach
    </div>

</div>