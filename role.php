<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetphp";
$var1="admin";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sq2="SELECT role FROM inscription ";

if(mysqli_query($conn,$sq2))
  {if(strcmp($sq2,$var1)==0)
      {
            header('location:home_admin.php');
exit();}
      else
      {
            header('location:home.php');
exit();}
     } 
  
     


mysqli_close($conn);

     ?>