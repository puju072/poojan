<html>
	<body>
        <?php
        if(isset($_REQUEST['login']))
        {
           $con=mysqli_connect("localhost","root","","poojan");
          /* if($con)
           {
               echo "<script>alert('yes')</script>";
           } 
           else
           {
            echo "<script>alert('no')</script>";
           }*/
           $unm=$_REQUEST['name'];
           $pwd=$_REQUEST['password'];
           $sql="SELECT *FROM `ses` WHERE `name`='$unm' AND `password`='$pwd'";
           $Result=mysqli_query($con,$sql);
           $count=mysqli_num_rows($Result);
           $row=mysqli_fetch_array($Result);
           if($count > 0)
           {
               session_start();
               $_SESSION['name']=$row['name'];
               header("location:home.php");
           }
           else
           {
            echo "<script>alert('username and password incorrect')</script>";
           }
        }
        ?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table align="center">
				<h2 align="center">Log in</h2>
                <tr>
				<td><input type="text" name="name" value="" id="unm" class="unm" placeholder="user name"><br></td>
                </tr>
                <tr>
				<td><input type="password" name="password" value="" id="pwd" class="pwd" placeholder="password"><br></td>
                </tr>
                <tr>
				<td><button align="center" name="login" value="" id="log" class="log">login</button></td>
                </tr>
            </table>
			</form>
	</body>
</html>