<?php
    if(isset($_POST["add"])){
        if(empty($_POST["bname"])){
			$err_uname="Username Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["uname"]);
		}
    }
?>