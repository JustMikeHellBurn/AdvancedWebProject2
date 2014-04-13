<?php
/*
    Title:              Incident Tracker
    Authors' Names:     Justin Hellsten http://advanceweb.justinhellsten.com/project2/
                        Michael Burnie  http://comp2068.michaelburnie.com/project2/
    File Name:          ims_update_account.php
    Description:        This is a web resources page, which is used by the system to update the account settings for the user. 
						The username, password, user type, and email can all change. Redirects user back to account settings page in the dashboard.
    Last Modified Date: 2014/04/13
*/

	require('../libraries/db_connect.php');

	session_start();

	$redirect = "Location: ../dashboard/account_settings";

	// Make sure fields are set by checking if request POST is set.
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {

		// Grab inputs, make sure to trim and escape them. 
	    $username = trim(mysqli_real_escape_string($dbc, $_POST['username']));
		$old_password = trim(mysqli_real_escape_string($dbc, $_POST['old_password']));
		$new_password = trim(mysqli_real_escape_string($dbc, $_POST['new_password']));
		$confirm_password = trim(mysqli_real_escape_string($dbc, $_POST['confirm_password']));
		$email = trim(mysqli_real_escape_string($dbc, $_POST['email']));
		$user_type = trim(mysqli_real_escape_string($dbc, $_POST['user_type']));
		
		// Skip this check if username is the same, else do another check...
		if (strcmp($username, $_SESSION['username']) != 0) {
			// Check if picked username is already in the database
			$sql = "SELECT username FROM users WHERE username='$username'";
			$result = mysqli_query($dbc, $sql);
			if (mysqli_num_rows($result) == 1) {
				header($redirect);
			} 
		}
	
		// Make sure old password is actually the old password and 
		// check if old password is not the new password
		$sql = "SELECT password FROM users WHERE username='" . $_SESSION['username'] . "'";
		$result = mysqli_query($dbc, $sql);
		$row = mysqli_fetch_array($result);
		if (strcmp($row[0], $old_password) == 0 && strcmp($old_password, $new_password) == 0) {
			header($redirect);
		} else {
			// Confirm password
			if (strcmp($new_password, $confirm_password) != 0) {
				header($redirect);
			}
		}
	
		// Make sure email is valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			header($redirect);
		}
	
	    // Check User Type Field (Check if user type is in database)
	    $user_type_check = false;
	    $sql = "SELECT * FROM userTypes";
	    $user_type_result = mysqli_query($dbc, $sql);
	    while ($user_type_row = mysqli_fetch_array($user_type_result)) {
	    	if (strcmp($user_type, $user_type_row[0]) == 0) {
	         	$user_type_check = true;
	        }
	   	}
	    if (!$user_type_check) {
			header($redirect);
		}
	
		// Update User Account Settings
		$sql = "UPDATE users SET username='$username', password='$new_password', email='$email', type='$user_type' WHERE username='" . $_SESSION['username'] . "'";
		$result = mysqli_query($dbc, $sql);
	
		// Change session username to the new username, and go back to account settings page
		$_SESSION['username'] = $username;
	
		header($redirect);
	}

?>
