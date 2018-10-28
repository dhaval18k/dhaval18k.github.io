<!DOCTYPE html>
<html>
    <head>
     <title>Traveller's Point</title>
  <link rel="icon" type="image/jpg" href="logo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
 <link rel="stylesheet" type="text/css" href="nav_style.css">
 
 <link rel="stylesheet" type="text/css" href="contact_style.css">
<link rel="stylesheet" type="text/css" href="index_style.css">
<link rel="stylesheet" type="text/css" href="register_style.css">        
        <style>
         .tk
        {
            font-size: 40px;
            color: black;
        }
        .btn
        {
            font-size: 20px;
            border-radius: 5px;
            height: 40px;
            width: 150px;
            color: white;
            background: tomato;
        }
        
        </style>
</head>
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
  <a href="index.php"><i class="fa fa-home"></i> Home</a> 
  <a class="active" href="contact.php"><i class="fa fa-envelope"></i> Contact</a> 
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

    
<br>
    <br>
  <div align="center"><h1>Contact Us !</h1></div>
    
    <p>
        <div class="row">
  <div class="column" style="background-color:#FFFFFF;">

        <table cellspacing="20">
            <tr>
            <td><i class="fa fa-address-card fa1" ></i></td>
                <td>ADDRESS</td>
 </tr>
            <tr>
            <td></td>
            <td>Sarvoday Pooja, Ground Floor, Kalyan (west)</td>    
            </tr>
            
               <tr>
            <td><i class="fa fa-envelope fa1"></i></td>
                <td>EMAIL US AT</td>
 </tr>
            <tr>
            <td></td>
            <td>travellers_point@gmail.com</td>    
            </tr>

         <tr>
            <td><i class="fa fa-phone fa1"></i></td>
                <td>CONTACT US AT</td>
 </tr>
            <tr>
            <td></td>
            <td>+91 9987838756</td>    
            </tr>
      <tr>
            <td></td>
            <td>+91 9987529372</td>    
            </tr>
      
      </table>
      
      <table cellspacing="30">
      <tr>
    <td><a href="https://www.instagram.com/travellers_point/?hl=en">
  <i class="fa fa-instagram fa1" ></i>
</a></td>
            <td><a href="https://www.facebook.com/travellers_point">
  <i class="fa fa-facebook-f fa1" ></i>
</a></td>
            <td><a href="https://in.linkedin.com/in/travellers_point">
  <i class="fa fa-linkedin fa1" ></i>
</a></td>
          </tr>
      </table>
          <table cellspacing="30">
          <tr>
          <td>
              
              <div id="demo" align="center">
        <p class="tk">Now we are available in cities ...</p>
            <h1>
                <button type="button" onclick="loadDoc()" class="btn">Click to See</button>
            </h1>
            
        </div>
              
              </td></tr>
      </table>      
            </div>


    </div>
       
        <script>
            
        function loadDoc()
        {
            var xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange=function()
            {
                if(this.readyState==4 && this.status==200)
                {
                    document.getElementById("demo").innerHTML=this.responseText;        
                }
            };
            
            xhttp.open("GET","agency.html",true);
            xhttp.send();    
        }
            
    </script>
            
    
    
    
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
