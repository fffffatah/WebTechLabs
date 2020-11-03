<?php include "php_codes/validation.php";//USE REQUIRE_ONCE,INCLUDE_ONCE
    error_reporting(0);
?>
<html>
    <head>
        <title>DataReadingWriting</title>
    </head>
    <body>
    <fieldset>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="uname" vale="<?php echo $uname;?>"></td>
                    <td>
                    <span style="color:red;">*<?php echo $err_uname;?></span>
                    </td>
                </tr>
                <tr>
                    <td>Pass: </td>
                    <td><input type="password" name="pass" value="<?php echo $pass;?>"></td>
                    <td>
                    <span style="color:red;">*<?php echo $err_uname;?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <input type="submit" name="register" value="Register">
                    </td>
                </tr>
            </table>
        </form>
    </body>
    </fieldset>
</html>