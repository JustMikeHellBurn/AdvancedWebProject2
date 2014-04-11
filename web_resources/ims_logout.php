<?php
	session_start();
	// Check if user is logged in 
	if (isset($_SESSION['username'])) {
		session_unset(); 
		session_destroy(); 
	}

	header('Location: ../index');

?>
