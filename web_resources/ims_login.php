<?php
    // If the user is already logged in, send them to dashboard
    session_start();
    if (isset($_SESSION['username'])) {
        header('Location: ../dashboard');
    }

    include('../libraries/constants.php');

    // Connect to the database
    $dbc = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT) or die ('Could not connect');

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
