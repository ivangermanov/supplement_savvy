<?php
    $productId = $_POST['comment_product_ID'];
    session_start();
    $lastPage = $_SERVER['HTTP_REFERER'];
    $comment = "";
    if (!isset($_COOKIE['email'])) 
    {
        header("Location: $lastPage");
    }
    else 
    {
        $email = $_COOKIE['email'];
    }
    if (empty($_POST['comment']))
    {
        echo "<script type='text/javascript'>
        var answer = confirm('Comment is empty!');
        window.location = '$lastPage'; </script>";
    }
    else
    {
        $comment = $_POST['comment'];
    }

    $servername = "studmysql01.fhict.local";
    $username = "dbi380810";
    $password = "ivelinvelivan";
    $dbname = "dbi380810";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
            die("Connection failed: " . $conn->connect_error);
    }

    $nameSQL = "SELECT name
                FROM account 
                WHERE email='$email';";

    if ($resultName = $conn->query($nameSQL))
    {
        while($row = $resultName->fetch_row())
        {
            $name = $row[0];
        }
    }

    $sql = "INSERT INTO COMMENT (name, comment, post_time, productID)
            VALUES ('$name', '$comment', now(), $productId)"; 

    if ($conn->query($sql) === TRUE) 
    {

    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: $lastPage");
?>