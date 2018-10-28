

<!DOCTYPE html>
<html>
<head>
     <title>Traveller's Point</title>
  <link rel="icon" type="image/jpg" href="logo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
 <link rel="stylesheet" type="text/css" href="nav_style.css">
 <link rel="stylesheet" type="text/css" href="login_style.css">

        
</head>
<body>

    <div align="center">
    <h1 class="logo">Traveller's Point</h1>
    
    
  <strong class="logo2" >We All Travel For Life !</strong> 
    </div>
    
    
<div class="icon-bar" id="myTopnav">
  <a  href="index.php"><i class="fa fa-home"></i> Home</a> 
  <a href="contact.php"><i class="fa fa-envelope"></i> Contact</a> 
   <a href="view_agency.php"><i class="fa fa-globe"></i> View Agencies</a> 

    <a href="about_us.php"><i class="fa fa-user"></i> About Us</a>
   
    <div class="icon-bar-right">
     <a class="active" class="icon-bar-right" href="agency_login.php"><i class="fa fa-sign-in"></i> Login</a>
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
    <br>
  <div class="container-fluid box1 center">
  <form  method="post" action="agency_login_code.php">
 <div><h1>Login Page</h1></div>
  <div class="container1">
   
    <input type="text" placeholder="Enter Email-Id" name="email" required>

   
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button class="button button3" type="submit">LOGIN</button>
   
 

    <button class="button button3" type="button">Cancel</button>
    
  </div>
</form>
    </div>
   

    
</body>
</html>
