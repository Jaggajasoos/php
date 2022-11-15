<html>
<body> <form action="#" method="POST">
<center><input type="submit"value="Delete"name="btndlt"/></center> <a href="index.php">Back</a>
</form> </body> </html>
<?php
 if (isset($_POST['btndlt'])){
$id=@$_POST['id'];
$con = mysqli_connect("localhost", "root", "", "dbdemo");
$q1="DELETE FROM demo_master WHERE id ='$id'";
mysqli_query($con, $q1);
header("locatio:index.php");
}       
?>
