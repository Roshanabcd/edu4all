<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Education For All</title>
	<!-- <link rel="stylesheet" href="./style.css"> -->
    <style>* {
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif;
    }
    
    .header-main {
        display: flex;
        justify-content: space-between;
        align-items: center;
        
        padding: 0 30px;
        width: 85%;
        margin: 0 auto;
    }
    
    .pass-link img {
        width: 50px;
    }
    
    .header-main-right {
        display: flex;
        justify-content: right;
        width: 70%;
        align-items: center;
    }
    
    .header-nav {
        margin-right: 40px;
        display: flex;
    }
    
    .main-menu {
        position: relative;
        display: grid;
    }
    
    .flex-iconMenu {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .flex-iconMenu i {
        font-size: 20px;
        margin-left: 5px;
        font-weight: 600;
    }
    
    .main-sub-menu {
        position: absolute;
        left: -170px;
        z-index: 9;
        top: 200px;
        visibility: hidden;
        transition: top 0.7s;
    }
    
    .main-menu:hover .main-sub-menu {
      visibility: visible;
      top: 70px;
    }
    
    .sub-menu {
        display: grid;
        background: #ffff;
        width: 270px;
        border: 1px solid #eee;
        border-radius: 4px;
        box-shadow: 0px 2px 4px rgb(0 0 0 / 4%), 0px 8px 16px rgb(0 0 0 / 8%);
    }
    
    .sub-menu a.pass-links {
        padding: 15px 18px;
    }
    
    .sub-menu a.pass-links:hover {
        background-color: #f7f7f7;
    }
    
    .header-main-right a {
        color: #000;
        padding-left: 30px;
        font-size: 18px;
        font-weight: 500;
        text-decoration: none;
        padding: 27px 18px;
        position: relative;
    }
    
    .slide-animate:hover::before {
        background-size: 100% 5px;
    }
    
    .slide-animate:before {
        content: '';
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0px;
        background-image: linear-gradient(90deg, #03A9F4, #03A9F4);
        background-size: 0 5px;
        background-repeat: no-repeat;
        transition: background-size 0.3s ease-in;
    }
    
    .homeMenus::before {
        background-size: 100% 5px;
    }
    
    .header-main-right .pass-link {
        background: linear-gradient(105.69deg, #2a45e3 0%, #03a7f1 43.23%);
        color: #fff;
        padding: 12px 24px;
        border-radius: 4px;
        font-weight: 600;
    }
    
    .mainBubbles {
        z-index: 1;
        position: relative;
        background-color: #fff;
        padding: 90px 0 220px;
        overflow: hidden;
    }
    
    .mainBubbles::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        background-color: #37517e;
        width: 100%;
        height: 100%;
        z-index: -1;
        clip-path: polygon(0 0, 100% 0, 100% 50%, 0% 100%);
    }
    
    .row {
        display: flex;
        flex-flow: row wrap;
    }
    
    .col {
        width: 50%;
    }
    
    .left-content h1 {
        font-size: 52px;
        color: #fff;
        font-weight: 700;
        line-height: normal;
    }
    
    .left-content h1 span {
        color: #f97316;
    }
    
    .bubbles {
      width: 100%;
      height: 100%;
    }
    .bubble {
      position: absolute;
      bottom: -100px;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      opacity: 0.5;
      animation: rise 10s infinite ease-in;
      background: linear-gradient(105.69deg, #2a45e3 0%, #03a7f1 43.23%);
    }
    .bubble:nth-child(1) {
      width: 30px;
      height: 30px;
      left: 10%;
      animation-duration: 7s;
    }
    .bubble:nth-child(2) {
      width: 20px;
      height: 20px;
      left: 20%;
      animation-duration: 10s;
      animation-delay: 7s;
    }
    .bubble:nth-child(3) {
      width: 50px;
      height: 50px;
      left: 35%;
      animation-duration: 7s;
      animation-delay: 5s;
    }
    .bubble:nth-child(4) {
      width: 40px;
      height: 40px;
      left: 50%;
      animation-duration: 10s;
      animation-delay: 6s;
    }
    .bubble:nth-child(5) {
      width: 35px;
      height: 35px;
      left: 55%;
      animation-duration: 6s;
      animation-delay: 1s;
    }
    .bubble:nth-child(6) {
      width: 45px;
      height: 45px;
      left: 65%;
      animation-duration: 8s;
      animation-delay: 7s;
    }
    .bubble:nth-child(7) {
      width: 40px;
      height: 40px;
      left: 70%;
      animation-duration: 10s;
      animation-delay: 7s;
    }
    .bubble:nth-child(8) {
      width: 25px;
      height: 25px;
      left: 80%;
      animation-duration: 10s;
      animation-delay: 9s;
    }
    .bubble:nth-child(9) {
      width: 15px;
      height: 15px;
      left: 70%;
      animation-duration: 7s;
      animation-delay: 1s;
    }
    .bubble:nth-child(10) {
      width: 90px;
      height: 90px;
      left: 25%;
      animation-duration: 7s;
      animation-delay: 5s;
    }
    @keyframes rise {
      0% {
        top: -100px;
        transform: translateX(0);
      }
      50% {
        transform: translate(100px);
      }
      100% {
        top: 1080px;
        transform: translateX(-200px);
      }
    }
    
    .textTyping span {
        background: linear-gradient(105.69deg, #2a45e3 0%, #03a7f1 43.23%);
        color: #fff;
        min-height: 78px;
        padding: 5px 16px;
        border-radius: 4px;
        font-weight: 700;
        font-size: 50px;
    }
    
    .textTyping {
        margin: 30px 0 15px 0;
    }
    
    .left-content p {
        color: #fff;
        font-size: 18px;
        line-height: 1.5715;
    }
    
    button.startStudent {
        background: linear-gradient(105.69deg, #2a45e3 0%, #03a7f1 43.23%);
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.06), 0px 16px 24px rgba(0, 0, 0, 0.08);
        height: 54px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: #ffffff;
        background-color: #6a307d;
        border-radius: 4px;
        padding: 0 24px;
        line-height: 48px;
        border: none;
        font-size: 18px;
        margin-right: 20px;
        cursor: pointer;
        border: 2px solid rgb(255 255 255 / 56%);
    }
    
    button.joinInstruc {
        background: transparent;
        box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.06), 0px 16px 24px rgba(0, 0, 0, 0.08);
        height: 54px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: #ffffff;
        background-color: transparent;
        border-radius: 4px;
        padding: 0 24px;
        line-height: 48px;
        border: none;
        font-size: 18px;
        cursor: pointer;
        border: 2px solid rgb(255 255 255 / 56%);
    }
    
    button.startStudent:hover {
        background: transparent;
        border: 2px solid rgb(255 255 255 / 56%);
    }
    
    button.joinInstruc:hover {
        background: linear-gradient(105.69deg, #2a45e3 0%, #03a7f1 43.23%);
    }
    
    .startJoin i {
        margin-left: 10px;
        font-size: 20px;
        font-weight: 600;
    }
    
    .startJoin {
        margin-top: 30px;
    }
    
    a.icon {
        padding: 0;
        margin-left: 10px;
        display: none;
    }
    
    .right-content {
        text-align: center;
        position: relative;
    }
    
    .right-content img {
        width: 70%;
        position: absolute;
        top: -20px;
        left: 0;
        right: 0;
        margin: 0 auto;
    }
    
    @media (min-width: 1400px) {
        .container {
            max-width: 1320px;
            margin: 0 auto;
        }
    }
    
    @media (max-width: 1400px) {
        .container {
            max-width: 90%;
            margin: 0 auto;
        }
        .header-main {
            padding: 0 10px;
            width: 95%;
        }
        .header-main-right a {
            font-size: 15px;
        }
        .textTyping span {
            font-size: 40px;
        }
    }
    
    @media (max-width: 800px) {
        .header-main {
            padding: 10px 10px;
            width: 90%;
        }
        .pass-link img {
            width: 130px;
        }
        a.icon {
            display: block;
        }
        .topnav a{
            display: none;
        }
        .topnav.responsive {
            position: relative;
        }
        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        .topnav.responsive a {
            text-align: center;
            display: block;
            color: #fff;
        }
        .topnav.responsive {
            position: absolute;
            z-index: 999;
            top: 60px;
            background: #000;
            left: 0;
            right: 0;
            display: grid;
            align-items: center;
            justify-content: center;
            margin-right: 0;
        }
        .main-menu:hover .main-sub-menu {
            top: 0;
            left: 0;
            position: relative;
            transition: left 1s;
        }
        .sub-menu {
            background: none;
            border: none;
            box-shadow: none;
        }
        .slide-animate:before {
            display: none;
        }
        .col {
            width: 90%;
            margin: 0 auto;
        }
        .mainBubbles::before {
            clip-path: polygon(0 0, 100% 0, 150% 50%, 0% 100%);
        }
        .left-content h1 {
            font-size: 40px;
        }
        .textTyping span {
            font-size: 26px;
        }
        .header-main-right .pass-link {
            padding: 12px 17px;
            font-size: 16px;
        }
        button.startStudent {
            width: 100%;
            margin-bottom: 20px;
        }
        button.joinInstruc {
            width: 100%;
        }
        .right-content img {
            width: 90%;
            top: 30px;
        }
        .mainBubbles {
            height: 90vh;
        }
    }</style>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/x-icon" href="img/logo.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">


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

</head>
<body>
    
<div class="header-main-size">
	<div class="header-main">
		<div class="header-main-left">
			<a class="pass-link active" href="#"><img src="img/LOGO.png"  alt="Logo" ></a>
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
		<a class="pass-link" href="#">Login<br><br>Register</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
	</div>
	</div>
</div>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- <script src="./script2.js"></script> -->
<script>
    // Header mobile menu Code
function myFunction() {
  var menuX = document.getElementById("myTopnav");
  if (menuX.className === "topnav header-nav") {
    menuX.className += " responsive";
  } else {
    menuX.className = "topnav header-nav";
  }
}


// Bubbles Code
IconText(['You can learn Web Development.', 'You can learn Application Development', 'You can learn Hacking'], 'text',['#fff','#fff','#fff']);

function IconText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var conn = document.getElementById('underscoreID');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  window.setInterval(function() {
    if (visible === true) {
      conn.className = 'underscoreIcon hidden'
      visible = false;

    } else {
      conn.className = 'underscoreIcon'

      visible = true;
    }
  }, 400)
}
</script>

    
</body>
</html>