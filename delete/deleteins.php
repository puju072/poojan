<?php
	include"deletecon.php";
	$id=$_GET['id'];
	$delete="DELETE FROM `delete` WHERE `id`='$id'";
	$result=mysqli_query($con,$delete);
	if($result)
	{
		header("location:delete.php");
	}
?>