<!DOCTYPE html>
<html lang="en">
<head>
	<title>Somaiya Voices</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="..css/Images/favicon.ico"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=GFS+Didot&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/sports.css">
    <link rel="stylesheet" href="../css/landing.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
</head>


<body style="background-color: #fff; overflow-x: hidden;">
<div class = "loader">
	<div class = "blob-1"></div>
	<div class = "blob-2"></div>
</div>

<div class="topbar mb-0 pb-0">
		<div class="row col-12 mb-2 pt-4">
			<div class="col-md-5 col-sm-6 col-xs-8 mx-auto mb-1 text-center" style="padding-left: auto;">
				<img style="height:4rem;" class="img-fluid ml-2" src="../css/Images/voiceslogo.png" >
			</div>
		</div>
		<div class="navbar navbar-expand-md navbar-dark col-12" id="navbar" style="background-color:#000; padding:0px;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button> 
  			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<!-- Navbar links -->
				<ul class="navbar-nav col-md-7 col-sm-10 ml-auto mr-auto" >
					<li class="nav-item col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<a class="nav-link" href="./landing.php" style="color:#fff;letter-spacing:3px; font-weight:300;">HOME</a>
					</li>
					
					<li class="nav-item dropdown-news col-lg-2 col-md-2 col-sm-2 col-xs-2 ml-2">
						<a class="nav-link" href="./news.php" id="navbardrop" data-toggle="dropdown" style="color:#fff;letter-spacing:3px; font-weight:300;">
							NEWS
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="./news.php#events">Events</a>
							<a class="dropdown-item" href="./news.php#alumnispeak">Alumni Speak</a>
							<a class="dropdown-item" href="./news.php#studentlife">Student Life</a>
						</div>
					</li>

					<li class="nav-item dropdown-opinion col-lg-2 col-md-2 col-sm-2 col-xs-2 ml-2">
						<a class="nav-link" href="./opinion.php" id="navbardrop" data-toggle="dropdown" style="color:#fff;letter-spacing:3px; font-weight:300;">
							OPINION
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="./opinion.php#presidentsdesk">President's Desk</a>
                            <a class="dropdown-item" href="./opinion.php#mindspace">Mindspace</a>
                            <a class="dropdown-item" href="./opinion.php#conversation">Conversation</a>
							<a class="dropdown-item" href="./opinion.php#cornerstone">Cornerstone</a>
						</div>
					</li>

					<li class="nav-item col-lg-2 col-md-2 col-sm-2 col-xs-2 ml-2">
						<a class="nav-link" href="./sports.php" style="color:#fff;letter-spacing:3px; font-weight:300;">SPORTS</a>
					</li>

					<li class="nav-item dropdown-features col-lg-2 col-md-2 col-sm-3 col-xs-3 ml-2">
						<a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown" style="color:#fff;letter-spacing:3px; font-weight:300;">
							FEATURES
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Blog</a>
							<a class="dropdown-item" href="#">Academia</a>
							<a class="dropdown-item" href="#">Humans Of Somaiya</a>
						</div>
					</li>

					<li class="nav-item dropdown-multimedia col-lg-2 col-md-2 col-sm-3 col-xs-3 ml-2">
						<a class="nav-link" href="#" id="navbardrop" data-toggle="dropdown" style="color:#fff;letter-spacing:3px; font-weight:300;">
							MULTIMEDIA
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Images</a>
							<a class="dropdown-item" href="./events.php">Event Gallery</a>
						</div>
                    </li>
				
                </ul>
                
                <div class="col-1 mb-0 mr-5 pr-4 float-right" >
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
                            <defs>
                                <filter id="shadow" x="-100%" y="-100%" width="250%" height="250%">
                                <feGaussianBlur stdDeviation="4" result="coloredBlur" />
                                <feOffset dx="0" dy="0" result="offsetblur"></feOffset>
                                <feFlood id="glowAlpha" flood-color="#000" flood-opacity="0.07"></feFlood>
                                <feComposite in2="offsetblur" operator="in"></feComposite>
                                <feMerge>
                                    <feMergeNode/>          
                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                </feMerge>
                                </filter>   
                                <mask id="moonMask">
                        <rect id="outlineFill"  x="225" y="215" width="350" height="170" rx="86" ry="86" fill="#FFF" stroke="#000" stroke-width="0"/>
                        <circle class="moonMask" cx="487" cy="300" r="66" fill="#06070B"/>
                                </mask>
                            <clipPath id="outlineMask">
                            <use xlink:href="#outlineFill"/>
                            </clipPath>
                            
                        <path id="cloud" d="M20.67,42.52h39c22,0,18-16.52,11.19-17.51,1.93-7.5-1.94-25-23.19-25s-24,18-24,18S12.75,13.2,5,18.83C-3.8,25.15-2.33,42.52,20.67,42.52Z"/>   
                            </defs>
                            
                            <g class="whole" >
                                
                                <rect class="outline" x="220" y="210" width="360" height="180" rx="90" ry="90" fill="#85E8FE" stroke="#FCFDFE" stroke-width="10"/>
                                <g class="starGroup" fill="#FFF" clip-path="url(#outlineMask)">
                                <polygon points="405 248.25 406.58 254.42 412.75 256 406.58 257.58 405 263.75 403.42 257.58 397.25 256 403.42 254.42 405 248.25"/>
                                <path d="M427.33,301.9a1.5,1.5,0,0,0,0-3,1.5,1.5,0,0,0,0,3Z"/>
                                <path d="M402.59,367.21a1.5,1.5,0,0,0,0-3,1.5,1.5,0,0,0,0,3Z"/>
                                <polygon points="447 325.5 450.17 337.83 462.5 341 450.17 344.17 447 356.5 443.83 344.17 431.5 341 443.83 337.83 447 325.5"/>
                                <path d="M464,241.53a1.5,1.5,0,0,0,0-3,1.5,1.5,0,0,0,0,3Z"/>
                                <polygon points="496 274.25 497.58 280.42 503.75 282 497.58 283.58 496 289.75 494.42 283.58 488.25 282 494.42 280.42 496 274.25"/>
                                <path d="M503.53,351.38a1.5,1.5,0,0,0,0-3,1.5,1.5,0,0,0,0,3Z"/>
                                <path d="M537.18,249.45a1.5,1.5,0,0,0,0-3,1.5,1.5,0,0,0,0,3Z"/>
                                <path d="M553,322.68a1.5,1.5,0,0,0,0-3,1.5,1.5,0,0,0,0,3Z"/>
                                </g>     
                                <circle class="sun" cx="486" cy="300" r="66" fill="#FEC100"/>
                        <g mask="url(#moonMask)">
                                <circle class="moon" cx="403" cy="300" r="66" fill="#FFF" opacity="0"/>
                            </g>
                            
                                <g class="planeGroup" fill="#FFF" clip-path="url(#outlineMask)" opacity="1">
                                
                                <path class="plane" d="M611.12,262.15l-7.16,0-6.48-5.43-1.06.58,1.93,4.88-3.67.06-3.48-3.37-.78.36,1.26,3.05h-.58a27.07,27.07,0,0,0,4.6,2.24s8.57,0,12.37,0H611c.65,0,2.19,0,2.19-1.25C613.19,262.26,612.05,262.15,611.12,262.15Z"  fill="#fff"/>
                                <line class="contrail" x1="590.17" y1="264" x2="246.51" y2="264" fill="none" stroke="#fff" stroke-width="1"/>
                                    
                            </g>
                                <g class="cloudGroup" fill="#FFF" clip-path="url(#outlineMask)">
                                <g class="cloud" filter="url(#shadow)">
                                    <rect x="515.79" y="314.92" width="47.15" height="10.37" rx="5.19" ry="5.19"/>
                                    <circle cx="521.45" cy="313.98" r="11.32"/>
                                    <circle cx="540.84" cy="305.91" r="15.61"/>
                                    <circle cx="556.82" cy="316.34" r="8.96"/>
                                </g>       
                                <g class="cloud"  filter="url(#shadow)">
                                <rect x="397.85" y="349.02" width="92.34" height="10.37" rx="5.19" ry="5.19" transform="translate(888.03 708.41) rotate(180)"/>
                                    <circle cx="484.53" cy="348.08" r="11.32"/>
                                    <circle cx="432.65" cy="332.46" r="24.66"/>
                                    <circle cx="464.35" cy="338.11" r="17.51"/>
                                    <circle cx="404.21" cy="348.19" r="11.32"/>
                                </g>
                            </g>
                            </g>
                            <rect class="hit" x="220" y="210" width="360" height="180" rx="90" ry="90" fill="transparent" stroke="none" stroke-width="0"/>
                        </svg>
                    </div>
			</div>
		</div> 
    </div>
    

<script>
$(window).on("load", function() {
    $('body, html').css({'overflow-y': 'hidden',height: '100vh'});
	$(".loader").delay(1000).fadeOut("slow",function(){
        $('body, html').css({'overflow-y': 'auto',height: 'auto'});
        var hash = location.hash;
        if(hash != ''){
            $('html, body').animate({ scrollTop: $(hash).offset().top-150}, 500);
        }
    });
});
window.onscroll = function(){scroll()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function scroll() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
