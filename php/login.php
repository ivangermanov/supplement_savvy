<?php
$emailErr = $pswErr = "";
$email = $psw = "";
$lastPage = $_SERVER['HTTP_REFERER'];

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["email"]))
	{
		$emailErr = "Email is required";
		echo($emailErr);
	}
	else if (!filter_var(test_input($_POST["email"]), FILTER_VALIDATE_EMAIL)) 
	{
  		$emailErr = "Invalid email format"; 
	}
	else 
	{
		$email = test_input($_POST["email"]);
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

	if ($emailErr == "" && $pswErr == "" )
	{
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
		$sql = "SELECT email, password
				FROM account
				WHERE password = '$psw' 
				AND email = '$email';";

		$resultQuery = $conn->query($sql);
		if($resultQuery->num_rows == 1) 
		{
		    session_start();
		    $_SESSION["email"] = "$email";
			$_SESSION["loggedIn"] = TRUE;
			$conn->close();
			
			if (isset($_POST['remember']))
			{
				/* cookie last 1 year */
				setcookie('email', $email, time()+60*60*24*365, "/");
			}
			else 
			{
				/* cookie expires on browser close */
				setcookie('email', $email, 0, "/");
			}
		    header("Location: $lastPage");
		}
		else 
		{
			echo 
			"
			<script type='text/javascript'>

			var answer = confirm('Wrong password!');
			window.location = '$lastPage';

		 	</script>
			 ";
		}
		$conn->close();
	}


}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
