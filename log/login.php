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
$con = mysql_connect("localhost", "root", "","");
$username = stripslashes($username);
$pas = stripslashes($pas);
$username = mysql_real_escape_string($username);
$pas = mysql_real_escape_string($pas);
$db = mysql_select_db("company", $con);
$query = mysql_query("select * from login where password='$pas' AND username='$username'", $con);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username;
header("location: profile.php");
} else {
$error = "Username or Password is invalid";
}
mysql_close($connection);
}
}
?>