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
        
        <tr></br>
            <td>
                <a href="add_hotel.php"><input type="button" name="" value="Add Hotel"></br></br></a>
            </td>
            
            <td>
                <a href="remove_hotel.php"><input type="button" name="" value="Remove hotel"></br></br></a>
            </td>
        </tr>
        
        <tr>
            <td></td>
            <td></br></br>
               <a href="logout.php"> <input type="button" name="" value="Logout"></a>
            </td>
        </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>