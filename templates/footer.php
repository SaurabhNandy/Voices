
<hr class="col-12 p-0 m-0" style="border:solid; border-color: #F6EB42; width:100%; ">
    <footer class="container col-12 mt-0 pt-0 mb-0" style="background-color:#000;">
        <div class="row ">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 mt-5">
                <div class="col-5 float-left ml-5">
                    <div class="col-12">
                        <a href="./landing.php"style="font-family: Source Sans Pro;font-style: normal;font-weight: 600;font-size:160%;line-height:90%;color: #F6EB42;">HOME</a><br><br>
                    </div>
                    <div class="col-12">
                        <a href="./news.php" style="font-family: Source Sans Pro;font-style: normal;font-weight: 600;font-size:160%;line-height:90%;color: #F6EB42;">NEWS</a><br><br>
                        <p style="padding:2%;">
                                <a href="./news.php#events" class="footer-links">Events</a><br> 
                                <a href="./news.php#alumnispeak" class="footer-links">Alumni Speak</a><br>
                                <a href="./news.php#studentlife" class="footer-links">Student Life</a><br>
                        </p>
                    </div>
                    <div class="col-12">
                        <a href="./opinion.php"style="font-family: Source Sans Pro;font-style: normal;font-weight: 600;font-size:160%;line-height:90%;color: #F6EB42;">OPINION</a><br><br>
                        <p style="padding:2%;">
                            <a href="./opinion.php#mindspace" class="footer-links">Mindspace</a><br> 
                            <a href="./opinion.php#presidentsdesk" class="footer-links">President's Desk</a><br>
                            <a href="./opinion.php#cornerstone" class="footer-links">Cornerstone</a><br>
                            <a href="./opinion.php#conversation" class="footer-links">Conversation</a><br>
                        </p>
                    </div>
                </div>
                <div class="col-5 float-right">
                    <br><br>
                    <div class="col-12">
                        <a href="./sports.php"style="font-family: Source Sans Pro;font-style: normal;font-weight: 600;font-size:160%;line-height:90%;color: #F6EB42;">SPORT</a><br><br>
                    </div>
                    <div class="col-12">
                        <a href="#"style="font-family: Source Sans Pro;font-style: normal;font-weight: 600;font-size:160%;line-height:90%;color: #F6EB42;">FEATURES</a><br><br>
                        <p style="padding:2%;">
                            <a href="#" class="footer-links">Blog</a><br> 
                            <a href="#" class="footer-links">Academia</a><br>
                            <a href="#" class="footer-links">HOS</a><br>
                        </p>
                    </div>
                    <div class="col-12">
                        <a href="#"style="font-family: Source Sans Pro;font-style: normal;font-weight: 600;font-size:160%;line-height:90%;color: #F6EB42;">MULTIMEDIA</a><br><br>
                        <p style="padding:2%;">
                            <a href="#" class="footer-links">Images</a><br> 
                            <a href="./events.php" class="footer-links">Event Gallery</a><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xs-12 mt-5">
                <div class="col-12 row " style="height:10rem;">
                    <a href="#">
                        <img style="height:11rem" class="img-fluid" src="../css/Images/PDF PLUG.svg" >     
                    </a>
                </div>
                <div class="col-12 mt-4 row">
                    <a class="col-12 mt-2" href="#" style="padding-left:25%;font-family: Source Sans Pro;font-style: normal;font-weight: 600;font-size:160%;line-height:90%;color: #F6EB42;">VIEW ARCHIVES</a><br><br>
                    <div class="col-6" style="text-align:left">
                        <a href="#" class="footer-links">PRIVACY POLICY</a><br>
                        <a href="./about.php" class="footer-links">WHO ARE WE?</a><br>
                        <a href="#" class="footer-links">OUR TEAM</a><br>
                    </div>
                    <div class="col-6" style="text-align:left">
                        <a href="#" class="footer-links">ADVERTISE WITH US</a><br>
                        <a href="#" class="footer-links">CONTACT US</a><br>
                        <a href="#" class="footer-links">DONATE</a><br>
                    </div>
                    <button type="button" class="button mt-4" style="margin-left: 25%;" ><a href="./writeforus.php">WRITE FOR US</a></button>
                </div>
            </div>
        </div>
        <div class="row col-12 mx-2">
            <div class="col-lg-4 col-md-1"></div>
            <div class="col-lg-4 col-md-7 row">
                <span class="col-5" style="font-family: Source Sans Pro;font-style: normal;font-size:125%;font-weight: 300;color: #DADADA;">Reach out to us</span>
                <div class="col-6 row">
                    <a class="col-2 mx-auto p-0" href="#"><img src="../css/Images/fb_white.svg" style="width:100%;padding:0%;"></a>
                    <a class="col-2 mx-auto p-0" href="#"><img src="../css/Images/insta_white.svg" style="width:100%;padding:0%;"></a>
                    <a class="col-2 mx-auto p-0" href="#"><img src="../css/Images/yt_white.svg" style="width:100%;padding:0%;"></a>
                    <a class="col-2 mx-auto p-0" href="#"><img src="../css/Images/Wordpress.svg" style="width:100%;padding:0%;"></a>
                </div>                                          
                <div class="col-12 text-center">
                    <a href="./teampage.php"><p class="mt-2 mx-auto dand">Design and Development Team</p></a>
                </div>
            </div>    
        </div>
    </footer>
</body>
<script>
   var select = function(s) {
    return document.querySelector(s);
  },
  selectAll = function(s) {
    return document.querySelectorAll(s);
  },
    hit = select('.hit'),
    allStars = selectAll('.starGroup *'),
    allClouds = selectAll('.cloud'),
    allCloudPuffs = selectAll('.cloud circle')
    
  

TweenMax.set('svg', {
  visibility: 'visible'
})
TweenMax.set(allStars, {
 transformOrigin:'50% 50%'
})
TweenLite.defaultEase = Elastic.easeOut.config(0.58,0.8);
var tl = new TimelineMax({paused:true});
tl.staggerTo(['.sun', '.moonMask', '.moon'], 1, {
 cycle:{
  attr:[{cx:'-=140', cy:'-=20'}, {cx:'-=140', cy:'-=20'}, {cx:'-=90',  cy:'-=0'}]
 }
},0)

.staggerTo(['.moon', '.sun'], 1, {
 cycle:{
  alpha:[1, 0]
 }
},0,'-=1')
.to('body', 1, {
 //backgroundColor:'#2C3E7B'
},'-=1')
.to('.outline', 1, {
 stroke:'#6172AD',
 fill:'#45568D'
},'-=1')

.staggerFrom(allStars, 0.9, {
 cycle:{
  x:[-20, 30, 40, -30, 60, -40, 80, 90, 100, 110, 120]
 },
 alpha:0
},0.005,'-=1')

.staggerTo(allClouds,1, {
 cycle:{
  x:[40, 20]
 },
 alpha:0
},0,'-=1')

.addPause()


.staggerTo(['.sun', '.moonMask', '.moon'], 1, {
 cycle:{
  attr:[{cx:'+=140', cy:'+=20'}, {cx:'+=140', cy:'+=20'}, {cx:'+=90',  cy:'+=0'}]
 }
},0)
.staggerTo(['.moon', '.sun'], 1, {
 cycle:{
  alpha:[0, 1]
 }
},0,'-=1')
.to('body', 1, {
 //backgroundColor:'#26D6FE',
 ease:Linear.easeNone
},'-=1')
.to('.outline', 1, {
 stroke:'#FCFDFE',
 fill:'#85E8FE'
},'-=1')
.staggerTo(allStars, 1, {
 alpha:0
},0,'-=1')
.staggerFromTo(allClouds, 0.6, {
 cycle:{
  y:[120, 160],
  x:[0]
 }
},
{ cycle:{
  y:[0],
 x:[0]
 },
 alpha:1,
 immediateRender:false
},0.06,'-=1')


.from(['.plane', '.contrail'], 0.7, {
 x:-400,
 ease:Linear.easeNone
},'-=1')

.to('.contrail',0.5, {
 alpha:0,
 ease:Sine.easeOut
})

$('.img-text-opinion').each(function() {
    $(this).css('padding','1% 2% 1% 2%');

});
$('.img-text').each(function() {
    $(this).css('margin-bottom','2%');
});
//ScrubGSAPTimeline(tl);
function clickToggle(e){
if(tl.time() > 0 && tl.time() < tl.duration()){
    tl.play();
    //console.log("dayy");
    $('body').css('background-color','#fff');
    $('.article').css('color','#000');
    $('.articleheader').css('color','#000');
    $('.name').css('color','#000');
    $('.rm').css('color','#000');
    $('.img-text').css('color','#000');
    $('.desk-img-text').css('color','#25242A');
    $('.desk-text').css('color','#898989');
    $('.popular-heading').css('color','#212529;');
    $('.about-article').css('color','#212529;');
} 
else{
    tl.play(0);
    //console.log("night");
    $('body').css('background-color','#000');
    $('.article').css('color','#fff');
    $('.articleheader').css('color','#fff');
    $('.name').css('color','#fff');
    $('.rm').css('color','#fff');
    $('.img-text').css('color','#F6EB42');
    $('.desk-img-text').css('color','#F6EB42');
    $('.desk-text').css('color','#fff');
    $('.popular-heading').css('color','#fff');
    $('.about-article').css('color','#fff');
}
}

tl.timeScale(1);
hit.onclick = clickToggle;
TweenMax.globalTimeScale(1.3);
</script>

</html>