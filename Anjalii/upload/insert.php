 <?php


        $con = mysqli_connect("localhost", "root", "", "dbdemo") or die("connection problem");
        ?>
         <?php
         if (isset($_POST['btnsave']))

          {
         	$name = $_POST['txtname'];
         	$id = $_POST['txtid'];


         	$city = $_POST['txtcity'];

            $target = "photo/";
            // $target1 = $target.basename($_FILES['photo/']['name']);
            $target1 = $target.basename($_FILES['uploadname']['name']);
//move_uploaded_FILES($FILES['photo/']['tmp_name'].$target1); 
           move_uploaded_file($_FILES['uploadname']['tmp_name'],"photo/".$_FILES['uploadname']['name']);


$q = "INSERT INTO demo_master(name,id,city,pp) VALUES ('$name','$id','$city','$target1')";
            mysqli_query($con,$q);
            header("location:index.php");
        }
          
/*if (isset($_POST['btndlt'])){
$id=@$_POST['id'];
//$con = mysqli_connect("localhost", "root", "", "dbdemo");
$q1="DELETE FROM demo_master WHERE id ='$id'";
mysqli_query($con, $q1);
header("locatio:index.php");
} */            
?>
<?php
    $id = $_REQUEST['del'];
    $q1 = "DELETE FROM demo_master WHERE id = '$id'";
    mysqli_query($con, $q1);
    header("location:index.php");
?>





