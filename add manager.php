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
    <h1>Give manager information</h1>


    <form>
    <fieldset style="width: 350px">
        <legend>Add manager</legend>
    <table align="center">
        <tr>
            <td>ID: </td>
            <td><input type="number" name="" value=""/></td>
        </tr>
        <tr>
            <td>Username:</td>
            <td><input type="text" name="" value="" size="5" /></td>
        </tr>

        <tr>
            <td>DOB:</td>
            <td><input type="date" name="" value=""/></td>
        </tr>
        <tr>
            <td>Gender: </td>
            <td> 
                <input type="radio" name="gender" value="">Male 
                <input type="radio" name="gender" value="">Female
                <input type="radio" name="gender" value="">Other
            </td>
        </tr>
        <tr>
            <td>Bracnch:</td>
            <td>
                <input type="checkbox" name="">Hotel 1
                <input type="checkbox" name="">Hotel 2
                <input type="checkbox" name="">Hotel 3
            </td>
        </tr>
        <tr>
            <td>BG:</td>
            <td>
                <select>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>o+</option>
                     <option>o-</option>
                    <option>AB+</option>
                    <option>AB-</option>
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