<style>
 // 3D switched off on viewports less than 993px wide to preserve ledgibility

@font-face {
  font-family: Agency;
   src: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/agency-fb-bold.woff);
}
body { 
  font-family: Avenir, sans-serif;
  marging: 0;
}
#marquee { 
  margin-top: 3rem;
	perspective: 500px;
	font-size: 0;
	font-family: Agency, sans-serif;
}
#marquee div {
	display: inline-block; 
	height: 12rem; 
	width: 50rem;
	position: relative;
}
#marquee div:first-of-type { 
	background: #191970;
	transform-origin: top right;
	transform: rotateY(-40deg);
	color: #fff;
}
#marquee div:last-of-type {
	background: #191970;
	transform-origin: top left;
	transform: rotateY(45deg);
	color: #fff;
}
#marquee div { 
	font-size: 8rem;
	overflow: hidden;
}
#marquee div span { 
	position: absolute; 
	width: 400%;	
	line-height: 1.4;
}
@keyframes leftcrawl {
	to { transform: translateX(-100rem); }
}
@keyframes rightcrawl {
	to { transform: translateX(-130rem); }
}
#marquee div:first-of-type span {
	transform: translateX(60rem);
	animation: leftcrawl 14s linear infinite;
	text-shadow: 4px 0px 4px rgba(0,0,0,0.3);
}
#marquee div:last-of-type span {
	transform: translateX(30rem);
	animation: rightcrawl 10s linear infinite;
}
@media all and (max-width: 993px) {
  #marquee {
    perspective: none;
  }
  #marquee div:last-of-type { 
    opacity: 0; 
    height: 0;
  }
  #marquee div:first-of-type {
    width: 80%;
  }
}
</style>
<div class="container" data-aos="fade-up">
    <div class="row">
        <div id="marquee" class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <div><span>UAERA UGANDA: ZOMBIE OUTBREAK</span></div>
            <div aria-hidden="true"><span>UAERA UGANDA: ZOMBIE OUTBREAK</span></div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
        <h3>Voluptate dignissimos provident quasi corporis voluptates</h3>
        <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
        </p>

        <div class="skills-content">

            <div class="progress">
            <span class="skill">No.of Companies <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>

            <div class="progress">
            <span class="skill">No. of Uaera Members <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>

            <div class="progress">
            <span class="skill">Services Offered <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>

            <div class="progress">
            <span class="skill">Domestic Workers <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            </div>

        </div>

        </div>
    </div>

</div>
<script>
function setText(event){
  event.preventDefault();
  leftText.innerText = textsource.value.toUpperCase();
  rightText.innerText = textsource.value.toUpperCase();
}
var leftText = document.querySelector("#marquee div:first-of-type span");
var rightText = document.querySelector("#marquee div:last-of-type span");
var textsource = document.getElementById("textsource");
setText();
</script>