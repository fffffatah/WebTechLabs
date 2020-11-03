<?php
    $file=readfile("data.txt"); //READS TXT FILE
    $file=fopen("data.txt","r");

    while(!feof($file)){ //READS EACH LINE IN A TXT FILE
        echo fgets($file)."<br>";
    }

    echo fgetc($file); //READS THE FIRST CHAR
    echo fgets($file); //READS A SINGLE LINE

    while(!feof($file)){ //READS EACH LINE IN A TXT FILE
        $line=fgets($file);
        $info=explode(" ",$line); //DIVIDE LINE BY CHAR, HERE " "
    }
    echo "<pre>";
    print_r($info);
    echo "</pre>";
    echo "Username: ".$info[0]."<br>";
    echo "Pass: ".$info[1]."<br>"; 
    echo "Auth: ".$info[2]."<br>"; 
    //XML DATA READ
    $xml=simplexml_load_file("DATA.xml");
    echo "<pre>";
    print_r($xml); //WILL PRINT XML ELEMENT OBJECTS STORED IN ARRAY
    echo "</pre>";
    $users=$xml->user;
    foreach($users as $user){
        echo "Username: ".$user->username;
    }
    //REDIRECT
    $flag=true;
    if($flag){
        header("Location: dashboard.php");
    }
?>