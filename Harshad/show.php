<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show data</title>
    <style>
        /* css for table data show */
* {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body {
    width: 100%;
    height: 100%;
    background-color: bisque;
}

.data {
    width: 80vw;
    height: 70vh;
    background-image: linear-gradient(120deg, green, red, rgb(179, 255, 0));
    margin: 0px auto;
    overflow-y: scroll;
    scrollbar-width: thin;
    scrollbar-color: rgb(73, 73, 73) rgb(209, 163, 36);
}

table {
    width: 60vw;
    border: 2px solid ghostwhite;
    border-radius: 2px;
    margin: 0px auto;
}

th {
    border: 1px dotted ghostwhite;
    padding: 2px;
}

td {
    border: 1px dotted ghostwhite;
    padding: 2px;
    text-align: center;
}

.txt {
    width: 100%;
    height: 20px;
    border: 1px solid green;
    margin: 5px auto;
    background-color: plum;
}

img {
    width: 100px;
    height: 100px;
    border-radius: 100%;
}

.poi {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

a {
    width: 10rem;
    height: 2rem;
    border: 3px solid green;
    border-radius: 3px;
    margin-top: 20px;
    text-decoration: none;
    background-color: rgb(39, 55, 202);
    text-align: center;
    color: aliceblue;
}
   </style>
</head>
<body>
    
<!-- show data from database  -->
<section class="s-data">
        <div class="data">

            <table>
                <tr>
                    <h1 class="txt">YOUER DATA TABEL
                        <h1>
                            <th>no</th>
                            <th>photo</th>
                            <th> name</th>
                            <th> city</th>
                            
                        <?php
 $server = "localhost";
 $username = "root";
 $password = "";
 
$con = new mysqli("localhost", "root", "", "dbdemo");
if($con->connect_error){
    die("Failed to connect : ".$con->connect_error);
}else{
    $query = ("SELECT * FROM  photo");
    $data = mysqli_query($con,$query);
    $total = mysqli_num_rows($data);
    }
if($total != 0)
   { 
    //    echo " Tabel has records";
 
    while($result = mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
         <td>". $result ['id']."</td>   
       <td><img id='viue' ondblcilck='myfunc' src='".$result['pic']."'></td>
        <td>". $result ['name']."</td>
        <td>". $result ['city']."</td>
        <td> <a href='update.php?no=$result[id]'?>  Update </a></td>
        <td><a href='delete.php?no=$result[id]'> Delete </a> </td>
         ";
}
  }else {
       echo "not records found"; 
       }
        ?>
         </tr>
            </table>

        
    </section>
         
    <script src="d.js"></script>

</body>
</html>