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
    <h1>Guests information</h1>


    <form>
    <fieldset style="width: 350px">
        <legend>Guest</legend>
    <table align="center">

        <tr>
            <td>
                <a href="guest_info.php"><input type="button" name="" value="Guest's information"></a>
            </td>
            
            <td>
                <a href="guest_feedback.php"><input type="button" name="" value="Guest's Feedbacks"></a>
              
            </td>
        </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>