<!DOCTYPE html>
<html>
    <head>
    
 
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="index_style.css">
    <link rel="stylesheet" href="section_counter_style.css">
    <link rel="stylesheet" href="t1_style.css">

    <body>
    
<div class="header">
  <img src="bg.jpg">
     <div class="centered">
         <div class="logo">
            Traveller's Point
         </div>
        <div class="logo2">
      We All Travel For Life !!!
         </div>
  </div>
</div>
    
<div class="icon-bar" id="myTopnav">
  <a class="active" href="index.php"><i class="fa fa-home"></i> Home</a> 
  <a href="#"><i class="fa fa-envelope"></i> Contact</a> 
  <a href="#"><i class="fa fa-globe"></i> View Agencies</a> 

    <a href="#"><i class="fa fa-user"></i> About Us</a>
   
    
    <div class="icon-bar-right">
     <a class="icon-bar-right" href="agency_login.php"><i class="fa fa-sign-in"></i> Login</a>
    <a  class="icon-bar-right" href="agency_register.php"><i class="fa fa-user-plus"></i> RegisterHere</a>

    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    
    </div> 
 
   
   


    <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "icon-bar") {
        x.className += " responsive";
    } else {
        x.className = "icon-bar";
    }
}
</script>
<div class="content">
   <p class="p1"> 
    
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
                <img src="/tp/img/img1.jpg" style="width:100%">
                <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
                <img src="/tp/img/img2.jpg" style="width:100%">
                <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
                <img src="/tp/img/img4.jpg" style="width:100%">
                <div class="text">Caption Three</div>
        </div>

    </div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() 
{
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++)
    {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) 
        {
            dots[i].className = dots[i].className.replace(" active", "");
        }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

       
     </p>
    </div>

    
    
    
    
    
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("myTopnav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html> 
