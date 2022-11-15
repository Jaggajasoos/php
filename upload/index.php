 <?php
    $con=mysqli_connect("localhost","root","","dbdemo") or die("Connection Prblem");
?>
 <html>

<head>
	
</head>

<body>

<center>

	<form action="insert.php" method = "POST" enctype="multipart/form-data">
		<table border="1">

			<tr>
				<td>Enter name::</td>
				<td><input type="text" name="txtname"></td>
			</tr>
			<tr>
             <td>Enter id::</td>

				<td><input type="textbox"name="id"required/></td>
			</tr>
			<tr>
             <td>Enter city::</td>

				<td><input type="text" name="txtcity"></td>
			</tr>
			<tr>
				<td>upload photo::</td>
				<td><input type="file" name="uploadname"></td>
			</tr>
			
			<td colspan="2" align="center"> <input type="submit" value="save" name="btnsave"></td>

		</table>
		<br>
		<table border="1"></table>

	</form>

</center>
<br></br>
<table border="1">
    <tr>
        <th> ID </th>
        <th> Name</th>
        <th> City</th>
        <th> Profile Pic</th>
        <th colspan="4">Action</th>
    </tr>
    <?php
        $q="SELECT * FROM demo_master";
        $m= mysqli_query($con, $q);
        while($d=mysqli_fetch_array($m))
        {
    ?>
    <tr>
        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['name']; ?></td>
        <td><?php echo $d['city']; ?></td>
        <td><image src="<?php echo $d['pp']; ?>"height="100" width="100"/></td>
        <td><a href="download.php?dw=<?php echo $d['pp']; ?>">Download</a></td>
        <td><a href="<?php echo $d['pp']; ?>">View</a></td>
        <td><a href="insert.php?del=<?php echo $d['id']; ?>">Delete</a></td>
        <td><a href="edit.php?ed=<?php echo $d['id']; ?>">Edit</a></td>
    </tr>
    <?php
}
?>
</table>


</body>

</html>