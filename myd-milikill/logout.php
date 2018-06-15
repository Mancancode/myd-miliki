<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
	session_destroy();
    header("Location:index.php"); // Redirecting To Home Page
}

?>