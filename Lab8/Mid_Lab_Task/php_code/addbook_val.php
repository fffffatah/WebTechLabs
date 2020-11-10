<?php
    $bname="";
    $err_bname="";
    $category="";
    $err_category="";
    $description="";
    $err_description="";
    $edition="";
    $err_edition="";
    $publisher="";
    $err_publisher="";
    $isbn="";
    $err_isbn="";
    $pages="";
    $err_pages="";
    $price="";
    $err_price="";
    $hasError=false;

    if(isset($_POST["add"])){
        if(empty($_POST["bname"])){
			$err_bname="Book Name Required";
			$hasError =true;	
		}
		else{
			$bname = htmlspecialchars($_POST["bname"]);
        }
        if(isset($_POST["category"])){
            $category=$_POST["category"];
        }
        else{
            $err_category="Select a Category";
            $hasError=true;
        }
        if(empty($_POST["description"])){
            $err_description="Description Required";
            $hasError=true;
        }
        else{
            $description=htmlspecialchars($_POST["description"]);
        }
        if(empty($_POST["publisher"])){
            $err_publisher="Publisher Required";
            $hasError=true;
        }
        else{
            $publisher=htmlspecialchars($_POST["publisher"]);
        }
        if(empty($_POST["edition"])){
            $err_edition="Edition Required";
            $hasError=true;
        }
        else{
            $edition=htmlspecialchars($_POST["edition"]);
        }
        if(empty($_POST["isbn"])){
            $err_isbn="ISBN Required";
            $hasError=true;
        }
        else{
            $isbn=htmlspecialchars($_POST["isbn"]);
        }
        if(empty($_POST["pages"])){
            $err_pages="Pages Required";
            $hasError=true;
        }
        else{
            $pages=htmlspecialchars($_POST["pages"]);
        }
        if(empty($_POST["price"])){
            $err_price="Price Required";
            $hasError=true;
        }
        else{
            $price=htmlspecialchars($_POST["price"]);
        }

        if(!$hasError){
            $books = simplexml_load_file("xml_data/books.xml");
			
            $book = $books->addChild("book");
            $admin->addChild("bname",$bname);
			$admin->addChild("category",$category);
            $admin->addChild("description",$description);
            $admin->addChild("publisher",$publisher);
            $admin->addChild("edition",$edition);
            $admin->addChild("isbn",$isbn);
            $admin->addChild("pages",$pages);
            $admin->addChild("price",$price);
            $admin->addChild("image","defaultBook.png");
			
			$xml = new DOMDocument("1.0");
			$xml->preserveWhiteSpace=false;
			$xml->formatOutput= true;
			$xml->loadXML($books->asXML());
			
			$file = fopen("xml_data/books.xml","w");
			fwrite($file,$xml->saveXML());
        }
    }
?>