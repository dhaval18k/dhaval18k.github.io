<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agency Card</title>
    <link rel="stylesheet" href="agency_card_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body>
      <div class="outer">
            <h2 id="i1">Agency Card</h2>
            <?php
                include 'conn.php';
                
                include 'query.php';
                $agency_id=$_GET['id'];
                
                $query1="select agency_name from agency where agency_id=$agency_id";

                $result=mysqli_query($conn,$query1);

                if(!$result)
                {
                    die(mysql_error());
                }
                else
                {
                    while($obj=$result->fetch_object())
                {
                    echo'<div align="center">';   
                    echo'<h3 id="i2">'.$obj->agency_name.'</h3>';        
                    echo'</div>';
                }   
                }
            ?>
        <div class="card">
            
          <img id="img1" src="hotel1.jpg" alt="hotel1">
        <h1><?php
            
            
            ?></h1>
        <p class="title">Founder
            <?php
                include 'conn.php';
                
                include 'query.php';
                $agency_id=$_GET['id'];
            
                $query1="select o_fname,o_lname from agency where agency_id=$agency_id";

                $result=mysqli_query($conn,$query1);

                if(!$result)
                {
                    die(mysql_error());
                }
                else
                {
                    while($obj=$result->fetch_object())
                {
                      
                    echo'<h3 class="title1">'.$obj->o_fname.'&nbsp'.$obj->o_lname.'</h3>';  
                    
                  
                }   
                }
            ?>
            
            
            </p>
        <p class="title">Address 
            <?php
               include 'conn.php';
                
                include 'query.php';
                $agency_id=$_GET['id'];
            
                $query1="select addr from agency where agency_id=$agency_id";

                $result=mysqli_query($conn,$query1);

                if(!$result)
                {
                    die(mysql_error());
                }
                else
                {
                    while($obj=$result->fetch_object())
                {
                      
                    echo'<h3 class="title1">'.$obj->addr.'</h3>';        
                  
                }   
                }
            ?>
            
            
            </p>
            <p class="title">Contact 
                <?php
               include 'conn.php';
                
                include 'query.php';
                $agency_id=$_GET['id'];
                
                $query1="select contact from agency where agency_id=$agency_id";

                $result=mysqli_query($conn,$query1);

                if(!$result)
                {
                    die(mysql_error());
                }
                else
                {
                    while($obj=$result->fetch_object())
                {
                      
                    echo'<h3 class="title1">'.$obj->contact.'</h3>';        
                  
                }   
                }
            ?>
            
            </p>
            <div style="margin:24px 0;">
                <a href="#"><i class="fa fa-facebook-square"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
               
            </div>
            
           
           
            
            <?php
            
            $agency_id=$_GET['id'];
            

            // Set session variables
            $_SESSION["a_id"] =$agency_id;
          
            echo '<a href="rating.php" class="btn">Rate Here</a>';
            
            ?>
            
           
        </div>
        <br>
        <br>
            <hr>
        <br>
        <br>
        
            <html>
    <head>
        <link rel="stylesheet" href="rating_analysis_style.css">
        
        <link rel="stylesheet" type="text/css" href="rating_analysis_style.php">
    </head>
    
    <body>
    
        <div class="one" >
        
            <div class="two">
                <p>Rating Analysis</p>
            </div>
            
            <div class="three">
            
                <p>
                
                    <?php
                    
                    
                    include 'conn.php';
                    $query="select agency_name from agency where agency_id=$agency_id";
                    $result=mysqli_query($conn,$query);

                     if(!$result)
                     {
                         die(mysql_error());
                     }
                     else
                     {
                        while($obj=$result->fetch_object())
                        {
                            $agency_name=$obj->agency_name;
                            
                            
                            
                        }
                     }
                    echo $agency_name;
                    
                    ?>
                
                </p>
            
            </div>
            
            <div class="four">
            
                <div class="left">
                    <p class="p1">Five Stars</p>
                </div>
                
                <div class="bar1">
                    <div id="b1">
                    <p class="p1">*****</p>
                    </div>
                </div>
                
                <div class="right">
                 <p class="p1">
                    <?php
                     error_reporting(0);
                     include 'conn.php';
       
                    $query_r5="select * from agency where agency_id=$agency_id";
                     $result=mysqli_query($conn,$query_r5);

                     if(!$result)
                     {
                         die(mysql_error());
                     }
                     else
                     {
                        while($obj=$result->fetch_object())
                        {
                            $r5=$obj->r5;
                            $r1=$obj->r1;
                            $r2=$obj->r2;
                            $r3=$obj->r3;
                            $r4=$obj->r4;
                            
                        }
                     }
                     $tot=$r1+$r2+$r3+$r4+$r5;
                     $per=($r5*100)/$tot;
                     
                     echo round($per,0,PHP_ROUND_HALF_UP).'%';
                   
                     ?>    
                    
                    
                </p>
                </div>
            
            </div>
            
            <div class="four">
            
                <div class="left">
                    <p class="p1">Four Stars</p>
                </div>
                
                <div class="bar2">
                <div id="b2">
                    <p class="p1">****</p>
                    </div>
                </div>
                
                <div class="right">
                 <p class="p1">
                    <?php
                     error_reporting(0);
                     include 'conn.php';
       
                    $query_r4="select * from agency where agency_id=$agency_id";
                     $result=mysqli_query($conn,$query_r4);

                     if(!$result)
                     {
                         die(mysql_error());
                     }
                     else
                     {
                        while($obj=$result->fetch_object())
                        {
                            $r1=$obj->r1;
                            $r2=$obj->r2;
                            $r3=$obj->r3;
                            $r4=$obj->r4;
                            $r5=$obj->r5;
                       }
                     }

                     $tot=$r1+$r2+$r3+$r4+$r5;
                     $per=($r4*100)/$tot;
                     
                     echo round($per,0,PHP_ROUND_HALF_UP).'%';
                     ?>    
                    
                </p>
                </div>
            
            </div>
            
            <div class="four">
            
                <div class="left">
                    <p class="p1">Three Stars</p>
                </div>
                
                <div class="bar3">
                <div id="b3">
                    <p class="p1">***</p>
                    </div>
                </div>
                
                <div class="right">
                 <p class="p1">
                    
                    <?php
                     error_reporting(0);
                     include 'conn.php';
       
                    $query_r3="select * from agency where agency_id=$agency_id";
                     $result=mysqli_query($conn,$query_r3);

                     if(!$result)
                     {
                         die(mysql_error());
                     }
                     else
                     {
                        while($obj=$result->fetch_object())
                        {
                            $r1=$obj->r1;
                            $r2=$obj->r2;
                            $r3=$obj->r3;
                            $r4=$obj->r4;
                            $r5=$obj->r5;
                        }
                     }
                     $tot=$r1+$r2+$r3+$r4+$r5;
                     $per=($r3*100)/$tot;
                     
                     echo round($per,0,PHP_ROUND_HALF_UP).'%';
                     
                     ?>        
                </p>
                </div>
            
            </div>
            
            <div class="four">
            
                <div class="left">
                    <p class="p1">Two Stars</p>
                </div>
                
                <div class="bar4">
                <div id="b4">
                    <p class="p1">**</p>
                    </div>
                </div>
                
                <div class="right">
                 <p class="p1">
                    <?php
                     error_reporting(0);
                     include 'conn.php';
       
                    $query_r2="select * from agency where agency_id=$agency_id";
                     $result=mysqli_query($conn,$query_r2);

                     if(!$result)
                     {
                         die(mysql_error());
                     }
                     else
                     {
                        while($obj=$result->fetch_object())
                        {
                            $r1=$obj->r1;
                            $r2=$obj->r2;
                            $r3=$obj->r3;
                            $r4=$obj->r4;
                            $r5=$obj->r5;
                        }
                     }
                     $tot=$r1+$r2+$r3+$r4+$r5;
                     $per=($r2*100)/$tot;
                     
                     echo round($per,0,PHP_ROUND_HALF_UP).'%';
                     
                     ?>    
                    
                </p>
                </div>
            
            </div>
            
            <div class="four">
            
                <div class="left">
                    <p class="p1">One Star</p>
                </div>
                
                <div class="bar5">
                <div id="b5">
                    <p class="p1">*</p>
                    </div>
                </div>
                
                <div class="right">
                 <p class="p1">
                
                     <?php
                     error_reporting(0);
                     include 'conn.php';
       
                    $query_r1="select * from agency where agency_id=$agency_id";
                     $result=mysqli_query($conn,$query_r1);

                     if(!$result)
                     {
                         die(mysql_error());
                     }
                     else
                     {
                        while($obj=$result->fetch_object())
                        {
                            $r1=$obj->r1;
                            $r2=$obj->r2;
                            $r3=$obj->r3;
                            $r4=$obj->r4;
                            $r5=$obj->r5;
                        }
                     }
                    $tot=$r1+$r2+$r3+$r4+$r5;
                     $per=($r1*100)/$tot;
                     
                     echo round($per,0,PHP_ROUND_HALF_UP).'%';
                     
                     ?>    
                </p>
                </div>
            
            </div>
            
            <div class="analysis">
            
                <p>
                
                    Average Ratings !!!
                
                </p>
                <span>
                <?php
                    error_reporting(0);
                    include 'conn.php';
                    $query="select r1,r2,r3,r4,r5 from agency where agency_id=$agency_id";
                     $result=mysqli_query($conn,$query);

                     if(!$result)
                     {
                         die(mysql_error());
                     }
                     else
                     {
                        while($obj=$result->fetch_object())
                        {
                            $r1=$obj->r1;
                            $r2=$obj->r2;
                            $r3=$obj->r3;
                            $r4=$obj->r4;
                            $r5=$obj->r5;
                            
                            
                        }
                     }
                    
                    $sum=(1*$r1)+(2*$r2)+(3*$r3)+(4*$r4)+(5*$r5);
                    $tot=$r1+$r2+$r3+$r4+$r5;
                    
                    $avg_r=$sum/$tot;
                    echo round($avg_r,1,PHP_ROUND_HALF_UP);
                    
                    
                ?>
                
                </span>
            
            </div>
        
        </div>
        
    </body>
</html>

</div>
    </body>
</html>