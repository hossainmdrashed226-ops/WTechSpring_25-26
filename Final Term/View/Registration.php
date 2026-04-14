<?php
include "../Controller/RegistrationController.php";
?>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    <table>

       
        <tr>
            <td><label>Name:</label></td>
            <td>
                <input type="text" name="name">
                <?php echo $validName; ?>
            </td>
        </tr>

       
        <tr>
            <td><label>Email:</label></td>
            <td>
                <input type="text" name="email">
                <?php echo $validEmail; ?>
            </td>
        </tr>

        
        <tr>
            <td><label>Website:</label></td>
            <td>
                <input type="text" name="website">
            </td>
        </tr>

        
        <tr>
            <td><label>Comment:</label></td>
            <td>
                <textarea name="comment"></textarea>
            </td>
        </tr>

       
        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Other"> Other
                <?php echo $validGender; ?>
            </td>
        </tr>

       
        <tr>
            <td>
                <input type="submit" name="submit" value="Submit">
            </td>
        </tr>

    </table>
</form>

</body>
</html>