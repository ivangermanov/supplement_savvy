<?php
function getRating($productId)
{
    $servername = "studmysql01.fhict.local";
    $username = "dbi380810";
    $password = "ivelinvelivan";
    $dbname = "dbi380810";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) 
    {
            die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT rating FROM product WHERE productID=$productId";

    if ($result = $conn->query($sql))
    {
        while($row = $result->fetch_row())
        {
            $rating = $row[0];
        }
        $conn->close();
        return $rating;
    }
    $conn->close();
}
?>