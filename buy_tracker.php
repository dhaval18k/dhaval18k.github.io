<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
     <title>Traveller's Point</title>
  <link rel="icon" type="image/jpg" href="logo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="agency_nav_style.css">
<link rel="stylesheet" type="text/css" href="buy_tracker_style.css">
    
    </head>
<body>

    <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
    
    
    
    
    
     <div>
     <div align="center">
    <h1 class="logo">Traveller's Point</h1>
    
  <strong class="logo2" >We All Travel For Life !</strong> 
  <div class="user_det">
    <form method="post" action="agency_logout.php">
        <i class="fa fa-user fa1" align="right"></i><br>
        
         <?php 
        session_start();
        $email= $_SESSION['email'];
        $sql="SELECT agency_name FROM agency WHERE email='$email'";
        
        if($result=mysqli_query($conn,$sql))
        {
            $row=mysqli_fetch_assoc($result);
                $agency_name=$row["agency_name"];
            echo strtoupper($agency_name),"<br>","<br>";    
        }
        ?>
      
        
        <button class="button button3" type="submit">LOG OUT</button> 
    </form>
  </div>
    </div>
    </div>
    <br>
    
<div class="topnav" id="myTopnav">
  <a href="agency_begin.php" ><i class="fa fa-home"></i> Home</a>
    <a href="buy_drone.php"><i class="fa fa-shopping-cart" ></i> Buy Drone</a>
  <a href="buy_tracker.php" class="active"><i class="fa fa-shopping-cart"></i> Buy Tracker</a>
  <a href="upload_pictures.php"><i class="fa fa-upload"></i> Upload Pics</a>
  <a href="update_profile.php"><i class="fa fa-edit"></i> Update Profile</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
    
     <div align="center"><h1>
       
       <?php 
        $sql="SELECT agency_name FROM agency WHERE email='$email'";
        
        if($result=mysqli_query($conn,$sql))
        {
            $row=mysqli_fetch_assoc($result);
                $agency_name=$row["agency_name"];
            echo strtoupper($agency_name),"<br>","<br>";    
        }
       ?>
       
       </h1></div> 


     <div class="column">
   <img src="tracker.png" alt="Tracker" class="drone_img">
  </div>
  <div class="column">
    <h2>GPS Tracker</h2>
      <h3>Description : </h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
      
  </div>
    
  <button class="button button3" type=""> BUY </button>
       
    </body>
</html>
