<?php
    $fname="";
	$err_fname="";
	$uname="";
	$err_uname="";
	$pass="";
    $err_pass="";
    $cpass="";
    $err_cpass="";
    $gender="";
    $err_gender="";
    $email="";
    $err_email="";
    $phone="";
    $err_phone="";
    $city="";
    $err_city="";
	$hasError=false;
	if(isset($_POST["ok"])){
        //FULL NAME VALIDATION
        if(empty($_POST["fname"])){
			$err_fname="Full Name Required";
			$hasError =true;	
		}
		else{
			$fname = htmlspecialchars($_POST["fname"]);
        }
        //USERNAME VALIDATION
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
        }
        elseif((strlen($_POST["uname"])<6)){
            $err_uname="Username must be 6 characters long!";
            $hasError=true;
        }
		else{
			$uname = htmlspecialchars($_POST["uname"]);
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
        elseif(strpos($_POST["pass"],"#")==false || strpos($_POST["pass"],"?")==false){
            $err_pass="Password must contain '#' or '?'.";
            $hasError=true;
        }
        elseif(strpos($_POST["pass"],"0")==false){
            for($i=0; $i<10; $i++){
                if(!strpos($_POST["pass"],"$i")){
                    $hasError=true;
                    break;
                }
                else{
                    continue;
                }
            }
            $err_pass="Password must contain 1 numeric.";
        }
        elseif(strtolower($_POST["pass"])==$_POST["pass"] || strtolower($_POST["pass"])==$_POST["pass"]){
            $err_pass="Password must contain 1 Upper and Lowercase letter.";
            $hasError=true;
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
        //CONFIRM PASSWORD VALIDATION
        if(empty($_POST["cpass"])){
            $err_cpass="Please Enter Confirm Password!";
            $hasError=true;
        }
        elseif(!strcmp($_POST["cpass"],strtoupper($_POST["pass"]))){
            $err_cpass="Password and Confirm Password must be same.";
            $hasError=true;
        }
        //GENDER VALIDATION
        if(isset($_POST["gender"])){
            $gender=$_POST["gender"];
        }
        else{
            $err_gender="Select a Gender!";
            $hasError=true;
        }
        //EMAIL VALIDATION
        if(empty($_POST["email"])){
            $err_email="Please Enter Email!";
            $hasError=true;
        }
        elseif(strpos($_POST["email"],"@") && strpos($_POST["email"],".")){
            if(strpos($_POST["email"],"@") < strpos($_POST["email"],".")){
                $email=htmlspecialchars($_POST["email"]);
            }
            else{
                $err_email="'@' Must be before '.'.";
                $hasError=true;
            }
        }
        else{
            $err_email="Email must contain '@' and '.'.";
            $hasError=true;
        }
        //PHONE VALIDATION
        if(empty($_POST["phone"])){
            $err_phone="Contact No. Required";
            $hasError=true;
        }
        else{
            $phone=$_POST["phone"];
        }
        //CITY VALIDATION
        if(isset($_POST["city"])){
            $city=$_POST["city"];
        }
        else{
            $err_city="Select a City!";
            $hasError=true;
        }
		
		if(!$hasError){
			$admins = simplexml_load_file("xml_data/admins.xml");
			
            $admin = $admins->addChild("admin");
            $admin->addChild("fname",$fname);
			$admin->addChild("uname",$uname);
            $admin->addChild("pass",$pass);
            $admin->addChild("gender",$gender);
            $admin->addChild("email",$email);
            $admin->addChild("phone",$phone);
            $admin->addChild("city",$city);
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($admins->asXML());
			
			$file = fopen("xml_data/admins.xml","w");
			fwrite($file,$xml->saveXML());
		}
	}
	
?>