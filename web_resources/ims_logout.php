<?php
/*
    Title:              Incident Tracker
    Authors' Names:     Justin Hellsten http://advanceweb.justinhellsten.com/project2/
                        Michael Burnie  http://comp2068.michaelburnie.com/project2/
    File Name:          ims_logout.php
    Description:        Log the user out but destroying the session
    Last Modified Date: 2014/04/13
*/

	session_start();
	// Check if user is logged in 
	if (isset($_SESSION['username'])) {
		session_unset(); 
		session_destroy(); 
	}

	// Redirect to login page
	header('Location: ../index');

?>
