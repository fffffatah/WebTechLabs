<?php 
    $name="";
    $err_name="";
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $email="";
    $err_email="";
    $phoneCode="";
    $err_phoneCode="";
    $phoneNum="";
    $err_phoneNum="";
    $address="";
    $err_address="";
    $city="";
    $err_city="";
    $state="";
    $err_state="";
    $postalCode="";
    $err_postalCode="";
    $dobDay="";
    $dobMonth="";
    $dobYear="";
    $err_dob="";
    $gender="";
    $err_gender="";
    $refer="";
    $err_refer="";
    $bio="";
    $err_bio="";
    $has_err=false;
    if(isset($_POST["register"])){
        //NAME VALIDATION
        if(empty($_POST["name"])){
            $err_name="Please Enter Name!";
            $has_err=true;
        }
        elseif(strpos($_POST["name"],"abcd")){
			$err_name="Name can not contain sequence of 'abcd'";
            $has_err=true;
        }
        else{
            $name=htmlspecialchars($_POST["name"]);
        }
        //USER NAME VALIDATION
        if(empty($_POST["uname"])){
            $err_uname="Please Enter Username!";
            $has_err=true;
        }
        elseif((strlen($_POST["uname"])<6)){
            $err_uname="Username must be 6 characters long!";
            $has_err=true;
        }
        elseif(strpos($_POST["uname"]," ")){
            $err_uname="Username can not contain any space!";
            $has_err=true;
        }
        else{
            $uname=htmlspecialchars($_POST["uname"]);
        }
        //PASSWORD VALIDATION
        if(empty($_POST["pass"])){
            $err_pass="Please Enter Password!";
            $hasError=true;
        }
        elseif(strlen($_POST["pass"])<8){
            $err_pass="Password must be 8 characters long.";
            $hasError=true;
        }
        elseif(!strpos($_POST['pass'], "1") && !strpos($_POST['pass'], "2") && !strpos($_POST['pass'], "3") && !strpos($_POST['pass'], "4")
            && !strpos($_POST['pass'], "5") && !strpos($_POST['pass'], "6") && !strpos($_POST['pass'], "7") && !strpos($_POST['pass'], "8")
            && !strpos($_POST['pass'], "9") && !strpos($_POST['pass'], "0")) {
            $err_pass="Password must have 1 numeric";
            $hasError=true;
        }
        elseif(strcmp(strtoupper($_POST["pass"]),$_POST["pass"])==0 && strcmp(strtolower($_POST["pass"]),$_POST["pass"])==0){
            $err_pass="Password must contain 1 Upper and Lowercase letter.";
            $hasError=true;
        }
        elseif(strpos($_POST["pass"],"#")==false && strpos($_POST["pass"],"?")==false){
            $err_pass="Password must contain '#' or '?'.";
            $hasError=true;
        }
        elseif(empty($_POST["cpass"])){
            $err_cpass="Please Enter Confirm Password!";
            $hasError=true;
        }
        elseif(strcmp($_POST["cpass"],$_POST["pass"])!=0){
            $err_cpass="Password and Confirm Password must be same.";
            $hasError=true;
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
        //EMAIL VALIDATION
        if(empty($_POST["email"])){
            $err_email="Please Enter Email!";
            $has_err=true;
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                $email=htmlspecialchars($_POST["email"]);
            }
            else{
                $err_email="'@' Must be before '.'.";
                $has_err=true;
            }
        }
        else{
            $err_email="Email must contain '@' and '.'.";
            $has_err=true;
        }
        //PHONE CODE VALIDATION
        if(empty($_POST["phoneCode"])){
            $err_phoneCode="Please Enter Phone Code!";
            $has_err=true;
        }
        elseif(strlen($_POST["phoneCode"]) != 3){
            $err_phoneCode="Phone code must be 3 characters.";
            $has_err=true;
        }
        elseif(!is_numeric($_POST["phoneCode"])){
            $err_phoneCode="Phone code must be numeric.";
            $has_err=true;
        }
        else{
            $phoneCode=htmlspecialchars($_POST["phoneCode"]);
        }
        //PHONE NUMBER VALIDATION
        if(empty($_POST["phoneNum"])){
            $err_phoneNum="Please Enter Phone Number!";
            $has_err=true;
        }
        elseif(strlen($_POST["phoneNum"]) != 10){
            $err_phoneNum="Phone number must be 10 characters.";
            $has_err=true;
        }
        elseif(!is_numeric($_POST["phoneNum"])){
            $err_phoneNum="Phone number must be numeric.";
            $has_err=true;
        }
        else{
            $phoneNum=htmlspecialchars($_POST["phoneNum"]);
        }
        //ADDRESS VALIDATION
        if(empty($_POST["address"])){
            $err_address="Address can not be empty.";
            $has_err=true;
        }
        else{
            $address=htmlspecialchars($_POST["address"]);
        }
        //CITY VALIDATION
        if(empty($_POST["city"])){
            $err_city="City can not be empty.";
            $has_err=true;
        }
        else{
            $city=htmlspecialchars($_POST["city"]);
        }
        //STATE VALIDATION
        if(empty($_POST["state"])){
            $err_state="State can not be empty.";
            $has_err=true;
        }
        else{
            $state=htmlspecialchars($_POST["state"]);
        }
        //POSTAL CODE VALIDATION
        if(empty($_POST["postalCode"])){
            $err_postalCode="Postal Code can not be empty.";
            $has_err=true;
        }
        else{
            $postalCode=htmlspecialchars($_POST["postalCode"]);
        }
        //DOB VALIDATION
        if(isset($_POST["dobDay"])){
            $dobDay=htmlspecialchars($_POST["dobDay"]);
        }
        elseif(isset($_POST["dobMonth"])){
            $dobDay=htmlspecialchars($_POST["dobMonth"]);
        }
        elseif(isset($_POST["dobYear"])){
            $dobDay=htmlspecialchars($_POST["dobYear"]);
        }
        else{
            $err_dob="Please Select Date of Birth Carefully!";
            $has_err=true;
        }
        //GENDER VALIDATION
        if(!isset($_POST["gender"])){
			$err_gender="Gender Required.";
			$has_err=true;
        }
        else{
            $gender=htmlspecialchars($_POST["gender"]);
        }
        //REFER CHECKBOX VALIDATION
        if(!isset($_POST["refer"])){
			$err_refer="Atleast select 1 Checkbox.";
			$has_err=true;
        }
        else{
            $dobDay=htmlspecialchars($_POST["dobDay"]);
            $dobMonth=htmlspecialchars($_POST["dobMonth"]);
            $dobYear=htmlspecialchars($_POST["dobYear"]);
        }
        //BIO VALIDATION
        if(empty($_POST["bio"])){
            $err_bio="Bio can not be empty!";
            $has_err=true;
        }
        else{
            $bio=htmlspecialchars($_POST["bio"]);
        }
        //PRINT DETAILS
        if(!$has_err){
            $details=array("Name: ".$name,"Username: ".$uname,"Password: ".$pass,"Email: ".$email,"Phone: +".$phoneCode.$phoneNum,"Address: ".$address,"City: ".$city,"State: ".$state,"Postal Code: ".$postalCode,"Birth Date: ".$dobDay.", ".$dobMonth.", ".$dobYear,"Gender: ".$gender,"Referred: ".implode(',', $_POST['refer']),"Bio: ".$bio);
            foreach($details as $detail){
                echo "<h4>".$detail."</h4><br>";
            }
        }
    }
?>
<html>
    <head>
        <title>Club Registration</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <td>
                        <form action="" method="POST">
                            <fieldset>
                                <legend><h1>Club Member Registration</h1></legend>
                                <table>
                                    <tr>
                                        <td align="right">Name:</td>
                                        <td><input type="text" name="name"> <?php echo $err_name ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Username:</td>
                                        <td><input type="text" name="uname"> <?php echo $err_uname ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Password:</td>
                                        <td><input type="password" name="pass"> <?php echo $err_pass ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Confirm Password:</td>
                                        <td><input type="password" name="cpass"> <?php echo $err_cpass ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Email:</td>
                                        <td><input type="text" name="email"> <?php echo $err_email ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Phone:</td>
                                        <td>
                                            <input type="text" placeholder="Code" size="3" name="phoneCode"> <?php echo $err_phoneCode ?>-
                                            <input type="text" placeholder="Number" size="9" name="phoneNum"> <?php echo $err_phoneNum ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Address:</td>
                                        <td><input type="text" placeholder="Street Address" name="address"> <?php echo $err_address ?></td>
                                    </tr>
                                    <tr>
                                        <td><!--NOTHING--></td>
                                        <td>
                                            <input type="text" placeholder="City" size="6" name="city"> <?php echo $err_city ?>-
                                            <input type="text" placeholder="State" size="6" name="state"> <?php echo $err_state ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><!--NOTHING--></td>
                                        <td><input type="text" placeholder="Postal/Zip Code" name="postalCode"> <?php echo $err_postalCode ?></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Birth Date:</td>
                                        <td>
                                            <select name="dobDay">
                                                <?php
                                                    echo "<option disabled selected>Day</option>";
                                                    for($i=1; $i<32; $i++){
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <select name="dobMonth">
                                                <?php
                                                    $months=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
                                                    echo "<option disabled selected>Month</option>";
                                                    for($i=0; $i<12; $i++){
                                                        echo "<option>".$months[$i]."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <select name="dobYear">
                                                <?php
                                                    echo "<option disabled selected>Year</option>";
                                                    for($i=1997; $i<2021; $i++){
                                                        echo "<option>".$i."</option>";
                                                    }
                                                ?>
                                            </select>
                                            <?php echo $err_dob ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Gender:</td>
                                        <td>
                                            <input type="radio" name="gender"> Male
                                            <input type="radio" name="gender"> Female <?php echo "  |".$err_gender ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Where did you hear about us?</td>
                                        <td>
                                            <input type="checkbox" name="refer[]" value="A Friend or Colleague"> Movies<br>
							                <input type="checkbox" name="refer[]" value="Google"> Music <br>
							                <input type="checkbox" name="refer[]" value="Blog Post"> Programming<br>
							                <input type="checkbox" name="refer[]" value="News Article"> Travelling <?php echo "<br>".$err_refer ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Bio:</td>
                                        <td><textarea name="bio"></textarea> <?php echo $err_bio ?></td>
                                    </tr>
                                    <tr>
                                        <td><!--NOTHING--></td>
                                        <td>
                                            <input type="submit" name="register" value="Register">
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>