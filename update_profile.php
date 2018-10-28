<?php

include 'connection.php';
 session_start();
 $email1= $_SESSION['email'];
$f1=$f2=$f3=$f4=$f5=$f6=$f7=$f8=$f9=$f10=$f11=$f12=0;

$agency_name_err=$o_fname_err=$o_lname_err=$contact_err=$city_err=$email_err=$password_err=$repass_err=$join_date_err=$gender_err=$addr_err=$description_err="";
$agency_name=$o_fname=$o_lname=$contact=$city=$email=$password=$repass=$join_date=$gender=$addr=$description="";
$city_correct=$email_correct=$password_correct=$repass_correct="";

if(isset($_POST['submit']))
{
if($f1==0&&$f2==0&&$f3==0&&$f4==0&&$f5==0&&$f6==0&&$f7==0&&$f8==0&&$f9==0&&$f10==0&&$f11==0&&$f12==0)
{
    if(empty($_POST['agency_name']))
    {
        $agency_name_err="Agency Name is Required";
    }
    else if($_POST['agency_name'])
    {
        $agency_name=$_POST['agency_name'];
        if(is_numeric($agency_name))
        {
            $agency_name_err="Agency name should't be number";
        }
        else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$agency_name))
        {
            $agency_name_err="Agency name should't be special character";
        }
        else
        {
            $f1=1;
        }
    }
    

if(empty($_POST['o_fname']))
    {
        $o_fname_err="First Name is Required";
    }
    else
    {
        $o_fname=$_POST['o_fname'];
        if(is_numeric($o_fname))
        {
            $o_fname_err="First name should't be number";
        }
        else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$o_fname))
        {
            $o_fname_err="First name should't be special character";
        }
        else
        {
            $f2=1;
        }
    }


if(empty($_POST['o_lname']))
    {
        $o_lname_err="Last Name is Required";
    }
    else
    {
        $o_lname=$_POST['o_lname'];
        
        if(is_numeric($o_lname))
        {
            $o_lname_err="Last name should't be number";
        }
        else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$o_lname))
        {
            $o_lname_err="Last name should't be special character";
        }
        else
        {
            $f3=1;
        }
    }
    
   
    if(empty($_POST['contact']))
    {
        $contact_err="Contact is Required";
    }
    else
    {
        $contact=$_POST['contact'];
        
        if(strlen($contact)<10&&strlen($contact)>10)
        {
            $contact_err="Invalid Contact Number";
        }
        
        else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$contact))
        {
            $contact_err="Contact should't be special character";
        }
        else
        {
            $f4=1;
        }
    }
    
    if(empty($_POST['city']))
    {
        $city_err="City is Required";
    }
    else
    {
        $city=$_POST['city'];
        
        if($city=="badlapur")
        {
             $f5=1;
            $city_correct="Correct";
        }
        else if($city=="kalyan")
        {
             $f5=1;
             $city_correct="Correct";   
        }
        else if($city=="airoli")
        {
                 $f5=1;
             $city_correct="Correct";
            
        }
        else if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$city))
        {
            $city_err="City should't be special character";
        }
        
    }
    
    if(empty($_POST['email']))
    {
        $email_err="Email is Required";
    }
    else
    {
        $email=$_POST['email'];
        
        if(preg_match('/[\'^£$%&*()}{#~?><>,|=_+¬-]/',$email))
        {
            $email_err="Invalid Email address";
        }
        else
        {
            $email_correct="Correct";
            $f6=1;
        }
        
    }
    
    if(empty($_POST['password']))
    {
        $password_err="Password is Required";
    }
    else
    {
        $password=$_POST['password'];
        if(strlen($password)<5)
        {
            $password_err="Too Short Password";
        }
        
        else if(strlen($password)>10)
        {
            $password_correct="Strong Password";
             $f7=1;
        }
       
            
    }
    
    if(empty($_POST['repass']))
    {
        $repass_err="Re-enter Password is Required";
    }
    else
    {
        $repass=$_POST['repass'];
        
        if($repass==$password)
        {
            $repass_correct="Correct";
            $f8=1;
        }
        else
        {
            $repass_err="Incorrect Password";
        }
    }
    
    if(empty($_POST['join_date']))
    {
        $join_date_err="Join date is Required";
    }
    else
    {
        $join_date=$_POST['join_date'];
        $f9=1;
    }
    
    
    if(empty($_POST['gender']))
    {
        $gender_err="Please Select Gender";
    }
    else
    {
        $gender=$_POST['gender'];
        $f10=1;
    }
    
    if(empty($_POST['addr']))
    {
        $addr_err="Please Enter Your Address";
    }
    else
    {
        $addr=$_POST['addr'];
        $f11=1;
    }
    
    if(empty($_POST['description']))
    {
        $description_err="Please Describe about your place";
    }
    else
    {
        $description=$_POST['description'];
        $f12=1;
    }

    if($f1==1&&$f2==1&&$f3==1&&$f4==1&&$f5==1&&$f6==1&&$f7==1&&$f8==1&&$f9==1&&$f10==1&&$f11==1&&$f12==1)
{
     $query1="update agency set agency_name='$agency_name',o_fname='$o_fname',o_lname='$o_lname',contact='$contact',email='$email',passwd='$password',join_date='$join_date',gender='$gender',addr='$addr',descrp='$description',city='$city' where email='$email1'";
    
     if (mysqli_query($conn, $query1)) 
     {
        echo '<script>alert("Updated Succesfully !");
            window.location="agency_begin.php";</script>';
     } 
    else 
    {
        echo "Error updating record: " . mysqli_error($conn);
    }
        
        
    
}

}
    
} 

?>

<!DOCTYPE html>
<html>
    <head>
     <title>Traveller's Point</title>
  <link rel="icon" type="image/jpg" href="logo.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="agency_nav_style.css">

 <link rel="stylesheet" type="text/css" href="register_style.css">
 <style>
        
          .error
          {
              color: red;
              
          }
          .correct
          {
              color: green;
          }
    
        
        </style>  
        
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
  <a href="upload_pictures.php"><i class="fa fa-upload"></i> Upload Pics</a>
  <a href="update_profile.php" class="active"><i class="fa fa-edit"></i> Update Profile</a>
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
    <?php
     
    $email= $_SESSION['email'];
      $sql="SELECT * FROM agency WHERE email='$email'";
        
        if($result=mysqli_query($conn,$sql))
        {
            $row=mysqli_fetch_assoc($result);
            $agency_name=$row["agency_name"];
            $o_fname=$row["o_fname"];
            $o_lname=$row["o_lname"];
            $contact=$row["contact"];
            $email=$row["email"];
            $passwd=$row["passwd"];
            $join_date=$row["join_date"];
            $gender=$row["gender"];
            $addr=$row["addr"];
            $descrp=$row["descrp"];
            $city=$row["city"];
               
        }
    
    ?>
    

<div class="container-fluid box1 center1" >
    <form method="post" action="update_profile.php">
        <div>
        <h1>Agency Profile Update</h1>
        </div>
        
       
        <br>
        <br>
        <div>
            <div><label>Agency Name </label></div>
            <input type="text" placeholder="Agency Name" name="agency_name" value="<?php echo $agency_name ?>">
            <p class="error"><?php echo $agency_name_err; ?></p>
        </div>
        <div>
            <div><label>Owner's First Name</label></div>
            <input type="text" placeholder="Owner's First Name" name="o_fname" value="<?php echo $o_fname ?>">
            <p class="error"><?php echo $o_fname_err; ?></p>
        </div>
        <div>
            <div><label>Owner's Last Name</label></div>
            <input type="text" placeholder="Owner's Last Name" name="o_lname" value="<?php echo $o_lname ?>">
            <p class="error"><?php echo $o_lname_err; ?></p>
        </div>
        <div>
            <div><label>Contact Number</label></div>
            <input type="tel" placeholder="Contact number" name="contact" value="<?php echo $contact ?>">
            <p class="error"><?php echo $contact_err; ?></p>
        </div>
        <div>
            <div><label>City</label></div>
            <input type="text" placeholder="City" name="city" value="<?php echo $city ?>">
            <p class="correct"><?php echo $city_correct; ?></p>
        </div>
        <div>
            <div><label>Email Address</label></div>
            <input type="email" placeholder="Email address" name="email" value="<?php echo $email ?>">
            <p class="error"><?php echo $email_err; ?></p>
            <p class="correct"><?php echo $email_correct; ?></p>
        </div>
        <div>
            <div><label>Password</label></div>
            <input type="password" placeholder="Password" name="password" value="<?php echo $passwd ?>">
            <p class="error"><?php echo $password_err; ?></p>
            <p class="correct"><?php echo $password_correct; ?></p>
        </div>
        <div>
            <input type="password" placeholder="Re-Enter Password" name="repass">
            <p class="error"><?php echo $repass_err; ?></p>
            <p class="correct"><?php echo $repass_correct; ?></p>
        </div>
        
        <div>
            <div> <label>Join Date</label></div>
            <input type="date" placeholder="Enter Agency Name" name="join_date" value="<?php echo $join_date ?>">
             <p class="error"><?php echo $join_date_err; ?></p>
        </div>

        <div>
            <div><label>Gender </label></div>
            <table align="center" class="tbl">
            <tr>
            <td><input type="radio" name="gender" <?php if($gender=="male") echo "checked"; ?> value="male" ></td>
            <td><label>Male</label></td>
            <td><input type="radio" name="gender" <?php if($gender=="female") echo "checked"; ?> value="female" ></td>
            <td><label>Female</label></td>
            </tr>
        </table>
            <p class="error"><?php echo $gender_err; ?></p>
        </div>
    
        
       <div>
            <div><label>Address</label></div>
            <textarea placeholder="Enter Address" rows="4" cols="40" name="addr" ><?php echo $addr ?></textarea>
           <p class="error"><?php echo $addr_err; ?></p>
        </div>
        <div>
            <div><label>Describtion</label></div>
            <textarea placeholder="Enter Description of Place" rows="4" cols="40" name="description" ><?php echo $descrp ?></textarea>
            <p class="error"><?php echo $description_err; ?></p>
        </div>
        

        
         <div >
            <input type="submit" name="submit" class="button button3" id="update" value="UPDATE"/> 
        </div>
    </form>
</div>

   

  
</body>
</html>