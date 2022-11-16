<?php
//error_reporting(0); 

$server = "localhost";
$username = "root";
$password = "";


$con = new mysqli("localhost", "root", "", "dbdemo");
    
$no= $_GET['no'];

if($con->connect_error){
   die("Failed to connect : ".$con->connect_error);
}else{
   //  $query = "DELETE  FROM  `photo` where no= $id";
   $query ="DELETE FROM `photo` WHERE `photo`.`id` = $no";
   $data = mysqli_query($con,$query);
 
   
    header('location:show.php');
 
   }
?>
