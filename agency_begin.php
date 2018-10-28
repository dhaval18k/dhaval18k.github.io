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
<link rel="stylesheet" type="text/css" href="agency_begin_style.css">
    </head>
<body>
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
    <hr>
    <br>

<div class="row">
<a href="buy_drone.php">
 <div class="column">
    <div class="card">
      <p><i class="fa fa-shopping-cart"></i></p>
      <h3>Buy Drone</h3>
    </div>
  </div>
</a>

<a href="buy_tracker.php">
 <div class="column">
    <div class="card">
      <p><i class="fa fa-shopping-cart"></i></p>
      <h3>Buy Tracker</h3>
    </div>
  </div>
</a>
  
<a href="upload_pictures.php">
 <div class="column">
    <div class="card">
      <p><i class="fa fa-upload"></i></p>
      <h3>Upload Pics</h3>
    </div>
  </div>
</a>
  
<a href="update_profile.php">
 <div class="column">
    <div class="card">
      <p><i class="fa fa-edit"></i></p>
      <h3>Update Profile</h3>
    </div>
  </div>
</a>

</div>
        
       
        <br>
        <br>

    <div align="center"><h1>
       <?php 
        $sql="SELECT agency_name FROM agency WHERE email='$email'";
        
        if($result=mysqli_query($conn,$sql))
        {
            $row=mysqli_fetch_assoc($result);
                $agency_name=$row["agency_name"];
            echo 'Welcome '.strtoupper($agency_name).'!!!';    
        }
       ?>
       
       </h1></div>  
    
    
</body>
</html>
