<?php
    if(!isset($_COOKIE["uname"])){
		header("Location: Login.php");
	}
?>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Book Store</h1>
        <center>
            <form action="" method="POST">
                <table border="1" style="border: thick;">
                    <tr>
                        <td>
                            <table border="2">
                                <tr>
                                    <td align="left"><a href="Addbook.php">Add New Book</a></td>
                                </tr>
                                <tr>
                                    <td><b><u>SR.NO</u></b></td>
                                    <td><b><u>NAME</u></b></td>
                                    <td><b><u>PUBLISHER</u></b></td>
                                    <td><b><u>ISBN</u></b></td>
                                    <td><b><u>PRICE</u></b></td>
                                    <td><b><u>IMAGE</u></b></td>
                                    <td><b><u>DELETE</u></b></td>
                                </tr>
                                
                                <?php
                                    $books = simplexml_load_file("xml_data/books.xml");
                                    $i=0;
                                    foreach($books as $book){
                                        echo "<tr><td>".$i."</td><td>".$book->bname."</td><td>".$book->publisher."</td><td>".$book->isbn."</td><td>".$book->price."</td><td><img src=".$book->image." style=\"width:20px;height:20px;\"></td><td><img src=\"images/delete.png\" style=\"width:10px;height:10px;\"></td></tr>";
                                        $i++;
                                    }
                                ?>
                            </table>
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>