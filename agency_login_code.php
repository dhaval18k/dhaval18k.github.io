<!DOCTYPE html>
<html>
    <body>
<?php

include 'connection.php';

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM agency WHERE email='$email' AND passwd='$password'";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row["id"];
        $email=$row["email"];
        $agency_name=$row["agency_name"];        
        session_start();
        $_SESSION['id']=$id;
        $_SESSION['email']=$email;
    }
    header("Location: agency_begin.php");
}
else
{
    echo '<script language="javascript" type="text/javascript">
        alert("Invalid Credentials");
        window.location="agency_login.php";
        </script>';
    
}
?>
    </body>
    </html>