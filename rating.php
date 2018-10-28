<?php
session_start();


?>




<?php

include 'conn.php';
include 'query.php';



$a_id=$_SESSION['a_id'];


if(isset($_POST['submit']))
{
    
 
    $rate=$_POST['rate'];
 
    
    if($rate==1)
    {
        
       // $conn = new mysqli("localhost","root","","tp");

        $query1="select r1 from agency where agency_id=$a_id";

        $result=mysqli_query($conn,$query1);

        if(!$result)
        {
            die(mysql_error());
        }
        else
        {
            while($obj=$result->fetch_object())
            {
                
                $r1=$obj->r1;
               // echo $r1;
                
                $new_rate=$r1+1;
                
                
        
            }
        }
        //echo $new_rate;
        
        $update1="update agency set r1=$new_rate where agency_id=$a_id"; 
        
        if($conn->query($update1))
        {
            echo '<p class="p-align">Thanks For Your Rating !!!</p>';
    
        }
        
      
    
    }
    
    if($rate==2)
    {
        
        //$conn = new mysqli("localhost","root","","tp");

        $query2="select r2 from agency where agency_id=$a_id";

        $result=mysqli_query($conn,$query2);

        if(!$result)
        {
            die(mysql_error());
        }
        else
        {
            while($obj=$result->fetch_object())
            {
                
                $r2=$obj->r2;
               // echo $r1;
                
                $new_rate=$r2+1;
                
                
        
            }
        }
        //echo $new_rate;
        
        $update2="update agency set r2=$new_rate where agency_id=$a_id"; 
        
        if($conn->query($update2))
        {
            echo '<p class="p-align">Thanks For Your Rating !!!</p>';
    
        }
    }
    if($rate==3)
    {
        //$conn = new mysqli("localhost","root","","tp");

        $query3="select r3 from agency where agency_id=$a_id";

        $result=mysqli_query($conn,$query3);

        if(!$result)
        {
            die(mysql_error());
        }
        else
        {
            while($obj=$result->fetch_object())
            {
                
                $r3=$obj->r3;
               // echo $r1;
                
                $new_rate=$r3+1;
                
                
        
            }
        }
        //echo $new_rate;
        
        $update3="update agency set r3=$new_rate where agency_id=$a_id"; 
        
        if($conn->query($update3))
        {
            echo '<p class="p-align">Thanks For Your Rating !!!</p>';
    
        }
        
        
    }
    if($rate==4)
    {
    //    $conn = new mysqli("localhost","root","","tp");

        $query4="select r4 from agency where agency_id=$a_id";

        $result=mysqli_query($conn,$query4);

        if(!$result)
        {
            die(mysql_error());
        }
        else
        {
            while($obj=$result->fetch_object())
            {
                
                $r4=$obj->r4;
               // echo $r1;
                
                $new_rate=$r4+1;
                
                
        
            }
        }
        //echo $new_rate;
        
        $update4="update agency set r4=$new_rate where agency_id=$a_id"; 
        
        if($conn->query($update4))
        {
            echo '<p class="p-align">Thanks For Your Rating !!!</p>';
    
        }
        
        
        
    }
    if($rate==5)
    {
      //  $conn = new mysqli("localhost","root","","tp");

        $query5="select r5 from agency where agency_id=$a_id";

        $result=mysqli_query($conn,$query5);

        if(!$result)
        {
            die(mysql_error());
        }
        else
        {
            while($obj=$result->fetch_object())
            {
                
                $r5=$obj->r5;
               // echo $r1;
                
                $new_rate=$r5+1;
                
                
        
            }
        }
        //echo $new_rate;
        
        $update5="update agency set r5=$new_rate where agency_id=$a_id"; 
        
        if($conn->query($update5))
        {
           echo '<p class="p-align">Thanks For Your Rating !!!</p>';
    
        }
    }
    
}



?>


<html>
    <head>
        <link rel="stylesheet" href="rating.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
    <form method="post" action="rating.php">
        
        
        
    
        <div class="center-console" align="center">
            <div>
                <p>
                Rating
                
                </p>
            
            </div>
            <div>
            
                <img src="stars.jpg" class="star">
            </div>
            
            <div>
            
            <input type="text" placeholder="Rate For 1 To 5 Stars" class="rate-tb" name="rate">
            
            <input type="submit" name="submit" value="Rate" class="rate-btn"/>

            </div>
           
        
        </div>
    
    </form>    
        
            
        
        
    </body>
</html>