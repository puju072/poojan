<?php
	include "connection.php";
	$id=$_REQUEST['id'];
	$nm=$_REQUEST['nm'];
	$el=$_REQUEST['el'];
	$cot=$_REQUEST['cot'];
	$insert="INSERT INTO `form1`(`id`,`name`,`email`,`contact`)VALUES('$id','$nm','$el','$cot')";
	$result=mysqli_query($con,$insert);
	if($result==true)
	{
		echo "<script>alert ('connected')</script>";
	}
	else
	{
		echo"<script>alert('Not')</script>";
	}
?>