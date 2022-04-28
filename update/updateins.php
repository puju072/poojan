<?php
	include"updatecon.php";
	$id=$_REQUEST['id'];
	$name=$_REQUEST['nm'];
	$email=$_REQUEST['el'];
	$contact=$_REQUEST['cot'];
	$update="UPDATE `updel` SET `name`='$name',`email`='$email',`contact`='$contact' WHERE `id`='$id'";
	$result=mysqli_query($con,$update);
	if($result)
	{
		header("location:update.php");
	}
?>