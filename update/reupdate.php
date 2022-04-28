<?php
	include"updatecon.php";
	$id=$_REQUEST['id'];
	$select="SELECT * FROM `updel` WHERE `id`='$id'";
	$result=mysqli_query($con,$select);
	$row=mysqli_fetch_assoc($result);
?>
<html>
<body>
<h1 align="center"><U> UPDATE FORM </U></H1>
<form action="updateins.php?id=<?php echo $row['id'];?>" method="POST">
<table bordr="5" align="center">
<tr>
	<td>NAME:
	<input type="text" id="name" name="nm" >
</tr>
<tr>	
	<td>EMAIL:
	<input type="email" id="email" name="el">
</tr>
<tr>	
	<td>CONTECT:
	<input type="text" id="contact" name="cot" >
</tr>
<tr>	
	<td><input type="submit" name="submit" value="register">
	<input type="reset" name="clear" value="clear">
</tr>
</form> 
</body>
</html>