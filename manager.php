
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
                <a href="add_manager.php"> <input type="button" name="" value="Add manager"> </br></br> </a>
            </td>
            
            <td>
                <a href="delete_manager.php"><input type="button" name="" value="Delete manager"></br></br></a>
            </td>
        </tr>
        
        <tr>
            
            <td>
                <a href="verify.php"><input type="button" name="" value="Verify manager"></a>
                
            </td>

            <td>
               <a href="assign.php"> <input type="button" name="" value="Change branch"></a>
                
            </td>
        </tr>
        <tr></br>
            <td></td>
            
            <td></br>
              <a href="pay.php"> <input type="button" name="" value="Payment"></br></br></a>
            </td>
        </tr>

    </table>
    </fieldset>
    </form>
</body>
</html>

