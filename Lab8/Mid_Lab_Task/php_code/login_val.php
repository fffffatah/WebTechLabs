<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$flag=false;
	if(isset($_POST["login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
        }
		
		if(!$hasError){
			$admins = simplexml_load_file("xml_data/admins.xml");
			foreach($admins as $admin){
                if(strcmp($admin->uname,$_POST["uname"])==0 && strcmp($user->pass,$_POST["pass"])==0){
					$flag=true;
                }
                else{
                    $flag=false;
                    break;
                }
			}
			
			if(!$flag){
				echo "Invalid Credentials!";
			}
			else{
				header("Location: Dashboard.php");
			}
		}
	}
	
?>