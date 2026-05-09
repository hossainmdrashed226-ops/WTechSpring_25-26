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
                <input type="text" name="name" value="<?php echo $name; ?>">
                <?php echo $validName; ?>
            </td>
        </tr>

        <tr>
            <td><label>Email:</label></td>
            <td>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <?php echo $validEmail; ?>
            </td>
        </tr>

        <tr>
            <td><label>Website:</label></td>
            <td>
                <input type="text" name="website" value="<?php echo $website; ?>">
            </td>
        </tr>

        <tr>
            <td><label>Comment:</label></td>
            <td>
                <textarea name="comment"><?php echo $comment; ?></textarea>
            </td>
        </tr>

        <tr>
            <td><label>Gender:</label></td>
            <td>
                <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female
                <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male
                <input type="radio" name="gender" value="Other" <?php if($gender=="Other") echo "checked"; ?>> Other
                <?php echo $validGender; ?>
            </td>
        </tr>
        <tr>
            <td> File Upload:</td>
            <td> <input type="file" name="file"></td>
            </tr>

    <tr>
            <td>
                <input type="submit" value="Submit">
            </td>
        </tr>

    </table>
</form>

</body>
</html>

