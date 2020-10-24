<html>
    <body>
        <?php
            $x=5;
            fun(){
                //global $x;
                echo "Inside Method: ".$x;
            }
            echo "Outside Method: ".$x;
        ?>
        <?php
            $cars=array("BMW,Lamborghini,Ferrari");
            for($i=0;i<count($cars);$++){
                echo "Cars: ".$cars[$i]."<br>";
            }
        ?>
        <?php
            //Traditional Array
            $names=array("Ram", "Sham", "Karim", "Rahim");
            $ages=array(21,22,34,45);
            //Associative Array
            $nameAndAge=array("Ram"=>21,"Sham"=>22, "Karim"=>34, "Rahim"=>45);
            //More Ways
            $a1=[]; //Can be Initialized Later
            $a2=array();//Can be Initialized Later
            //Foreach Loop
            foreach($names as $name){
                echo "Names: ".$name."<br>";
            }
            foreach($nameAndAge as $k=>$v){
                echo "Names and Ages: ".$k."is ".$v." years old. <br>";
            }
        ?>
    </body>
</html>