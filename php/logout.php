<?php
include 'php/session.php';
$lastPage = $_SERVER['HTTP_REFERER'];
$index = "../index.php";
$currentPage = $_SERVER['REQUEST_URI'];
unset($_COOKIE['email']);
setcookie('email', '', time() - 3600, '/');  
session_unset();
session_destroy();
if ($lastPage == '../contact.php')
     echo "
			<script type='text/javascript'>

			var answer = confirm('Log-in required!');
			window.location = '$index';

		 	</script>
			 ";
else
    header("Location: $lastPage");

?>