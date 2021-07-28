<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
   .ml4 {
  position: relativ;
  font-weight: ;
  font-size: 4.5em;
}
.ml4 .letters {
  position: absolute;
  margin-top: 100px;
  color:blue;
  left: 0;
  top: 0.3em;
  right: 0;
  opacity: 0; 
}
</style>
<div class="container mt-2" data-aos="fade-up">
   <div class="section-title">
      <h2>Jobs Abroad</h2>
      <p>We meet the unanswered questions of the employers,job seekers and agencies in the industry.</p>
   </div>
   <div class="row text-center">
       <div class="col-lg-6 pricing" style="box-shadow: 0;" data-aos="fade-up" data-aos-delay="100">
       <img src="{{ asset('theme1/assets/img/img1.jpg')}}" style="width:100%; height:400px; scrollbar-width: 0px; margin-right:0px;"> 
          </div>
          <div class="col-lg-6 pricing border-0" style="box-shadow: 0;" data-aos="fade-up" data-aos-delay="100">
            <div class="box border-0" style="height:400px; box-shadow: 0px;">
              <div style="margin-top:50px; text-align:center; font-size:36px;">
              <h1 class="ml4">
               <span class="letters letters-1" style="font-size:25px;">For Approved Jobs Abroad</span>
               <span class="letters letters-2" style="font-size:25px;">For Approved Jobs Abroad</span>
               <span class="letters letters-3" style="font-size:25px;">For Approved Jobs Abroad</span>
               </h1><br>
              <a href="https://eeimis.mglsd.go.ug/companies">Click here </a>
            </div>
            </div>
          </div>
      </div>
   </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script>
var ml4 = {};
ml4.opacityIn = [0,1];
ml4.scaleIn = [0.2, 1];
ml4.scaleOut = 3;
ml4.durationIn = 800;
ml4.durationOut = 600;
ml4.delay = 500;

anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letters-1',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-1',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-2',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-2',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4 .letters-3',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-3',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  }).add({
    targets: '.ml4',
    opacity: 0,
    duration: 500,
    delay: 500
  });
  </script>