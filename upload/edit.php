<?php
    $con = mysqli_connect("localhost","root","","dbdemo") OR die("Connection Problem");
    $id = $_REQUEST['ed'];
    $q = "SELECT * FROM demo_master WHERE id = '$id'";
    $m = mysqli_query($con,$q);
    $d = mysqli_fetch_array($m);
?>
<html>
    <head></head>
    <body>
        <center>
            <form method="POST" action="edit.php?ed=<?php echo $d['id']; ?>">
                <table border="1">
                    <tr>
                        <td> Name :: </td>
                        <td> <input type="text" value="<?php echo $d['name']; ?>" name="txtname" /> </td>
                    </tr>
                    <tr>
                        <td> City :: </td>
                        <td> <input type="text" value="<?php echo $d['city']; ?>" name="txtcity" /> </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"> <input type="submit" name="btnup" value="Update" /> </td>
                    </tr>
                </table>
            </form>

        </center>
    </body>
</html>
<?php
    if(isset($_POST['btnup']))
    {
        $name = $_POST['txtname'];
        $city = $_POST['txtcity'];

        $q1 = "UPDATE demo_master SET name='$name', city='$city' WHERE id = '$id'";
        mysqli_query($con, $q1);
        header("location:index.php");
    }
?>