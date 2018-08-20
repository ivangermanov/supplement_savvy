<?php
//if(!isset($_POST['submit']))
//{
//	
//	echo "error; you need to submit the form!";
//}

$lastPage = $_SERVER['HTTP_REFERER'];
require_once "../contact.php";
require_once "Mail.php";

$email = $_COOKIE['email'];
$message = $_REQUEST['message'];
$from = '<supplementsavvy@gmail.com>';
$to = '<supplementsavvy@gmail.com>';
$subject = $_REQUEST['subject'];
$body =  "$message from user email: $email";

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);

$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'supplementsavvy@gmail.com',
        'password' => 'HonestSupplement'
    ));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
     echo 
			"
			<script type='text/javascript'>

			var answer = confirm('Send succesful!');
			

		 	</script>
			 ";
}
?> 