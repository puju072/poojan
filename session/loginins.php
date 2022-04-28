<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$username=$_POST['username'];
$pas=$_POST['password'];
$con = mysqli_connect("localhost", "root", "","poojan");
$username = stripslashes($username);
$pas = stripslashes($pas);
$username = mysqli_real_escape_string($username);
$pas = mysqli_real_escape_string($pas);
$db = mysqli_select_db("company", $con);
$query = mysqli_query("select * from login where password='$pas' AND username='$username'", $con);
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username;
header("location: profile.php");
} else {
$error = "Username or Password is invalid";
}
mysqli_close($connection);
}
}
?>