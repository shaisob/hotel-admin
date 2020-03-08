<?php
    session_start();
//if session was destroy in log out page we need to do login again.
    if (!isset($_SESSION['uname'])) {
        header("location: Login.php");
    }


?>
<!Doctype.html>
<html>
<title>Payment</title>
<body>
	
	<fieldset style="width: 350px">
		<form><h3>
			<table align="center">
				<tr><td align="center" colspan="2"><h3>Payment</h3></td>			
				</tr>

				<tr>
					<td>Account Name: </td>
					<tr></tr>
					<td><input type="text" name="user name"  placeholder="user name"></td>
				    <tr></tr>
					<td>Card number: </td>
					<tr></tr>
					<td><input type="number" name="card number"  placeholder="number"></td>
                    <tr></tr>
					<td>Expire Date: </td>
					<tr></tr>
					<td><input type="Date" name="Expire Date" ></td>
					<tr></tr>
					<td>Cvc Code: </td>
					<tr></tr>
					<td><input type="password" name="Cvc Code" placeholder="0000"></td>
					<tr></tr>
					<tr></tr>
					<td align="center"><a href="home.php"><input type="button" name="Confirm" value="Proceed"></a></td>



					</tr>
						
                





			</table>
				</h3>
		</form>
		
	

</fieldset>

</body>
</html>