<?php
    $uname="";
    $pass="";
    $err_uname="No Username Given!";
    $err_pass="No Pass Given!";
    $hasError=false;
    if(isset($_POST["login"])){
        if(empty($_POST["uname"])){
            $hasError=true;
        }
        else{
            $uname=$_POST["uname"];
        }
        if(empty($_POST["pass"])){
            $hasError=true;
        }
        else{
            $pass=$_POST["pass"];
        }
        if($hasError){
            echo $err_uname;
            echo $err_pass;
        }
        else{
            echo "Name: ".$uname;
            echo "Password: ".$pass;
        }
    }
?>
<html>
    <head></head>
    <body>
        <h1>Login Form Submitted</h1>
        <?php
            //echo "Username: ".$_POST["uname"]."<br>";
            //echo "Password: ".$_POST["pass"]."<br>";
        ?>
    </body>
</html>