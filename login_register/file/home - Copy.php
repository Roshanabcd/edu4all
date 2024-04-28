<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Education For All</title>
	<link rel="stylesheet" href="./style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/x-icon" href="img/logo.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  

    <link rel="stylesheet" href="style2.css">

</head>
<body>
    
<div class="header-main-size">
	<div class="header-main">
		<div class="header-main-left">
			<a class="pass-link active" href="#"><img src="img/LOGO.png"  alt="Passion Logo" ></a>
		</div>
	<div class="header-main-right">
		<div class="header-nav topnav" id="myTopnav">
		<a class="homeMenus pass-links slide-animate" href="#">Home</a>
		<div class="main-menu">
		<a class="slide-animate" href="#">
			<div class="flex-iconMenu">Services
				<i class="fa fa-angle-down"></i>
			</div>
		</a>
		<div class="main-sub-menu">
			<div class="sub-menu">
				<a class="pass-links" href="#">Web Design</a>
				<a class="pass-links" href="#">Graphic Design</a>
			</div>
		</div>
		</div>
		<a class="pass-links slide-animate" href="#">Jobs</a>
		<div class="main-menu">
			<a  class="pass-links slide-animate active" href="#">
				<div class="flex-iconMenu">Designs 
					<i class="fa fa-angle-down"></i>
				</div>
			</a>
			<div class="main-sub-menu">
				<div class="sub-menu">
					<a class="pass-links" href="#">Designs 1</a>
					<a class="pass-links" href="#">Designs 2</a>
				</div>
			</div>
		</div>
		<a class="pass-links slide-animate" href="#">Community</a></div>
		<a class="pass-link" href="../login_form.php">Login <br>SignUp</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
	</div>
	</div>
</div>

<div class="mainBubbles">
	<div class="bubbles">
		<div class="bubble"></div>
		<div class="bubble"></div>
		<div class="bubble"></div>
		<div class="bubble"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="left-content">
						<h1>Welcome To Education for all Website</h1>
						<div class="textTyping">
							<span id='text'></span>
							<div class='underscoreIcon' id='underscoreID'>&#95;</div>
						</div>
						<p>Education for All provide Engineering, Medical, Language, Business and marketing Course and materials</p>
						
						<div class="startJoin">
							<button class="startStudent">Subscribe <i class="fa fa-angle-right"></i></button>
							<button class="joinInstruc">Learn More <i class="fa fa-angle-right"></i></button>
						</div>
						
					</div>
				</div>
				<div class="col">
					<div class="right-content">
						<img src="img/right-side.png"  alt="" />
					</div>
				</div>
			</div>
		</div>
		<div class="bubble"></div>
		<div class="bubble"></div>
		<div class="bubble"></div>
		<div class="bubble"></div>
	</div>
</div>
<main></main>






<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" style="background-image: url(img/cont.png);height: 550px;" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Online Course.</h1>
          <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"style="background-image: url(img/certificate.png);height: 550px;" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
      <div class="container">
        <div class="carousel-caption">
          <h1>Certificate.</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" style="background-image: url(img/job.png);height: 550px;" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
      <div class="container">
        <div class="carousel-caption text-end">
          <h1>Jobs  & Training. after Complitation Course </h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</main>
<h1>
  <a href="Bug_Bounty_Android_Hacking.html">Bug Bounty Android Hacking</a> 
</h1>
<h2><a href="header.php">header only</a></h2>

    <footer>
        <div>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>

        </div></div>
        <br><br><br><br>
        <ul class="social_icon">
            <li>
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
            </li>
            <li>
                <a href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>

            </li>
            <li>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
            </li>
            <li>
                <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
            </li>
            <li>
              <a href="https://api.whatsapp.com/send?phone=+9779765887074&text=Hey, I need help">
                <i class="fa fa-whatsapp my-float mt-0"></i>
                </a>
            </li>
            
        </ul>
        <ul class="menu1">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Courses</a>
            </li>
            <li>
                <a href="#">About Us</a>
            </li>
            <li>
                <a href="#">Contact Us</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Login And Sign UP</a>
            </li>
            

        </ul><br>
        <p>
            &copy; 2021 All rights reserved | This template is made with Roshan Sharma
        </p>
        
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="./script2.js"></script>
    
</body>
</html>