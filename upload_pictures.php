<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Traveller's Point</title>
  <link rel="icon" type="image/jpg" href="logo.jpg">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="agency_nav_style.css">
<link rel="stylesheet" type="text/css" href="upload_pictures_style.css">

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
    
<div class="topnav" id="myTopnav">
  <a href="agency_begin.php" ><i class="fa fa-home"></i> Home</a>
    <a href="buy_drone.php"><i class="fa fa-shopping-cart" ></i> Buy Drone</a>
  <a href="buy_tracker.php" ><i class="fa fa-shopping-cart"></i> Buy Tracker</a>
  <a href="upload_pictures.php" class="active"><i class="fa fa-upload"></i> Upload Pics</a>
  <a href="update_profile.php"><i class="fa fa-edit"></i> Update Profile</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

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

    
  
    <div>
      <form action="upload_pictures.php" method="post" enctype="multipart/form-data">  
          <input type="file" name="image" id="image" />  
                <br>
          <br>
          <input type="submit" name="insert" id="insert" value="Insert" /> 
  <?php
        
        $email= $_SESSION['email'];
        $sql="SELECT agency_name FROM agency WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $agency_name=$row["agency_name"];   
        $tablename=$agency_name;
         
          
     if(isset($_POST["insert"]))  
    {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      
       $query1 = "INSERT INTO `" . $tablename . "`(name) VALUES ('".$file."')";
        $query2= "INSERT INTO all_imgs VALUES ('".$agency_name."','".$file."')"; 
      if($conn->query($query1))  
      {  
          mysqli_query($conn,$query2);
           echo '<script>alert("Image Inserted into Database")</script>';  
      }
         else
         {
             $sql="CREATE TABLE `" . $tablename . "`(id int AUTO_INCREMENT PRIMARY KEY, name longblob)";
             mysqli_query($conn,$sql);
             mysqli_query($conn,$query1);
             mysqli_query($conn,$query2);
             echo '<script>alert("Image Inserted into Database")</script>'; 
             
         }
     
  } 
          
?>
      </form>
        
      
      </div>  
 <div class="flex-container">
    <?php  
     error_reporting(0);
    $query = "SELECT * FROM `" . $tablename . "` ORDER BY id DESC";  
    $result = $conn->query($query);
   
     while($row = $result->fetch_assoc())  
    {  
        echo '  
        <div class="divflex">  
        <img src="data:image/*;base64,'.base64_encode($row['name'] ).'"/> </div>    
        ';  
    }
      $conn->close();
    ?>     
      
      
  
 
 
</div> 

  </body>
    </html>
<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
  