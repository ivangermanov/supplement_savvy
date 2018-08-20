<!DOCTYPE html>
<html lang="en">
     <?php
$lastPage = $_SERVER['HTTP_REFERER'];
if (!isset($_COOKIE['email']))
{
	if (!strpos($lastPage, 'contact.php'))
	{
    	echo 
			"
			<script type='text/javascript'>

			var answer = confirm('Log-in required!');
			
			window.location = '$lastPage';
		 	</script>
			 ";
	}
	else 
	{
    	echo 
			"
			<script type='text/javascript'>

			var answer = confirm('Log-in required!');
			
			window.location = 'index.php';
		 	</script>
			 ";
	}
}

    ?>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<title>Supplement Savvy</title>
	<meta charset="UTF-8">
</head>
<body class="grid-container">
    <?php
        require 'php/session.php';
        require 'php/header_template.php';
    ?>
    
<section class="main-section flex-container-vertical">
    <section class="flex-container-vertical">
	<div class="contact-box">
		<h1> Contact us </h1>
		<form id="contact-form" action="php/form-to-email.php">
			
			<input class="inputs" type="text" name="subject" placeholder="Subject">
			<textarea class="textarea" name="message" form="contact-form" placeholder="Message">  </textarea>
            <br>
            <input id="submit" type="submit" name="submit" value="Submit">
		</form>
	</div>
    </section>
</section>
    
<!-- Footer -->
<?php
        include 'php/footer_template.php';
?>

<!-- Modal -->
<?php
    require 'php/modal_template.php';
?>

<script src="javascript/login_signup_outside.js"></script>
<script src="javascript/password_validate.js"></script>
</body>
</html>