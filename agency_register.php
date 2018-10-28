<?php

$conn = new mysqli("localhost","root","","tp");

/*
if(isset($_POST['submit']))
{
    $agency_name=$_POST['agency_name'];
    $o_fname=$_POST['o_fname'];
    $o_lname=$_POST['o_lname'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $join_date=$_POST['join_date'];
    $gender=$_POST['gender'];
    $addr=$_POST['addr'];
    $description=$_POST['description'];

        $query1="insert into agency (agency_name,o_fname,o_lname,contact,email,passwd,join_date,gender,addr,descrp,city) values('$agency_name','$o_fname','$o_lname','$contact','$email','$password','$join_date','$gender','$addr','$description','$city')";
    
        if($conn->query($query1))
        {
            echo'Data Inserted Properly.';
    
        }
    
       
    }

*/
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
        
     $query1="insert into agency(agency_name,o_fname,o_lname,contact,email,passwd,join_date,gender,addr,descrp,city) values('$agency_name','$o_fname','$o_lname','$contact','$email','$password','$join_date','$gender','$addr','$description','$city')";
    
      $query2="select * from agency where email='$email'";
    $run=mysqli_query($conn,$query2);
    
        if(mysqli_num_rows($run) > 0)
        {
            echo '<script>alert("Agency has been already registered. Try to Login");
            window.location="agency_login.php";
            </script>';
            
    
        }
        else
        {
            mysqli_query($conn,$query1);
            echo '<script>alert("Registered Succesfully !");
            window.location="agency_login.php";
            </script>';
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
    
 <link rel="stylesheet" type="text/css" href="nav_style.css">
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

    <div align="center">
    <h1 class="logo">Traveller's Point</h1>
    
    
  <strong class="logo2" >We All Travel For Life !</strong> 
    </div>
    
    
<div class="icon-bar" id="myTopnav">
  <a href="index.php"><i class="fa fa-home"></i> Home</a> 
  <a href="contact.php"><i class="fa fa-envelope"></i> Contact</a> 
  <a href="view_agency.php"><i class="fa fa-globe"></i> View Agencies</a> 

    <a href="about_us.php"><i class="fa fa-user"></i> About Us</a>
   
    <div class="icon-bar-right">
     <a class="icon-bar-right" href="agency_login.php"><i class="fa fa-sign-in"></i> Login</a>
    <a class="active" class="icon-bar-right" href="agency_register.php"><i class="fa fa-user-plus"></i> RegisterHere</a>

    </div>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
    </div> 
  <script>
      function myFunction()
      {
          var x = document.getElementById("myTopnav");
          if (x.className === "icon-bar") 
          {
              x.className += " responsive";
          } 
          else 
          {
              x.className = "icon-bar";
          }
      }
</script>
    <br>
    <br>
    <br>

<div class="container-fluid box1 center1">
    <form action="agency_register.php" method="post">
        <div>
        <h1>Agency Registration</h1>
        </div>
        
        <div>
            <input type="text" placeholder="Enter Agency Name" name="agency_name">
            <p class="error"><?php echo $agency_name_err; ?></p>
        </div>
           <div>
            <input type="text" placeholder="Owner's First Name" name="o_fname">
            <p class="error"><?php echo $o_fname_err; ?></p>
        </div>
         <div>
            <input type="text" placeholder="Owner's Last Name" name="o_lname">
            <p class="error"><?php echo $o_lname_err; ?></p>
        </div>
           <div>
            <input type="tel" placeholder="Contact number" name="contact">
            <p class="error"><?php echo $contact_err; ?></p>
        </div>
        <div>
            <input type="text" placeholder="City" name="city">
            <p class="correct"><?php echo $city_correct; ?></p>
        </div>
           <div>
               
            <input type="email" placeholder="Email address" name="email">
            <p class="error"><?php echo $email_err; ?></p>
            <p class="correct"><?php echo $email_correct; ?></p>
        </div>
           <div>
            <input type="password" placeholder="New Password" name="password">
               <p class="error"><?php echo $password_err; ?></p>
               <p class="correct"><?php echo $password_correct; ?></p>
        </div>
           <div>
            <input type="password" placeholder="Re-Enter Password" name="repass">
            <p class="error"><?php echo $repass_err; ?></p>
            <p class="correct"><?php echo $repass_correct; ?></p>
        </div>
           <div>
               <div> <label>Enter the Join Date</label></div>
            <input type="date" placeholder="Enter Agency Name" name="join_date">
               <p class="error"><?php echo $join_date_err; ?></p>
        </div>
        <label>Select Gender</label>
        <table align="center" class="tbl">
       
            <tr>
            <td><input type="radio" value="male" name="gender"></td>
            <td><label>Male</label></td>
            <td><input type="radio" value="female" name="gender"></td>
            <td><label>Female</label></td>
            </tr>
        </table>
        <p class="error"><?php echo $gender_err; ?></p>
        <label>Address:</label>
        <div>
        <textarea placeholder="Enter Address" rows="4" cols="40" name="addr"></textarea>
        <p class="error"><?php echo $addr_err; ?></p>
        </div>
        <label>Describe:</label>
       <div>
        <textarea placeholder="Enter Description of Place" rows="4" cols="40" name="description"></textarea>
        <p class="error"><?php echo $description_err; ?></p>
        </div>
        <br>
        <div >
       <input type="submit" name="submit" class="button button3" value="Register"/>
        <input class="button button3" type="reset" value="Reset">
        </div>
            
    </form>
    
</div>


    
    


</body>
</html>