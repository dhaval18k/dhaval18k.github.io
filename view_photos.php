<?php
 include 'conn.php';
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="upload_pictures_style.css">

</head>
<body>

<div class="flex-container">
    <?php  
     include 'query.php';
     $agency_id=$_GET['id'];
                
        $query1="select agency_name from agency where agency_id=$agency_id";
        $result=mysqli_query($conn,$query1);
        $row=mysqli_fetch_assoc($result);
        $agency_name=$row["agency_name"];   
        $tablename=$agency_name;
        
    
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