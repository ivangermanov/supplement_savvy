<?php
$emailErr = $nameErr = $pswErr = $psw_repeatErr = "";
$email = $name = $psw = $psw_repeat = "";
$lastPage = $_SERVER['HTTP_REFERER'];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["email"]))
	{
		$emailErr = "Email is required";
		echo($emailErr);
	}
	else if (!filter_var(test_input($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
  		$emailErr = "Invalid email format"; 
	}
	else 
	{
		$email = test_input($_POST["email"]);
	}
	if (empty($_POST["name"])) 
	{
		$nameErr = "Name is required";
		echo($nameErr);
	}
	else if (!preg_match("/^[a-zA-Z ]*$/", test_input($_POST["name"]))) {
  		$nameErr = "Only letters and white space allowed";
		echo($nameErr); 
	}
	else 
	{
		$name = test_input($_POST["name"]);
	}
	if (empty($_POST["psw"])) 
	{
		$pswErr = "Password is required";
		echo($pswErr);
	}
	else 
	{
		$psw = test_input($_POST["psw"]);
	}
	if (empty($_POST["psw_repeat"]))
	{
		$psw_repeatErr = "Password repeat is required";
		echo($psw_repeatErr);
	}
	else if (($_POST["psw_repeat"]) != $psw)
	{
		$psw_repeatErr = "Passwords don't match";
		echo($psw_repeatErr);
	}
	else 
	{
		$psw_repeat = test_input($_POST["psw_repeat"]);
	}
	if ($emailErr == "" && $nameErr == "" && $pswErr == "" && $psw_repeatErr == "")
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
		$psw = md5($psw);
		$sql = "INSERT INTO ACCOUNT (email, name, password)
				VALUES ('$email', '$name', '$psw')"; 

		if ($conn->query($sql) === TRUE) 
		{
			$conn->close();
			echo 
			"
			<script type='text/javascript'>

			var answer = confirm('Sign up is successful!');
			window.location = '$lastPage';

		 	</script>
			 ";
		}
		else
		{
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>