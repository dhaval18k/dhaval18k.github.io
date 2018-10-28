<? php
    include 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Traveller's Point</title>
  <link rel="icon" type="image/jpg" href="logo.jpg">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="index_style.css">
    
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
  <a href="contact.php"><i class="fa fa-envelope"></i> Contact</a> 
  <a href="view_agency.php"><i class="fa fa-globe"></i> View Agencies</a> 

    <a href="about_us.php"><i class="fa fa-user"></i> About Us</a>
   
    
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

    
    <div class="slideshow-container">
       
<?php 
for ($x = 0; $x <= 10; $x++) 
{
    
        echo '<div class="mySlides fade">';
               
            
         
            include 'connection.php';
            $query = "SELECT * FROM all_imgs ORDER BY RAND() LIMIT 1";         
            $result=mysqli_query($conn,$query);
   
            while($row=mysqli_fetch_assoc($result))  
            {  
                $agency_name=$row["agency_name"]; 
                echo '<img src="data:image/*;base64,'.base64_encode($row['img'] ).'"/>';  
                echo '<div class="text">'.strtoupper($agency_name).'</div>'; 
            }
            echo '</div>';
}
?>
        
       

</div>
<br>



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
    if (slideIndex > slides.length) 
    {
        slideIndex = 1
    }    
    slides[slideIndex-1].style.display = "block";  
    
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>
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
