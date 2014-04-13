<?php
/*
    Title:              Incident Tracker
    Authors' Names:     Justin Hellsten http://advanceweb.justinhellsten.com/project2/
                        Michael Burnie  http://comp2068.michaelburnie.com/project2/
    File Name:          ims_login.php
    Description:        This is a web resources page, which is used by the system to process login credentials, and redirects the user to
						the dashboard on success. 
    Last Modified Date: 2014/04/13
*/

    // If the user is already logged in, send them to dashboard
    session_start();
    if (isset($_SESSION['username'])) {
        header('Location: ../dashboard');
    }

    // Connect to the database
    require('../libraries/db_connect.php');

   	$username = trim(mysqli_real_escape_string($dbc, $_POST['loginusername']));
    $password = trim(mysqli_real_escape_string($dbc, $_POST['loginpassword']));

	// Check if match in the database
    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
	$result = mysqli_query($dbc, $sql);
	if (mysqli_num_rows($result) == 1) {
		// Create session for user
		$_SESSION['username'] = $username;

		// Redirect to dashboard if login is successful
        header('Location: ../dashboard/');
    } else {
		header('Location: ../index');
	}

	mysqli_close($dbc);
?>
