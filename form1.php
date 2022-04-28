<html>
<body>
<h1 align="center"><U> REGISTRATION FORM </U></H1>
<table border="5" align="center">
<form action="ins.php" method="post">
<tr>
	<th>id</th>
	<th>name</th>
	<th>email</th>
	<th>contect</th>
</tr>
<?php
while($d=mysqli_fetch_assoc($result))
{ ?>
<tr>
	<td> </td>
	<td> </td>
	<td> </td>
	<td> </td>
</tr>
<?php } ?>
</form>
</table> 
</body>
</html>