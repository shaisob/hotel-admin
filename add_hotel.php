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
    <h1>Give Hotel informations</h1>


    <form>
    <fieldset style="width: 350px">
        <legend>Add a new hotel</legend>
    <table align="center">
        <tr>
            <td>Hotel name:</td>
            <td><input type="text" name="" value="" size="5" /></td>
        </tr>
         <tr>
            <td>Hotel address:</td>
            <td><input type="text" name="" value="" size="5" /></td>
        </tr>
        <tr>
            <td>Hotel type</td>
            <td>
                <select>
                    <option>5*</option>
                    <option>4*</option>
                    <option>3*</option>
                    <option>2*</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="" value="ADD">
                <input type="reset" name="" value="Reset">
            </td>
        </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>