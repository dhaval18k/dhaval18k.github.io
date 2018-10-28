<!DOCTYPE html>
<html>
<head>
 <title>Traveller's Point</title>
  <link rel="icon" type="image/jpg" href="logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
 <link rel="stylesheet" type="text/css" href="nav_style.css">
 
 <link rel="stylesheet" type="text/css" href="view_agency_style.css">
<link rel="stylesheet" type="text/css" href="index_style.css">
   

    
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
  <a href="contact.php"><i class="fa fa-envelope"></i> Contact</a> 
  <a  class="active" href="view_agency.php"><i class="fa fa-globe"></i> View Agencies</a> 

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
    
<section>
  <nav>
    
    <div class="dropdown">
  <button class="dropbtn">Badlapur</button>
  <div class="dropdown-content">
    <?php
            include 'conn.php';
            include 'query.php';


            $result=mysqli_query($conn,$query1);

            if(!$result)
            {
                die(mysql_error());
            }
            else
            {
                while($obj=$result->fetch_object())
                {
                    $agency_name=$obj->agency_name;
                    $agency_id=$obj->agency_id;
                    
                    echo'<a href="agency_card.php ?id='.$agency_id.'" target="iframe_a">'.$agency_name.'</a>';
     
                }
            }
      

    ?>
  </div>
    
   
    
</div>
    
<div class="dropdown">
     <button class="dropbtn">Kalyan</button>
  <div class="dropdown-content">
    <?php
            include 'conn.php';
            include 'query.php';


            $result=mysqli_query($conn,$query2);

            if(!$result)
            {
                die(mysql_error());
            }
            else
            {
                while($obj=$result->fetch_object())
                {
                    $agency_name=$obj->agency_name;
                    $agency_id=$obj->agency_id;
                    
                    echo'<a href="agency_card.php ?id='.$agency_id.'" target="iframe_a">'.$agency_name.'</a>';
                    
                }
            }
      

    ?>
  </div>
    
</div>
    
<div class="dropdown">
     <button class="dropbtn">Airoli</button>
  <div class="dropdown-content">
    <?php
            include 'conn.php';
            include 'query.php';


            $result=mysqli_query($conn,$query3);

            if(!$result)
            {
                die(mysql_error());
            }
            else
            {
                while($obj=$result->fetch_object())
                {
                    $agency_name=$obj->agency_name;
                    $agency_id=$obj->agency_id;
                    
                    echo'<a href="agency_card.php ?id='.$agency_id.'" target="iframe_a">'.$agency_name.'</a>';
                    
                }
            }
      

    ?>
  </div>
    
</div>
    </nav>
    <article>
   <iframe height="10000px" width="100%" style="border:none;" name="iframe_a" scrolling="no"></iframe>
  </article>
</section> 
    

    
    
    
   
    
     
    
</body>
</html>
