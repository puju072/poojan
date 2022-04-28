<?php
	include "updatecon.php";
	$sel="SELECT * FROM `updel`";
	$result=mysqli_query($con,$sel);
?>
<html>
<body>
<table border="5">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>CONTACT</th>
		<th>UPDATE</th>
	</tr>
	<?php
		while($row=mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['contact'];?></td>
				<td><a href="reupdate.php?id=<?php echo $row['id'];?>">update</a></td>
			</tr>
		<?php } ?>
		
</table>
</body>
</html>