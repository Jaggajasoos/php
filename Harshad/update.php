<?php
  error_reporting(0); 
//  $update = false;

$server = "localhost";
$username = "root";
$password = "";
$db = "dbdemo";

$con = mysqli_connect($server , $username , $password,$db);

if(!$con){
    die("connection to this database failed due to ".mysqli_connect_error());

}

    $no = $_GET['no'];
    $query = "SELECT * FROM  photo  where id='$no'";
   
   $data = mysqli_query($con,$query);
  $total = mysqli_num_rows($data);
   $result = mysqli_fetch_assoc($data);
 
   
?> 
<?php
 
if(isset($_POST['update'])){
  if(isset($_POST['name']) || isset($_POST['city']) ){
$no = $_POST['id'];
$name = $_POST['name'];
$city = $_POST['city'];




// $sql = "INSERT INTO  `esyecodes`.`s_data` ( `name`, `gender`,`photo`, `mobile`, `email`, `birthdate`, `code`,`jointime`)
//  VALUES ( '$name', '$gender', '$destfile','$mobile', '$email', '$date','$pin',
//  current_timestamp())"; 
  $qul = " UPDATE photo SET name='$name',city='$city' photo='$destfile' where id='$no'";
// echo $qul;

  mysqli_query($con,$qul);


}
}



?> 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>

<body>
      <strong>
                       <div class="form">

                      <H2> UPDATE YOUR DETAILS </H2>
            
                      <hr>
                      <br>
                        <form action="update.php" method="post">
                       
                        
            
                        <div class="name"> <input type="hidden" value="<?php echo $result['id']?>" id="name" class="input" required name="id">
                        </div> 
                         <lable for="name">name: </lable> <br>
            
                        <div class="name"> <input type="text" value="<?php echo $result['name']?>" id="name" class="input" required name="name">
                        </div> 
            
                        <br>
                        <lable for="city">city: </lable> <br>
            
                        <div class="name"> <input type="text" value="<?php echo $result['city']?>" id="name" class="input" required name="city">
                        </div
            
                        <br>

                        <td><img id='viue' ondblcilck='myfunc' src= <?php'".$result['pp']."'?> ></td>
                        <div>
                            <lable for="name">add-photo: </lable> <br>

                            <div class="name"> <input type="file" id="name" value="<?php echo $result['photo']?>" class="input" name="photo">
                            </div>

        <div> 
        <input type="submit" name="update" id="sub" class="sub" onclick="fun1()" value="update"></a><br>
        

        </div>

        
        <br>
        </strong>
            </formn>
<script>

let ae = getElementById('sub').addEventListener(click,fun1()=>{
    window.location.replace("http://localhost/MCA_CODE/connation%20with%20database/show.php");

});

</script>
</body>
</html> 


