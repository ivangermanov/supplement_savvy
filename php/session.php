<?php
session_start();
if (isset($_SESSION['loggedIn']))
{
	return true;
}
else 
{
	return false;
}
?>