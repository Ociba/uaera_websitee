<div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Team</h2>
        <p></p>
    </div>
        <div class="row">

          <div class="col-lg-2" data-aos="fade-up" data-aos-delay="100">
           
          </div>
           
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box text-center">
            <div style="margin-top:-40px;">
              <h3><img src="{{ asset('theme1/assets/img/team/rusoke.png')}}" height="100" width="80" class="img-flui" alt=""></h3>
              <p>Maj. Gen. Robert Rusooke</p>
              <p>UAERA Patron</p>
            </div>
           </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box text-center">
            <div style="margin-top:-40px;">
              <h3><img src="{{ asset('theme1/assets/img/team/member5.jpg')}}" height="90" width="80" class="img-flui" alt=""></h3>
              <p>Mr. Baker Akantambira</p>
              <p>Board Chairperson</p>
            </div>
           </div>
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
           
           </div>
        </div>
        <div class="row">
        @foreach($get_members  as $member)
          <div class="col-lg-3" style="height:200px;" data-aos="fade-up" data-aos-delay="100">
            <div class="box text-center">
            <div style="margin-top:-40px;">
            <img src="{{ asset('members/images/'.$member->image)}}" style="border-radius:50%; height: 80px; width:80px;" alt="">
              <p>{{$member->name}}</p>
              <p>{{$member->title}}</p>
            </div>
        </div>
          </div>
        @endforeach
        </div>

</div>