<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="tp";

// Create connection
$conn =mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) 
{
    echo "Database connection failed";
}
?>