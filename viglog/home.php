<?php
    $con=mysqli_connect("localhost","root","","poojan");
    session_start();
    if(!isset($_SESSION['name']))
    {
        header("location:home.php");
    }
    else
    {
     echo "welcome";
    echo "<a href='logout.php'><button>logout</button></a>";
    }
    //session_destroy();
?>