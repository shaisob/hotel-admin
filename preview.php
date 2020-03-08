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
    <title></title>
</head>
<body>
    <h1>Previews</h1>


    <form>
        <fieldset style="width: 350px">
        <legend>Manager verification</legend>

    <table align="center">

        <tr>
            <td>
                <a href="guest_preview.php"><input type="button" name="" value="Guest Previews"></a>
            </td>
            
            <td>
                <a href="manager_preview.php"><input type="button" name="" value="Manager Previews"></a>
              
            </td>
        </tr>
    </table>
</fieldset>
    </form>
</body>
</html>