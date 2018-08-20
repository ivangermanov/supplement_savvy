<?php
$productName = $_REQUEST['name'];
$sql = "SELECT productID
        FROM product
        WHERE name = '$productName';";
$servername = "studmysql01.fhict.local";
		$username = "dbi380810";
		$password = "ivelinvelivan";
		$dbname = "dbi380810";
		$port = 3306;
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname, $port);

		if ($conn->connect_error) 
		{
	    		die("Connection failed: " . $conn->connect_error);
        }

        $resultQuery = $conn->query($sql);
		if ($resultQuery->num_rows == 1) 
		{
            $row = $resultQuery->fetch_array(MYSQLI_ASSOC);
            echo "product".$row['productID'].".php";
        }
?>