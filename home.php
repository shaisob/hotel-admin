<?php
 	session_start();
//if session was destroy in log out page we need to do login again.
 	if (!isset($_SESSION['uname'])) {
 		header("location: Login.php");
 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin Home Page</title>
</head>
<body>
	<h1>Welcome Admin</h1>


	<form>
	<fieldset style="width: 350px">
		<legend>Admin access</legend>
	<table align="center">
		
	<tr> </br>
		<td>

		<a href="hotel.php"><input type="button" name="" value="HOTEL"></br></br></a>

		</td>
			
			<td>
				<a href="Manager.php"><input type="button" name="" value="MANAGER"></br></br></a>
			</td>
		</tr>
		
	<tr>
			
		<td>
				<a href="Guest.php"><input type="button" name="" value="GUEST"></a>
				
			</td>

            <td>
				<a href="preview.php"><input type="button" name="" value="PREVIEW"></a>
				
			</td>
		</tr> 
		<tr>
			<td></td>
			<td></br></br>
				<a href="logout.php"><input type="button" name="" value="Logout"></a>
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>