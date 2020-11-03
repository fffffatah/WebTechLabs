<?php 
    $uname="";
    $err_uname="";
    $pass="";
    $err_pass="";
    $hasErr=false;
    if(isset($_POST["register"])){
        if(empty($_POST["uname"])){
            $err_uname="Username Required!";
            $hasErr=true;
        }
        else{
            $uname=htmlspecialchars($_POST["uname"]);
        }
        if(empty($_POST["pass"])){
            $err_pass="Password Required!";
            $hasErr=true;
        }
        else{
            $pass=htmlspecialchars($_POST["pass"]);
        }
        if($hasErr){
            //LOAD XML AND ADD MORE ATTRIBUTES
            $users=simplexml_load_file("DATA.xml");
            $user=$users->addChild("user");
            $user->addChild("username",$uname);
            $user->addChild("pass",$pass);
            $user->addChild("type","user");

            //FORMAT DOCUMENT
            $xml=new DOMDocument("1.0");
            $xml->preserveWhiteSpace=false;
            $xml->formatOutput=true;
            $xml->loadXML($users->asXML());

            //DO WRITE
            $file=fopen("DATA.xml","w");
            fwrite($file,$users->saveXML());
        }
    }
?>