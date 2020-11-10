<?php include_once "php_code/reg_val.php" ;?>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <center>
            <h1>Welcome to Registration</h1>
        </center>
        <center>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td align="left">Full Name:</td>
                        <td align="left"><input type="text" value="<?php echo $fname;?>" name="fname"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_fname;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">User Name:</td>
                        <td align="left"><input type="text" value="<?php echo $uname;?>" name="uname"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_uname;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Password:</td>
                        <td align="left"><input type="password" value="<?php echo $pass;?>" name="pass"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_pass;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Confirm Password:</td>
                        <td align="left"><input type="password" value="<?php echo $cpass;?>" name="cpass"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_cpass;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Gender:</td>
                        <td>
                            <input type="radio" name="gender"> Male
                            <input type="radio" name="gender"> Female
                        </td>
                        <td align="left"><span style="color:red;">*<?php echo $err_gender;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">E-mail Address:</td>
                        <td align="left"><input type="text" value="<?php echo $email;?>" name="email"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_email;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">Contact No.:</td>
                        <td align="left"><input type="number" value="<?php echo $phone;?>" name="phone"></td>
                        <td align="left"><span style="color:red;">*<?php echo $err_phone;?></span></td>
                    </tr>
                    <tr>
                        <td align="left">City:</td>
                        <td align="left">
                            <select name="city">
                                <option disabled selected>Select a City</option>
                                <option>Dhaka</option>
                                <option>Chittagong</option>
                                <option>Sylhet</option>
                            </select>
                        </td>
                        <td align="left"><span style="color:red;">*<?php echo $err_city;?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" name="ok" value="OK">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>