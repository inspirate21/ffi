<?php
    session_start();
	
	// remove all session variables
	session_unset(); 

// destroy the session 
	session_destroy(); 
	
    unset($_SESSION['Username']);
    header('Location: login.php');
     exit();
?>